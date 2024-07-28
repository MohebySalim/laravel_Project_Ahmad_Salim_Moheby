@auth
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('/assets/endashboard/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">{{__('title')}}</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active':'' }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">{{__('home')}}</div>
            </a>
        </li>
        <li class="">
            <a href="javascript:;" class="has-arrow" aria-expanded="false">
                <div class="parent-icon"><i class="bx bx-cog"></i>
                </div>
                <div class="menu-title">ADMINISTRATION</div>
            </a>
            <ul class="mm-collapse" style="height: 0px;">
                <li>
                    <a href="{{ route('zones.index') }}" class="{{ request()->routeIs('zones.index') ? 'active':'' }}">
                        <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                        </div>
                        <div class="menu-title">{{__('zone')}}</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('provinces.index') }}" class="{{ request()->routeIs('provinces.index') ? 'active':'' }}">
                        <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                        </div>
                        <div class="menu-title">{{__('provinces')}}</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('districts.index') }}" class="{{ request()->routeIs('districts.index') ? 'active':'' }}">
                        <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                        </div>
                        <div class="menu-title">{{__('districts')}}</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('occupations.index') }}" class="{{ request()->routeIs('occupations.index') ? 'active':'' }}">
                        <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                        </div>
                        <div class="menu-title">{{__('occupations')}}</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('violences.index') }}" class="{{ request()->routeIs('violences.index') ? 'active':'' }}">
                        <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                        </div>
                        <div class="menu-title">{{__('violences')}}</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('perpetrators.index') }}" class="{{ request()->routeIs('perpetrators.index') ? 'active':'' }}">
                        <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                        </div>
                        <div class="menu-title">{{__('perpetrators')}}</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('medias.index') }}" class="{{ request()->routeIs('medias.index') ? 'active':'' }}">
                        <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                        </div>
                        <div class="menu-title">{{__('medias')}}</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('complaints.index') }}" class="{{ request()->routeIs('complaints.index') ? 'active':'' }}">
                        <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                        </div>
                        <div class="menu-title">{{__('complaints')}}</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('getCaseList') }}" class="{{ request()->routeIs('getCaseList') ? 'active':'' }}">
                <div class="parent-icon"><i class='bx bx-list-plus'></i>
                </div>
                <div class="menu-title">{{__('cases')}}</div>
            </a>
        </li>
        {{--<li>--}}
        {{--<a href="{{ route('getAjscCaseReports') }}" class="{{ request()->routeIs('getAjscCaseReports') ? 'active':'' }}">--}}
        {{--<div class="parent-icon"><i class='bx bx-home-circle'></i>--}}
        {{--</div>--}}
        {{--<div class="menu-title">{{__('caseReports')}}</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        <li>
            <a href="{{ route('getCaseSummary') }}" class="{{ request()->routeIs('getCaseSummary') ? 'active':'' }}">
                <div class="parent-icon"><i class='bx bx-detail'></i>
                </div>
                <div class="menu-title">{{__('caseSummary')}}</div>
            </a>
        </li>
        {{--@if(auth()->user()->is_admin == 1)--}}
        <li>
            <a href="{{ route('userList') }}" class="{{ request()->routeIs('userList') ? 'active':'' }}">
                <div class="parent-icon"><i class='fadeIn animated bx bx-user'></i>
                </div>
                <div class="menu-title">{{__('users') }}</div>
            </a>
        </li>
        {{--@endif--}}
    </ul>
    <!--end navigation-->
</div>
@endauth
