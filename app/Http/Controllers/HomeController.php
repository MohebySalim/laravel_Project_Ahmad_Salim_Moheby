<?php

namespace App\Http\Controllers;

use App\Models\AjscCase;
use App\Models\Complaint;
use App\Models\Province;
use App\Models\User;
use App\Models\Violence;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    // my profile
    public function MyProfile()
    {
        $data = User::where('id', auth()->user()->id)->first();

        return view('MyProfile', compact('data'));
    }
    public function UpdateMyProfile(Request $request, $id)
    {
        $this->validate($request, ['name'=>'required', 'job'=>'required',
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id]
        ]);
//        return $request->all();
        $user = User::find($id);
        $user->name        = $request->name;
        $user->job         = $request->job;
        $user->email       = $request->email;
        if ($request->password != null){
            $user->password    = Hash::make($request['password']);
        }
        if($request->hasfile('profile')){
            $image = $request->file('profile');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = rand(123456, 999999).".".$image_ext;
            $destination_path = public_path('/images/profile');
            $image->move($destination_path, $new_image_name);
        $user->profile     = $new_image_name;
        }
        $user->save();




        return redirect()->route('home')->with('message', 'Your Profile Updated');
    }
    public function markAsRead($id)
    {
        auth()->user()->unreadNotifications->where('id', $id)->markAsRead();

        return redirect()->back();
    }
    public function UserAllNotifications()
    {
        $data = auth()->user()->notifications()->where('read_at', null)->paginate(10);
        $datas = auth()->user()->notifications()->where('read_at', '!=', null)->paginate(10);

        return view('notifiactions', compact('data', 'datas'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentYear = date('Y');
        $complaints = Complaint::with(['ajscCases' => function ($query) use ($currentYear) {
            $query->whereYear('date', $currentYear);
        }])->get();

        $complaintName = [];
        $complaintCount = [];
        foreach ($complaints as $complaint) {
            $complaintName[] = (app()->getLocale() === 'dr') ? $complaint->name_dr :
                ((app()->getLocale() === 'ps') ? $complaint->name_ps :
                    ((app()->getLocale() === 'en') ? $complaint->name_en : ''));

            $complaintCount[] = $complaint->ajscCases->count();
        }

        $violences = Violence::with(['ajscCases' => function ($query) use ($currentYear) {
            $query->whereYear('date', $currentYear);
        }])->get();

        $violenceName = [];
        $violenceCount = [];
        foreach ($violences as $violence) {
            $violenceName[] = $violence->name_dr;
            $violenceCount[] = $violence->ajscCases->count();
        }

        $provinces = Province::withCount(['ajscCases' => function ($query) use ($currentYear) {
            $query->whereYear('date', $currentYear);
        }])
        ->orderByDesc('ajsc_cases_count')
        ->take(12)
        ->get();

        $provinceName = $provinces->pluck('province_name');
        $provinceCount = $provinces->pluck('ajsc_cases_count');


        $data = 'noor';


//        dd($provinc2);
        return view('home', compact('data', 'complaintName', 'complaintCount', 'violenceName', 'violenceCount', 'provinceName', 'provinceCount'));
    }
}
