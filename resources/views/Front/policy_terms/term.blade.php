<!DOCTYPE html>
<html class="no-js" dir="rtl" lang="zxx">


<!-- Mirrored from edublink.html.rtl.devsblink.com/privacy-policy.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2022 02:19:20 GMT -->
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>سياسه الخصوصيه</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('lms/assets/images/favicon.png')}}">
    <!-- CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/magnifypopup.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/animation.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/jqueru-ui-min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/tipped.min.css')}}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('lms/assets/css/app.css')}}">

</head>

<body class="sticky-header">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<div id="edublink-preloader">
    <div class="loading-spinner">
        <div class="preloader-spin-1"></div>
        <div class="preloader-spin-2"></div>
    </div>
    <div class="preloader-close-btn-wraper">
            <span class="btn btn-primary preloader-close-btn">
                Cancel Preloader</span>
    </div>
</div>

<div id="main-wrapper" class="main-wrapper">

    <!--=====================================-->
    <!--=        Header Area Start          =-->
    <!--=====================================-->
    <header class="edu-header header-style-1 header-fullwidth no-topbar">
                <div id="edu-sticky-placeholder"></div>
                <div class="header-mainmenu">
                    <div class="container-fluid">
                        <div class="header-navbar">
                            <div class="header-brand">
                                <div class="logo">
                                    <a href="index.html">
                                        <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                                        <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                                    </a>
                                </div>
                                <div class="header-category">
                                    <nav class="mainmenu-nav">
                                        <ul class="mainmenu">
                                            <li class="has-droupdown">
                                                <a href="#">الاقسام<i class="icon-1"></i></a>
                                                <ul class="submenu">
                                                @foreach($categories as $Category)
                                                    <li><a href="">{{ $Category->name}}</a></li>
                                                @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-mainnav">
                                <nav class="mainmenu-nav">
                                    <ul class="mainmenu">
                                        <li class=""><a href="{{route('home')}}">الرئيسيه</a></li>
                                        <li class=""><a href="{{route('allcourses')}}">الدورات</a></li>
                                        <li class=""><a href="{{route('all.artical')}}">المقالات</a></li>
                                        <li class=""><a href="{{route('plans_page')}}">خطط الاسعار</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right">
                                <ul class="header-action">
                                    <li class="header-btn">
                                @guest
                                        <a href="contact-us.html" class="edu-btn btn-medium"> تسجيل الدخول <i class="icon-west"></i></a>
                                @endguest
                                @auth
                                <nav class="mainmenu-nav">
                                    <ul class="mainmenu">
                                        <li class="has-droupdown">
                                          <a href="courses.html">{{Auth::user()->name}}</a>
                                            <ul class="submenu">
                                                <li ><a href="{{route('auth.logout')}}">تسجيل الخروج</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                @endauth

                                    <li class="mobile-menu-bar d-block d-xl-none">
                                        <button class="hamberger-button">
                                            <i class="icon-54"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup-mobile-menu">
                    <div class="inner">
                        <div class="header-top">
                            <div class="logo">
                                <a href="index.html">
                                    <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                                    <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                                </a>
                            </div>
                            <div class="close-menu">
                                <button class="close-button">
                                    <i class="icon-73"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Start Search Popup  -->
                <div class="edu-search-popup">
                    <div class="content-wrap">
                        <div class="site-logo">
                            <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                            <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                        </div>
                        <div class="close-button">
                            <button class="close-trigger"><i class="icon-73"></i></button>
                        </div>
                        <div class="inner">
                            <form class="search-form" action="#">
                                <button class="submit-button"><i class="icon-2"></i></button>
                                <input type="text" class="edublink-search-popup-field" placeholder="ابحث هنا...">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Search Popup  -->
            </header>
    <!--=====================================-->
    <!--=       Breadcrumb Area Start      =-->
    <!--=====================================-->


    <div class="edu-breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">سياسة الخصوصية</h1>
                </div>
                <ul class="edu-breadcrumb">

                    <li class="breadcrumb-item active" aria-current="page">سياسة الخصوصية</li>
                </ul>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1">
                <span></span>
            </li>
            <li class="shape-2 scene"><img data-depth="2" src="assets/images/about/shape-13.png" alt="shape"></li>
            <li class="shape-3 scene"><img data-depth="-2" src="assets/images/about/shape-15.png" alt="shape"></li>
            <li class="shape-4">
                <span></span>
            </li>
            <li class="shape-5 scene"><img data-depth="2" src="assets/images/about/shape-07.png" alt="shape"></li>
        </ul>
    </div>

    <!--=====================================-->
    <!--=           Cart Area Start         =-->
    <!--=====================================-->
    <section class="privacy-policy-area">
        <div class="container">
            <div class="row row--30">
                <div class="col-lg-8">
                    <div class="privacy-policy">
                        <div class="text-block">
                            <h3 class="title">تعريفات سياسة الخصوصية</h3>
                            <p>إن سياسة الخصوصية والأحكام والبنود الورادة في هذه الوثيقة تنطبق على جميع خدمات منصة أنا مهندس وتعاملاتها على شبكة الإنترنت.

                                بما في ذلك على سبيل المثال، محتويات وصفحات المنصة وأية مراسلات إلكترونية مع شركة أنا مهندس.

                                وباستخدامك لخدمات منصة أنا مهندس فأنت توافق على جميع البنود المذكورة في هذه الوثيقة.

                            </p>
                        </div>
                        <div class="text-block">
                            <h4 class="title">معلومات عامة</h4>
                            <p>


                                نقوم بمعرفة متابعينا من أي دولة لذلك نستخدم أدوات لتحليل هذه البيانات وأكثر الصفحات والمواضيع والخدمات التي يتم الإطلاع عليها.

                                لنقدم أفضل الخدمات والتحليلات التي ترتقي بمحتوى وخدمات منصتنا.



                                منصة أنا مهندس تحتوي على تسجيل دخول وإشتراك يطلب معلومات مستخدميه، مثل:

                                البريد الإلكتروني / الإيميل الشخصي.
                                رقم الهاتف الشخصي.
                                الإسم الكامل.
                                التخصص الهندسي.
                                الجنسية / بلد الإقامة.


                                جميع هذه المعلومات يتم جمعها من المتدربين في منصة أنا مهندس والمستخدمين الراغبين بالتسجيل في المنصة

                                كمستخدم للوصول إلى مزايا واسعة من خلال الإشتراك.



                                تطلب المعلومات فقط عند الإشتراك وذلك لإنشاء حساب عبر المنصة وهي ليست إلزامية للأفراد الراغبين بالحصول على الخدمات المجانية المحددة.



                                قد نقوم مستقبلاً باستخدام بعض وسائل المراسلات للإعلان عن التحديثات والخدمات المقدمة عن طريق وسائل التواصل الرسمية الخاصة بنا.



                                جميع البيانات التي يتم جمعها من المستخدمين في منصة أنا مهندس يتم استخدامها للأغراض العلمية والهندسية والتعليمية فقط

                                وهي خاصة بالمنصة ولا يتم مشاركتها مع أي جهة خارجية.

                                ة،</p>
                            <p>إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة التي لا تشوبها عواقب أليمة أو آخر أراد أن يتجنب الألم الذي ربما تنجم عنه بعض المتعة </p>
                        </div>
                        <div class="text-block">
                            <h4 class="title">توافر الموقع</h4>
                            <p>سأعرض مثال حي لهذا، من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أرا</p>
                            <ul>
                                <li>عناوين بروتوكول الإنترنت (IP)</li>
                                <li>نوع المتصفح ، مزود خدمة الإنترنت (ISP)</li>
                                <li>طابع التاريخ والوقت ، صفحات الإحالة / الخروج</li>
                                <li>ربما عدد النقرات</li>
                            </ul>
                        </div>
                        <div class="text-block">
                            <h4 class="title">Pسياسات الخصوصية</h4>
                            <p>سأعرض مثال حي لهذا، من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة التي لا تشوبها عواقب أليمة أو آخر أراد أن</p>
                            <p>سأعرض مثال حي لهذا، من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشع</p>
                        </div>
                        <div class="text-block">
                            <h4 class="title">سياسات الطرف الثالث</h4>
                            <p>الجانب الآخر نشجب ونستنكر هؤلاء الرجال المفتونون بنشوة اللحظة الهائمون في رغباتهم فلا يدركون ما يعقبها من الألم والأسي المحتم، واللوم </p>
                            <ul>
                                <li>اسم الشركة وشعار الشركة وجميع الأسماء والشعارات وأسماء المنتجات والخدمات والتصاميم ذات الصلة</li>
                                <li>لا يتم نقل أي حق أو ملكية أو مصلحة في أو في الدورة التدريبية عبر الإنترنت أو أي جزء منها إلى أي عضو ، وجميع الحقوق غير الممنوحة صراحةً هنا ، محفوظة من قبل الشركة</li>
                                <li>الدورة التدريبية عبر الإنترنت مملوكة للشركة ومحمية بموجب حقوق النشر الأمريكية والدولية والعلامات التجارية وبراءات الاختراع والأسرار التجارية وغيرها من قوانين حقوق الملكية الفكرية أو حقوق الملكية</li>
                            </ul>
                        </div>
                        <div class="text-block">
                            <h4 class="title">الخصوصية عبر الإنترنت</h4>
                            <p>سأعرض الإنترنت مملوكة للشركة ومحمية بموجب حقوق النشر مثال حي لهذا، من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة التي</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="edu-blog-sidebar">
                        <!-- Start Single Widget  -->
                        <div class="edu-blog-widget widget-search">
                            <div class="inner">
                                <h4 class="widget-title">يبحث</h4>
                                <div class="content">
                                    <form class="blog-search" action="#">
                                        <button class="search-button"><i class="icon-2"></i></button>
                                        <input type="text" placeholder="يبحث">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
                        <div class="edu-blog-widget widget-tags">
                            <div class="inner">
                                <h4 class="widget-title">العلامات</h4>
                                <div class="content">
                                    <div class="tag-list">
                                        <a href="#">لغة</a>
                                        <a href="#">التعلم الإلكتروني</a>
                                        <a href="#">نصائح</a>
                                        <a href="#">مسار</a>
                                        <a href="#">تحفيز</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
                        <div class="edu-blog-widget widget-categories">
                            <div class="inner">
                                <h4 class="widget-title">فئات</h4>
                                <div class="content">
                                    <ul class="category-list">
                                        <li><a href="#">دراسات الأعمال <span>(٣)</span></a></li>
                                        <li><a href="#"> شهر نوفمبر <span>(٣)</span></a></li>
                                        <li><a href="#"> ديسمبر <span>(٧)</span></a></li>
                                        <li><a href="#"> يناير <span>(٢)</span></a></li>
                                        <li><a href="#"> شهر فبراير <span>(١)</span></a></li>
                                        <li><a href="#"> يمشي <span>(٣)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
                        <div class="edu-blog-widget widget-action">
                            <div class="inner">
                                <h4 class="title">احصل على دورات عبر الإنترنت من <span>EduBlink</span></h4>
                                <span class="shape-line"><i class="icon-19"></i></span>
                                <p>و سأعرض مثال حي لهذا، من منا لم يتحمل </p>
                                <a href="#" class="edu-btn btn-medium">ابدأ الآن <i class="icon-west"></i></a>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Footer Area Start          =-->
    <!--=====================================-->
    <!-- Start Footer Area  -->
            <footer class="edu-footer footer-lighten bg-image footer-style-1">
                <div class="footer-top">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-lg-3 col-md-6">
                                <div class="edu-footer-widget">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                                            <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                                        </a>
                                    </div>
                                    <p class="description">شركة ناشئة خاصة تعمل من مدينة دبي وميونخ، تختص بإلهام ومساعدة المهندسين على الإلتحاق بسوق العمل وتقدم دورات تدريبية عالية المستوى. ومنذ عام 2014 أنجزت العديد من المشاريع النوعية التي ساهمت بتغيير الواقع العربي الهندسي. وتساهم يومياً في إثراء المحتوى العربي الرقمي في مجالات الهندسة كافة.</p>
                                    <div class="widget-information">
                                        <ul class="information-list">
                                            <li><span>مكالمة: </span><a href="tel:00971544022482"> +971544022482 </a></li>
                                            <li><span>البريد: </span><a href="mailto:contact@anaengineer.com">contact@anaengineer.com</a></li>
                                            <li><span>للتعاون التجاري: </span><a href="mailto:marketing@anaengineer.com">marketing@anaengineer.com</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="edu-footer-widget explore-widget">
                                    <h4 class="widget-title">معلومات عنا</h4>
                                    <div class="inner">
                                        <ul class="footer-link link-hover">
                                            <li><a href="privacy-policy.html">سياسه الخصوصيه</a></li>
                                            <li><a href="TermsandConditions.html">الشروط والاحكام</a></li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6">
                                <div class="edu-footer-widget quick-link-widget">
                                    <h4 class="widget-title">خدمات</h4>
                                    <div class="inner">
                                        <ul class="footer-link link-hover">
                                            <li><a href="{{route('allcourses')}}">الدورات</a></li>
                                            <li><a href="">التواصل الاجتماعي </a></li>
                                            <li><a href="{{route('all.magazines')}}">المجله</a></li>
                                            <li><a href="{{route('all.artical')}}">المقالات</a></li>
                                            <li><a href="#">تواصل معنا </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="edu-footer-widget">
                                    <h4 class="widget-title">جهات الاتصال</h4>
                                    <div class="inner">
                                        <p class="description">أدخل عنوان بريدك الإلكتروني للتسجيل في الاشتراك في النشرة الإخبارية</p>
                                        <div class="input-group footer-subscription-form">
                                            <input type="email" class="form-control" placeholder="بريدك الالكتروني">
                                            <button class="edu-btn btn-medium" type="button"><i class="icon-west"></i> الإشتراك</button>
                                        </div>
                                        <ul class="social-share icon-transparent">
                                            <li><a href="https://www.facebook.com/ana.muhands" class="color-fb"><i class="icon-facebook"></i></a></li>
                                            <li><a href="https://www.linkedin.com/company/anaengineer/?originalSubdomain=ae" class="color-linkd"><i class="icon-linkedin2"></i></a></li>
                                            <li><a href="https://www.instagram.com/ana_muhands17/" class="color-ig"><i class="icon-instagram"></i></a></li>
                                            <li><a href="https://twitter.com/ana_muhands17" class="color-twitter"><i class="icon-twitter"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCkIC9ANdmaSh8BiSQ7GU8vg" class="color-yt"><i class="icon-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="inner text-center">
                                    <p>حقوق الطبع والنشر ٢٠٢٢ <a >anaengineer</a> صمم بواسطة <a> anaengineer </a>. كل الحقوق محفوظة</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
    <!-- End Footer Area  -->

</div>

<div class="rn-progress-parent">
    <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- JS
    ============================================ -->
<!-- Modernizer JS -->
<script src="{{asset('lms/')}}assets/js/vendor/modernizr.min.js"></script>
<!-- Jquery Js -->
<script src="{{asset('lms/assets/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/sal.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/backtotop.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/magnifypopup.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/odometer.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/isotop.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/imageloaded.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/lightbox.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/paralax.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/paralax-scroll.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/jquery-ui.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/swiper-bundle.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/svg-inject.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/vivus.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/tipped.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/smooth-scroll.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/isInViewport.jquery.min.js')}}"></script>

<!-- Site Scripts -->
<script src="{{asset('lms/assets/js/app.js')}}"></script>
</body>


<!-- Mirrored from edublink.html.rtl.devsblink.com/privacy-policy.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2022 02:19:20 GMT -->
</html>
