<!DOCTYPE html>
<html lang="ar">


<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fatory - Factory, Industrial & Construction Template">

    <!-- ========== Page Title ========== -->
    <title>انا مهندس | اول منصه للمهندس العربي</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('home/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('home/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('home/assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{asset('home/assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('home/assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('home/assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('home/assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('home/assets/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('home/assets/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{asset('home/assets/style.css')}}" rel="stylesheet">
    <link href="{{asset('home/assets/css/responsive.css')}}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700;800&amp;display=swap" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home" >

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav diraction">



            <div class="container-medium">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        @guest
                        <li class="btn"><a href="{{route('auth.login')}}">تسجيل الدخول</a></li>
                        @endguest
                        @auth
                        <li class="dropdown">
                            <a href="" > {{Auth::user()->name}} </a>
                        </li>
                       
                        <li class="btn"><a href="{{route('auth.logout')}}">تسجيل الخروج</a></li>
                        @endauth
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('home/assets/img/ana.svg')}}" class="logo logo-display" alt="Logo">
                        <img src="{{asset('home/assets/img/darkana.svg')}}" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="">
                            <a href="{{route('home')}}" class=" active" data-toggle="" >الرئيسيه</a>

                        </li>
                        <li class="">
                            <a href="{{route('all.artical')}}" class=" smooth-menu" data-toggle="" >المقالات</a>
                        </li>
                        <li class="">
                            <a href="#" class=" smooth-menu" data-toggle="" >هندسات</a>
                        </li>
                        <li class="">
                            <a href="{{route('allcourses')}}" class="" data-toggle="" >الدورات</a>

                        </li>
                        <li class="">
                            <a href="{{route('all.magazines')}}" >المجله </a>

                        </li>

                        <li>
                            <a href="contact.html">تواصل معنا</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area default top-pad-60">
        <div id="bootcarousel" class="carousel slide text-light carousel-fade animate_text" data-ride="carousel">

            <!-- Indicators for slides -->
            <div class="carousel-indicator">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ol class="carousel-indicators">
                                <li data-target="#bootcarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#bootcarousel" data-slide-to="1"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-cover" style="background-image: url({{asset('home/assets/img/about/5.jpg')}});"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="content">
                                            <h4 data-animation="animated slideInDown">منصه انا مهندس</h4>
                                            <h2 data-animation="animated slideInDown">المنصه الاولي عربيا للمحتوي الهندسي</h2>
                                            @guest
                                            <a data-animation="animated slideInUp" class="btn btn-light effect btn-md angle" href="{{route('auth.login')}}">انضم الينا</a>
                                            @endguest
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url({{asset('home/assets/img/about/7.jpg')}});"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="content">
                                            <h4 data-animation="animated slideInDown"> انا مهندس</h4>
                                            <h2 data-animation="animated slideInDown"> نقدم لك محتوي في جميع مجالات الهندسه</h2>
                                            @guest
                                            <a data-animation="animated slideInUp" class="btn btn-light effect btn-md angle" href="{{route('auth.login')}}">انضم الينا</a>
                                            @endguest
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our About
    ============================================= -->
    <div class="about-area default-padding diraction">
        <div class="container">
            <div class="about-box">
                <div class="row">
                    <div class="col-lg-5 left-info">
                        <h2>منصه انا مهندس<strong><br> تقدم محتوي في جميع مجالات الهندسه <br></strong> ونساعد المبتدئين في بدايه مجال الهندسه</h2>
                    </div>
                    <div class="col-lg-7 info right-info">
                        <blockquote>
                            <p>
                                منصة توفر محتوى هندسي يقدم معلومات وموارد فنية للمهندسين والمؤهلين المتعلقين. المنصة تغطي حول مجالات الهندسة، بما في ذلك الكهربائية والميكانيكية والمدنية والهندسة البرمجية. تقدم مقالات ودروس وفيديوهات ومواد تعليمية أخرى للمساعدة في الحفاظ على تحديث المؤهلين في مجالاتهم وتحسين مهاراتهم                            </p>

                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->
    <div class="services-area carousel-shadow with-thumb bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>هل تريد التعلم</h4>
                        <h2> بعض دوراتنا</h2>
                        <p>
نحن نقدم بعض الدورات ف يالعديد من مجالات الهندسه                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 diraction">
                    <div class="services-items services-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                    @foreach ($cource as $Cource)
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset('./storage/courses/'.$Cource->photo)}}" alt="{{$Cource->name}}">
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">{{$Cource->name}}</a>
                                </h4>
                                <div class="button">
                                    
                                    <a href="{{route('show.course',$Cource->id)}}">اقرا المزيد</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <!-- End Single Item -->
                        <!-- Single Item -->
                       
                        <!-- End Single Item -->
                        <!-- Single Item -->

  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Chose Us
    ============================================= -->
    <div class="why-choseus-area default-padding-bottom diraction">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5 info-box">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-lg-12 col-md-6 single-item">
                            <div class="item">
                                <i class="flaticon-tripod"></i>
                                <h4>الكورسات</h4>
                                <p>
                                    توفر موارد تعليمية وتدريب للمهندسين والمؤهلين المتعلقين. تغطي هذه الخدمات واسع حول مجالات الهندسة، بما في ذلك الكهربائية والميكانيكية والمدنية والهندسة البرمجية. تشمل الدورات الإلكترونية والويبينارات والورشات العمل وغيرها من أنواع التدريب للمساعدة في تحسين مهارات المؤهلين والحفاظ على تحديثهم في مجالاتهم                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-12 col-md-6 single-item">
                            <div class="item">
                                <i class="flaticon-helmet"></i>
                                <h4>المقالات والمجلات</h4>
                                <p>
                                    وفر للمهندسين والمؤهلين المتعلقين بعدة موارد معلوماتية وتعليمية على شكل مقالات ومجلات. تغطي هذه الخدمات واسع حول مجالات الهندسة والمواضيع، بما في ذلك أحدث التطورات وأخبار الصناعة ونصائح الخبراء. الهدف هو الحفاظ على تحديث المؤهلين وتعليمهم على آخر التطورات في مجالاتهم                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 thumb padding ">
                    <div class="thumb-box">
                        <img src="{{asset('home/assets/img/images/dronee.png')}}" alt="Thumb" class="flying-element" >
                        <img src="{{asset('home/assets/img/images/ENG1homepage1.png')}}" alt="Thumb" >

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Chose Us -->
    
    <!-- Start Services
    ============================================= -->
    <div class="services-area default-padding bg-gray diraction">
        <div class="container">
            <div class="services-box">
                <div class="row">
                    <div class="col-lg-3 tab-navs">
                        <ul id="tabs" class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#" data-target="#tab1" data-toggle="tab" class="active nav-link"><i class="fas fa-angle-right"></i>كيف يمكننا مساعدتك؟ </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" data-target="#tab2" data-toggle="tab" class="nav-link"><i class="fas fa-angle-right"></i> كيف تتواصل معنا ؟</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" data-target="#tab3" data-toggle="tab" class="nav-link"> <i class="fas fa-angle-right"></i> لماذا نحن ؟</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-9 tab-content">
                        <div id="tabsContent" class="tab-content">
                            <div id="tab1" class="tab-pane fade active show">
                                <div class="row">
                                    <div class="col-lg-7 col-md-12 info">
                                        <h3>كيف يمكننا مساعدتك</h3>
                                        <p>
                                            نحن هنا لمساعدتك في أي وقت تحتاج إليه. سواء عن طريق الإجابة على أسئلتك أو توفير المعلومات التي تحتاج إليها، نحن نعمل على تزويدك بالدعم الذي تحتاج إليه. لا تتردد بالاتصال بنا عبر البريد الإلكتروني أو الهاتف لأي استفسار أو طلب.
                                        </p>

                                    </div>
                                    <div class="col-lg-5 col-md-12 thumb">
                                        <img src="{{asset('home/assets/img/help.jpg')}}" alt="Thumb">
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-7 col-md-12 info">
                                        <h3>كيف تتواصل معنا </h3>
                                        <p>
                                            كيف تتصل بنا: لدينا عدة طرق للاتصال بنا وإجابة على أسئلتك. يمكنك الاتصال بنا عبر البريد الإلكتروني على العنوان info@anaengineer.com أو التحدث مع موظفينا عبر الهاتف على الرقم + 971544022482. نحن نتأكد من تزويدك بالإجابة المناسبة وعلى السرعة.                                        </p>
                                      
                                    </div>
                                    <div class="col-lg-5 col-md-12 thumb">
                                        <img src="{{asset('home/assets/img/services/22.jpg')}}" alt="Thumb">
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-7 col-md-12 info">
                                        <h3>لماذا نحن</h3>
                                        <p>
                                            منصة توفر محتوى هندسي يقدم معلومات وموارد فنية للمهندسين والمؤهلين المتعلقين. المنصة تغطي حول مجالات الهندسة، بما في ذلك الكهربائية والميكانيكية والمدنية والهندسة البرمجية. تقدم مقالات ودروس وفيديوهات ومواد تعليمية أخرى للمساعدة في الحفاظ على تحديث المؤهلين في مجالاتهم وتحسين مهاراتهم                            </p>
                                        </p>
                                        <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i>اقرا المزيد</a>
                                    </div>
                                    <div class="col-lg-5 col-md-12 thumb">
                                        <img src="{{asset('home/assets/img/services/Group 104.svg')}}" alt="Thumb">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->
<br>
<br>

    <!-- Start Blog Area 
    ============================================= -->
    <div class="blog-area default-padding-bottom bg-gray-responsive ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>المقالات</h4>
                        <h2>اخر الاخبار في مجال الهندسه</h2>
               
                    </div>
                </div>
            </div>
            <div class="blog-items diraction">
                <div class="row">
                    <!-- Single Item -->
                @foreach ($articals  as $Artical)
                    <div class="col-lg-4 single-item">
                        <div class="item">
                     
                            <div class="thumb">
                                <a href="blog-single-with-sidebar.html"><img src="{{asset('home/assets/img/blog/1.jpg')}}" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="meta">

                                </div>
                                <div class="content diraction">
                                    <h4>
                                        <a href="blog-single-with-sidebar.html">{{$Artical -> title}}</a>
                                    </h4>
                                    <a class="btn circle btn-theme angle effect btn-sm" href="{{route('show.artical',$Artical->id)}}">اقرا المزيد</a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light ">
        <!-- Footer Top -->
        <div class="footer-top text-center bg-dark text-light">
            <div class="container">
                <div class="row align-center">
                    <div class="logo col-lg-3 text-left">
                        <a href="#"><img src="{{asset('home/assets/img/ana.svg')}}" alt="Logo"></a>
                    </div>
                    <div class="subscribe-form col-lg-6">
                        <form action="#">
                            <input type="email" name="email" class="form-control" placeholder="اكتب هنا الايميل الخاص بك">
                            <button type="submit"><i class="fa fa-paper-plane"></i></button>  
                        </form>
                    </div>
                    <div class="col-lg-3 phone text-right">
                        <h4><i class="fas fa-phone"></i> + 971544022482</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->

        <div class="container">
            <div class="f-items default-padding">
                <div class="row">

                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="f-item contact">
                            <h4 class="widget-title">التواصل معنا</h4>

                            <ul>
          
                                    <a href="mailto:info@anaengineer.com"><i class="fas fa-envelope-open"></i>
                                    info@anaengineer.com
                                </li></a>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-2 col-md-6 single-item">
                        <div class="f-item link">
                            <h4 class="widget-title">تصفح</h4>
                            <ul>
                                <li>
                                    <a href="#">سياسه الخصوصيه</a>
                                </li>
                                <li>
                                    <a href="#">الشروط والاحكام</a>
                                </li>
                                <li>
                                    <a href="#">الاسئله الشائعه</a>
                                </li>
                                <li>
                                    <a href="#">تطوع معنا</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-2 col-md-6 single-item">
                        <div class="f-item link">
                            <h4 class="widget-title">الشهادات</h4>
                            <ul>
                                <li>
                                    <a href="#">تحقق من صحه الشهاده</a>
                                </li>
                                <li>
                                    <a href="#">الوظائف</a>
                                </li>
                                <li>
                                    <a href="#">التواصل معنا</a>
                                </li>
 
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="f-item opening-hours">
                            <h4 class="widget-title"> أول منصة للمهندس العربي </h4>
                            <ul>
                                <li> 
                                    شركة ناشئة خاصة تعمل من مدينة دبي وميونخ، تختص بإلهام ومساعدة المهندسين على الإلتحاق بسوق العمل وتقدم دورات تدريبية عالية المستوى. ومنذ عام 2014 أنجزت العديد من المشاريع النوعية التي ساهمت بتغيير الواقع العربي الهندسي. وتساهم يومياً في إثراء المحتوى العربي الرقمي في مجالات الهندسة كافة
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- Fixed Shape -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; جميع حقوق الطبع والنشر الي منصه<a href="#"> انا مهندس</a></p>
                    </div>
           
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->

        <div class="fixed-shape">
            <img src="{{asset('home/assets/img/shape/3.svg')}}" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{asset('home/assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('home/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('home/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('home/assets/js/equal-height.min.js')}}"></script>
    <script src="{{asset('home/assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('home/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('home/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('home/assets/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{asset('home/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('home/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('home/assets/js/progress-bar.min.js')}}"></script>
    <script src="{{asset('home/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('home/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('home/assets/js/count-to.js')}}"></script>
    <script src="{{asset('home/assets/js/bootsnav.j')}}s"></script>
    <script src="{{asset('home/assets/js/main.js')}}"></script>
    <script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "1851caacfca9a6d16ba3849ee32f1b3dbc70cbf70595c92a1deb70116e3f8ef81a2010ab7b6727677d37b27582c0e9c4", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>

</body>

</html>