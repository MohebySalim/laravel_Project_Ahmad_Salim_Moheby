<!DOCTYPE html>
<html>
<head>
    <title>DataMapping</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <meta name="description" content="afghan journalists safety committee | AJSC | datamapping | journalists | safety | afghan | afghan journalists | afghan safety | Zone | Capital | Center | East | Kabul | Kabul Zone | Norheast | North | North East | Northeast | Northeast | South East | Southeast | West | Administrative Employee | Agent | Analyst | Anchor | Anchor and Journalist | Announcer | Braodcast Manager | Braodcast Responsible | Broadcaster | Broadcasting  Manager | Camera Man | Camera Man Prodaction | Cleaner | Coordinator | Deputy of Prodaction | Designer | Director | Director General | Director Of Cammunication | Director of Education | Director of News | Director of Products | Director Of Radio | Driver | Dubber | Dubbing Staff | Editor | Educational | Employee | Ex Journlist | Executive Director | Expert | Film Maker | Founder | Free Journalist | Gaurds | Graphic Desiginer | Handler and reporter | Head | Head of IT | Head of Media and Communication | Head of News | Head of the Radio | IT | IT Staff | Journalist and camra man | Journalist and Photographer | Journalist/Director | Manager | Manager of News | Media Advisor | News Director | News Editor | Old Braodcast Responsible | Owner | Photo Journalist | Photographer | Political Program Operator | Presenter | Producer | Proudct Employee | Publications Manager | Radio Announcer | Radio Director | Radio Director | Regional Journalist | Religious Expert | Reporter | Reporter and Photo Journalis | Representative | Secretory of ED | Social program host | Southern Representative | Technical Director | Technical emlpoyee | Technical Person | Translator | Video Editor | Video Journalist | Women Journalist Coordinator | Writer | Killed | Injured | Threaten | Misbehavior | Beaten | Fired | Arrested | Kidnapped |Bullies| Government | Media Officials | Taliban | ISIS | Local | unkonws peapleo | protestors | natural disaster | TypeofViolence | Perpetrators | Province | Occupation | Year |" />





    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('datamap/w3.css') }}">
    <link rel="stylesheet" href="{{ asset('datamap/mstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('datamap/table.css') }}">
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="{{ asset('datamap/jquery.localize.js') }}"></script>
</head>


<body style="font-family: 'Rajdhani', sans-serif;">
<div class="top-banner">
    <ul class="navigation">
        {{--        <li class="nvg flg"><a href="index_d.php"><img src="{{ asset('datamap/images/dari.png') }}" width="24px" height="16px"><br><span data-localize="menu.dari">Dari</span></a></li>--}}
        {{--        <li class="nvg flg"><a href="index_p.php"><img src="{{ asset('datamap/images/dari.png') }}" width="24px" height="16px"><br><span data-localize="menu.pashto">Pashto</span></a></li>--}}
        {{--        <li class="nvg flg"><a href="index.php" data-locale="en"><img src="{{ asset('datamap/images/english.png') }}" width="24px" height="16px"><br><span data-localize="menu.eng">English</span></a></li>--}}
        <li class="nvg flg"><a href="{{ route('change.locale', ['locale' => 'dr']) }}"><img src="{{ asset('datamap/images/dari.png') }}" width="24px" height="16px"><br><span data-localize="menu.dari">Dari</span></a></li>
        <li class="nvg flg"><a href="{{ route('change.locale', ['locale' => 'ps']) }}"><img src="{{ asset('datamap/images/dari.png') }}" width="24px" height="16px"><br><span data-localize="menu.pashto">Pashto</span></a></li>
        <li class="nvg flg"><a href="{{ route('change.locale', ['locale' => 'en']) }}"><img src="{{ asset('datamap/images/english.png') }}" width="24px" height="16px"><br><span data-localize="menu.eng">English</span></a></li>

        <li class="nvg"><a href="method.html"><i class="icon-edit"></i> <span data-localize="menu.methodology"> METHODOLOGY</span></a></li>
        <!---->
        <li class="nvg"><a href="{{ route('ajsc') }}"><i class="icon-home"></i> <span data-localize="menu.home">HOME</span></a></li>

        <li class="nvg lft"><a href="http://ajsc.af/"><img src="{{ asset('datamap/images/logo2.jpg') }}" width="120;"></a></li>
    </ul>
</div>

@if((app()->getLocale() === 'en'))
    <div class="methodology">
        <div class="met-con">
            <h1 class="eng-header">Methology</h1>
            <p class="eng-dari">
            <p>
                AJSC has been producing reports on the state of journalist safety and press freedom since 2013. These reports released on bi-yearly basis covers the changes in the state of press freedom and highlight the types of threats and violence journalists face across Afghanistan. AJSC throughout the year records any case of violence and threat that occurs against journalists and media workers in all 34 provinces. </p>

            <p>
                AJSC exercises rigorous guidelines in terms of identification and collection of cases of violence against journalists from Afghanistan’s 34 provinces. AJSC maintains a representative or focal point throughout the country that document the cases based on the policies and procedures provided to them by the organization’s headquarter in Kabul. AJSC’s representatives and focal points reports each case within hours of its occurrence to Kabul office and carries out further investigations in the locality of the incident.</p>

            <p>
                Based on the policies we use to collect data there is a clear definition for journalists and media workers as well as cases of violence against journalists. We use clear guidelines as to what constitutes a case of threat or violence against journalists. AJSC has defined these terms in accordance with international standard terms and have modified them as per the local context of the country. </p>

            <p>
                This means AJSC does not document those cases of threat and violence that are not related to the professional work of journalists. The collected cases go through a second layer of verification by the Kabul office and then inserted into the organization’s database. The reports are produced in three languages of English, Dari, and Pashto and distributed to media community and other stakeholders during a press conference.</p>

            <p>
                AJSC has launched this data-mapping platform to analyze the trend of violence against journalists and media workers in Afghanistan. AJSC has kept this platform an open source and available for all. We also welcome researchers and analysts to use the content of this data mapping and visualization to better understand the challenges Afghan journalists and media workers have faced. AJSC on bi-annual basis will update this platform to provide the latest information.</p>




            </p>
        </div>
    </div>
@elseif((app()->getLocale() === 'dr'))
    <div class="methodology">
        <div class="met-con">
            <h1 class="dari-header" style=""data-localize="menu.methodology-d">روش شناسی (میتودولوژی)</h1>
            <p class="para-dari">

            <p style="position: relative;text-align: right; direction: rtl;">کمیته مصوونیت خبرنگاران افغان از سال ۲۰۱۳ گزارش های را در مورد وضعیت مصوونی خبرنگاران و آزادی رسانه ها ارایه می نماید. این گزارش ها که به گونه شش ماه منتشر می شود ، تغییرات در وضعیت آزادی رسانه ها را پوشش می دهد و انواع تهدیدها و خشونت های را که خبرنگاران در سراسر افغانستان با آن روبرو هستند مورد بحث قرار میدهند. کمیته در طول سال مواردی خشونت ها و تهدیدات را که علیه خبر نگاران و کارمندان رسانه ها در ۳۴ ولایت کشور رخ می دهند، ثبت می کند.</p>


            <p style="position: relative;text-align: right;direction: rtl;">کمیته دستورالعمل های دقیقی را در زمینه شناسایی و جمع آوری معلومات در مورد خشونت ها و تهدیدها  علیه خبرنگاران بکار میبرد. ما  در تمام ولایت های کشور نماینده و یا همکار ولایتی داریم که قضایا را براساس پالیسی ها و دستورالعمل های ارایه شده از سوی دفتر مرکزی،مستند سازی می نمایند. نمایندگان کمیته هر پرونده را طی چند ساعت پس از وقوع آن به دفتر کابل گزارش می دهند و قضیه را از نزدیک تعقیب نموده، تحقیقات بیشتر را در محل حادثه انجام می دهند.</p>



            <p style="position: relative;text-align: right;direction: rtl;">براساس پالیسی که ما برای گرداوری معلومات به کار می بریم ، تعریف واضح برای خبرنگار و کارمند رسانه یی و همچنان موارد خشونت ها علیه خبرنگاران وجود دارد. ما از دستورالعمل های واضح براینکه چی اعمالی تهدید یا خشونت علیه خبرنگاران است، استفاده می کنیم.</p>


            <p style="position: relative;text-align: right;direction: rtl;">کمیته اصطلاحات خشونت و تهدید در برابر خبرنگاران و رسانه ها را  در مطابقت با اصطلاحات استاندارد بین المللی تعریف نمده و آنها را با شرایط کشور  تنظیم نموده است.</p>


            <p style="position: relative;text-align: right;direction: rtl;">این بدان معنی است که کمیته موارد تهدید و خشونت را که مربوط به کار حرفه یی خبرنگاران نیست ثبت نمی کند. قضایای جمع آوری شده در مرحله دوم توسط دفتر کابل بررسی و تایید شده و سپس در بانک اطلاعات –دیتابیس- کمیته قرار می گیرند. گزارش ها به سه زبان  دری ، پشتو و انگلیسی تهیه شده و طی یک کنفرانس مطبوعاتی با جامعه رسانه یی کشور و مردم شریک ساخته میشود.</p>


            <p style="position: relative;text-align: right;direction: rtl;">کمیته زمینه بدست آوردن معلومات برای تحلیل چگونگی خشونت ها و تهدیدات علیه خبرنگاران و کارمندان رسانه یی در افغانستان را ایجاد نموده است. کمیته این معلومات  را به گونه آزاد در دسترس همگان قرار میدهد .
                محققان و تحلیلگران می توانند از محتوای این گزارش ها برای معلومات و درک بهتر در باره مشکلات خبرنگاران و کارمندان رسانه یی افغانستان استفاده نمایند. کمیته در جریان هر شش ماه اطلاعات تازه در این مورد را در دسترس قرار میدهد .
            </p>




            </p>
        </div>
    </div>
@elseif((app()->getLocale() === 'ps'))
    <div class="methodology">
        <div class="met-con">
            <h1 class="dari-header" style=""data-localize="menu.methodology-p">میتوډولوژي</h1>
            <p class="para-dari">


            <p style="position: relative;text-align: right; direction: rtl;">د افغان خبریالانو د خوندیتوب کمیټه له ۲۰۱۳کال راهیسې د خبریالانو د خوندیتوب او د رسنیو د ازادۍ په اړه رپوټونه چمتو کوي. دغه رپوټونه په هرو شپږو میاشتو کې یوځل خپریږي. د مطبوعاتو د ازادۍ وضعیت ترپوښښ لاندې راولي او هم هغه ګواښونه او تاوتریخوالي په ګوته کوي چې خبریالان ورسره په درست هیواد کې مخ دي. کمیټه د کال په اوږدو کې د تاوریخوالو او ګواښونو هغه موارد ثبتوي چې خبریالان او د رسنیو کارکوونکي ورسره د هیواد په ۳۴ولایتونو کې مخ کیږي.</p>


            <p style="position: relative;text-align: right;direction: rtl;">کمیټه د خبریالانو پروړاندې د تاوتریخوالو او ګواښونو د ثبت لپاره یوه دقیقه کړنلاره لري. موږ د هیواد په هرولایت کې استازی او یاهم ولایتي همکار لرو چې د کمیټې له پالیسۍ او کړنلارې سره سم قضیې څیړي او له مرکزي دفتر سره یې شریکوي.  د کمیټې استازي د هرې قضيې په اړه معلومات د پیښې په لومړنیو ساعتونو کې له مرکزي دفتر سره شریکوي او بیا یې په اړه لا زیاتې څیړنې کوي او تعقیبوي یې. </p>



            <p style="position: relative;text-align: right;direction: rtl;">د هغې پالیسۍ له مخې چې موږ یې د معلوماتو د راټولونې لپاره کاروو، د خبریال او رسنیز کارکوونکي لپاره او هم د تاوریخوالو د مواردو لپاره مشخص تعریفونه شته، موږ په دې اړه چې کومې کړنې د خبریالانو پروړاندې تاوتریخوالی او یا هم ګواښ بلل کیږي له ځانګړو او واضح کړنلارو نه کار اخلو.</p>


            <p style="position: relative;text-align: right;direction: rtl;">کمیټې دغه اصطلاحات له نړیوالو ستندردونو سره په مطابقت کې تعریف کړي او هغه یې د هیواد له حالاتو سره سم تنظیم کړي دي. </p>


            <p style="position: relative;text-align: right;direction: rtl;">دا په دې معنا ده چې کمیټه د تاوریخوالو او ګواښونو هغه پیښې نه ثبتوي کومې چې د خبریالۍ له کار سره تړاو ونه لري. راټولې شوې قضیې په دویم پړاو کې بیا د کابل د دفتر لخوا له ارزولو او تایید وروسته د معلوماتو ډیټابیس کې شاملیږي. شپږمیاشتني رپوټونه په درې ژبو، پښتو، دري او انګلیسي چمتو کیږي او د یوه خبري کنفرانس له لارې رسنیو او هیواولو سره شریکږي.</p>


            <p style="position: relative;text-align: right;direction: rtl;">کمیټې په دې توګه د خبریالانو او رسنیزو کارکوونکو پروړاندې د شویو تاوریخوالو او ګواښونو په اړه د معلوماتو یو پلیټ فارم جوړ کړی دی. کمیټه دغه معلمومات په پرانستې توګه د ټولو په واک کې ورکوي ترڅو شنونکي او څیړونکي ورنه په افغانستان کې د خبریالانو او رسنیزو کارکونکو پروړاندې د شته ننګونو د ارزونې لپاره کارواخلي. کمیټه په دې اړه تازه معلومات په هرو شپږو میاشتو کې شریکوي. </p>



            </p>
        </div>
    </div>
@endif




<div class="ftr">
    <h2>
        <ul class="ftr-nav">
            <li class="ftr-social"><a href="#"><i class="icon-facebook"></i></a></li>
            <li class="ftr-social"><a href="#"><i class="icon-twitter"></i></a></li>
            <li class="ftr-social"><a href="#"><i class="icon-youtube"></i></a></li>
        </ul>
        <ul class="ftr-logo">
            <li><img src="{{ asset('datamap/images/logo2.jpg') }}" width="120"></li>
        </ul>
        <p> Copyright &copy; 2020 AJSC. All Rights Reserved</p>
    </h2>
</div>
<script  src="{{ asset('datamap/js/script3.js') }}"></script>

<script src="{{ asset('datamap/js/tablepaginition.js') }}"></script>
<script src="{{ asset('datamap/js/tablepaginition2english.js') }}"></script>

</body>

</html>
