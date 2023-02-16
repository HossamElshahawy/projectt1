<!DOCTYPE html>
<html class="no-js " dir="rtl" lang="zxx" >


<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>مدونه منصه انا مهندس</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('lms/')}}assets/images/favicon.png">
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Roboto&display=swap" rel="stylesheet">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('lms/assets/css/app.css')}}">

</head>

<body class="sticky-header">

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
    <!--=        Header Area Start       	=-->
    <!--=====================================-->
    <header class="edu-header header-style-1 header-fullwidth no-topbar">
        <div id="edu-sticky-placeholder"></div>
        <div class="header-mainmenu">
            <div class="container-fluid">
                <div class="header-navbar">
                    <div class="header-brand">
                        <div class="logo">
                            <a href="{{url('/')}}">
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
                                            <li><a href="course-one.html">التصميم الميداني</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-mainnav">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li ><a href="{{url('/')}}">الرئيسيه</a>
                                </li>
                                <li ><a href="{{route('all.artical')}}">المقالات</a>
                                </li>
                                <li ><a href="{{route('all.artical')}}">المجله</a>
                                </li>
                                <li><a href="{{route('allcourses')}}">الدورات</a>
                                </li>
                                <li><a href="{{route('plans_page')}}">خطط الاسعار</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <ul class="header-action">
                            <li class="header-btn">
                                @guest
                                    <a href="{{route('auth.login')}}" class="edu-btn btn-medium"> تسجيل الدخول <i class="icon-west"></i></a>
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


    <!--=====================================-->
    <!--=       Blog Details Area Start     =-->
    <!--=====================================-->
    <div class="blog-details-area section-gap-equal">
        <div class="container">
            <div class="row row--30">
                <div class="col-lg-8">
                    <div class="blog-details-content">
                        <div class="entry-content">
                            <h3 class="title">{{$article->title}}</h3>
                            <ul class="blog-meta">
                            </ul>
                            <div class="thumbnail">
                                <img src="{{ asset('/storage/article/' . $article->img) }}" alt="Blog Image" width="10" height="10">
                            </div>
                        </div>
                        <div>
                            {!! $article->description !!}
                        </div>

                        <div class="blog-share-area">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <div class="blog-tags">
                                        <h6 class="title">العلامات:</h6>
                                        <div class="tag-list">
                                            <a href="#">{{$article->tag1}}</a>
                                            <a href="#">{{$article->tag2}}</a>
                                            <a href="#">{{$article->tag3}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="blog-share">
                                        <h6 class="title">مشاركه فى:</h6>
                                        <ul class="social-share icon-transparent">
                                            <li>
                                                <a href="#"><i class="icon-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-author">

                    </div>

                    <div class="blog-pagination">
                        <div class="row g-5">
                            <div class="col-lg-6">
                                @if($lastArticle)
                                <div class="blog-pagination-list prev-post">
                                    <a href="{{route('show.artical',$lastArticle->id)}}">
                                        <i class="icon-east"></i>
                                        <span>{{$lastArticle->title}}</span>
                                    </a>
                                </div>
                                @endif
                            </div>

                            <div class="col-lg-6">
                                @if($nextArticle)
                                <div class="blog-pagination-list next-post">
                                    <a href="{{route('show.artical',$nextArticle->id)}}">
                                        <span>{{$nextArticle->title}}</span>
                                        <i class="icon-west"></i>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>


                    <!-- Start Comment Area  -->



                </div>
                <div class="col-lg-4">
                    <div class="edu-blog-sidebar">
                        <!-- Start Single Widget  -->

                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
                        <div class="edu-blog-widget widget-latest-post">
                            <div class="inner">
                                <h4 class="widget-title">آخر مشاركة</h4>
                                <div class="content latest-post-list">
                                    @foreach($lastArticles as $lastArticle)
                                        <div class="latest-post">
                                            <div class="thumbnail">
                                                <a href="{{route('show.artical',$lastArticle->id)}}">
                                                    <img src="{{ asset('/storage/article/' . $lastArticle->img) }}" alt="Blog Images" width="150" height="150">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h6 class="title"><a href="blog-details.html">{{$lastArticle->title}}</a></h6>
                                                <ul class="blog-meta">
                                                    <li><i class="icon-27"></i>{{ strftime('%Y-%m-%d', strtotime($lastArticle->created_at)) }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
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
                                        @foreach($categories as $category)
                                            <li><a href="#">{{$category->name}}<span>({{count($category->artical)}})</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
                        <div class="edu-blog-widget widget-action">
                            <div class="inner">
                                <h4 class="title">احصل على دورات عبر الإنترنت من <span>انا مهندس</span></h4>
                                <span class="shape-line"><i class="icon-19"></i></span>
                                <p>و سأعرض مثال حي لهذا، من هنا </p>
                                <a href="{{route('allcourses')}}" class="edu-btn btn-medium">ابدأ الآن <i class="icon-west"></i></a>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->

                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
                        <!-- End Single Widget  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=        CTA  Area Start            =-->
    <!--=====================================-->
    <!-- Start Ad Banner Area  -->
    <div class="edu-cta-banner-area home-one-cta-wrapper bg-image">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title">من خلال  <span class="color-secondary">شهادة انا مهندس</span> احصل على مهارات الجودة الخاصة بك</h2>
                            <a href="{{route('allcourses')}}" class="edu-btn"> شهادة نبدأ الآن <i class="icon-west"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-01 scene">
                        <img data-depth="2.5" src="{{asset('lms/assets/images/cta/shape-10.png')}}" alt="shape">
                    </li>
                    <li class="shape-02 scene">
                        <img data-depth="-2.5" src="{{asset('lms/assets/images/cta/shape-09.png')}}" alt="shape">
                    </li>
                    <li class="shape-03 scene">
                        <img data-depth="-2" src="{{asset('lms/assets/images/cta/shape-08.png')}}" alt="shape">
                    </li>
                    <li class="shape-04 scene">
                        <img data-depth="2" src="{{asset('lms/assets/images/about/shape-13.png')}}" alt="shape">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Ad Banner Area  -->
    <!--=====================================-->
    <!--=        Footer Area Start       	=-->
    <!--=====================================-->
    <!-- Start Footer Area  -->
    <footer class="edu-footer footer-lighten bg-image footer-style-1">
        <div class="footer-top">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="edu-footer-widget">
                            <div class="logo">
                                <a href="{{url('/')}}">
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
                            <h4 class="widget-title">الروابط</h4>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="#">سياسه الخصوصيه</a></li>
                                    <li><a href="TermsandConditions.html">الشروط والاحكام</a></li>
                                    <li><a href="#">الاسئله الشائعة</a></li>
                                    <li><a href="#">تطوع معنا</a></li>
                                    <li><a href="#">حول</a></li>
                                    <li><a href="#"> التحقق من صحه الشهاده</a></li>
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
                                    <li><a href="../socialmedia/profile.html">التواصل الاجتماعي </a></li>
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
                                    <li><a href="#" class="color-fb"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#" class="color-linkd"><i class="icon-linkedin2"></i></a></li>
                                    <li><a href="#" class="color-ig"><i class="icon-instagram"></i></a></li>
                                    <li><a href="#" class="color-twitter"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#" class="color-yt"><i class="icon-youtube"></i></a></li>
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
<script src="{{asset('lms/assets/js/vendor/modernizr.min.js')}}"></script>
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
<script src="{{asset('lms/assets/js/vendor/paralax-scroll.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/lightbox.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/paralax.min.js')}}"></script>
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


</html>
