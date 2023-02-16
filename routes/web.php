<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ArticalController;

//home page
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

//Auth
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/handleregister', [App\Http\Controllers\AuthController::class, 'handleRegister'])->name('auth.handleRegister');
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
Route::post('/handleLogin', [App\Http\Controllers\AuthController::class, 'handleLogin'])->name('auth.handleLogin');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');

//auth google
Route::get('auth/google', [App\Http\Controllers\AuthController::class, 'redirectToGoogle']);
Route::get('callback', [App\Http\Controllers\AuthController ::class, 'handleGoogleCallback']);

//auth facebook
Route::get('facebook/auth', [App\Http\Controllers\FaceBookController::class, 'loginUsingFacebook'])->name('facebook.login');
Route::get('facebook/callback', [App\Http\Controllers\FaceBookController::class, 'callbackFromFacebook'])->name('callback');


// forget password
Route::get('forget-password', [App\Http\Controllers\ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [App\Http\Controllers\ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [App\Http\Controllers\ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [App\Http\Controllers\ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


//artcals
Route::get('article', [App\Http\Controllers\ArticalController::class, 'view_all_artical'])->name('all.artical');
Route::get('article/{id}', [App\Http\Controllers\ArticalController::class, 'show_artical'])->name('show.artical');
Route::get('/articles', [ArticalController::class, 'category_artical'])->name('articles.index');


//magazine
Route::get('magazines', [App\Http\Controllers\MagazineController::class, 'view_all_magazine'])->name('all.magazines');

Route::get('magazine/{id}', [App\Http\Controllers\MagazineController::class, 'show'])->name('show.magazines');

//plans
Route::get('plans', [App\Http\Controllers\PlanController::class, 'plans_page'])->name('plans_page');
Route::get('plans/{plan}', [App\Http\Controllers\PlanController::class, 'show'])->name("plans.show");


// midleware login
Route::middleware('isLoginUser')->group(function(){

    Route::post('subscription', [App\Http\Controllers\PlanController::class, 'subscription'])->name("courses.pay");
    Route::get('/course/{course}/enroll',[\App\Http\Controllers\Front\IndexController::class,'enroll'])->name('courses.enroll');


    //social media routes
    Route::get('socialmedia/{id}',[App\Http\Controllers\SocialMediaController::class,'profile'])->name('profile');
    Route::get('addpost', [App\Http\Controllers\PostController::class,'create'])->name('add.post');
    Route::post('createpost_', [App\Http\Controllers\PostController::class, 'CreatePost'])->name('CreatePost');
    Route::get('editpost/{id}', [App\Http\Controllers\PostController::class,'edit'])->name('edit.post');
    Route::post('posteditdone/{id}', [App\Http\Controllers\PostController::class,'editPost'])->name('handel.edit.post');
    Route::get('delete/post/{id}', [App\Http\Controllers\PostController::class,'delete'])->name('delete.post');


    //like and unlike
    Route::post('/like-post/{id}',[App\Http\Controllers\PostController::class,'likePost'])->name('like.post');
    Route::post('/unlike-post/{id}',[App\Http\Controllers\PostController::class,'unlikePost'])->name('unlike.post');



    Route::get('categoryy', [App\Http\Controllers\ArticalController::class,'getArticalByCategory'])->name('article.category');



    Route::post('create.comment',[App\Http\Controllers\SocialMediaController::class,'store'])->name('comments.store');


    Route::post('create.comment',[App\Http\Controllers\SocialMediaController::class,'store'])->name('comments.store');

    //home page sochil
    Route::get('social/home', [App\Http\Controllers\SocialMediaController::class, 'homePage'])->name('home');
    Route::get('social/user/edit/{id}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('edit.social');
    Route::get('social/user/edit/security/{id}', [App\Http\Controllers\ProfileController::class, 'editSecurity'])->name('edit.security.social');
    Route::post('/change-password',  [App\Http\Controllers\SocialMediaController::class, 'changePassword'])->name('change.password');


});


//admin dashbore route

Route::middleware('isLoginAdmin')->group(function()
{
    Route::resource('portal/article',ArticalController::class);
    Route::delete('portal/article/delete/{id}',[ArticalController::class,'delete'])->name('delete.article');
    //parts of article
    Route::resource('portal/parts',CategorieController::class);
    //Magazine
    Route::get('portal/magazines', [App\Http\Controllers\MagazineController::class, 'all_admin_magazine'])->name('all_admin_magazine');
    Route::get('portal/magazine/create', [App\Http\Controllers\MagazineController::class, 'admin_magazine'])->name('magazine.create.page');
    Route::Post('portal/magazine/create_', [App\Http\Controllers\MagazineController::class, 'create'])->name('magazine.create.handle');
    Route::get('portal/magazine/edit/{id}', [App\Http\Controllers\MagazineController::class, 'edit_page'])->name('Magazine.page.edit');
    Route::post('portal/magazine/update/{id}', [App\Http\Controllers\MagazineController::class, 'edit_magazen'])->name('Magazine.edit');
    Route::get('portal/part/delete/{id}', [App\Http\Controllers\MagazineController::class, 'delete'])->name('Magazine.delete');
    //users
    Route::resource('portal/user',UserController::class);
    Route::get('portal/users/guest', [App\Http\Controllers\UserController::class, 'users'])->name('users.guest');

    //course
    Route::resource('portal/course',CourseController::class);
    Route::resource('portal/section',SectionController::class);
    Route::resource('portal/video',VideoController::class);
    Route::get('portal/student/enrollment', [App\Http\Controllers\EnrollmentController::class, 'dashboard'])->name('student');
    Route::get('/dashboard/{user}/{course}/approve', [App\Http\Controllers\EnrollmentController::class, 'approve'])->name('enrollment.approve');
    Route::get('/dashboard/{user}/{course}/disapprove', [App\Http\Controllers\EnrollmentController::class, 'disapprove'])->name('enrollment.disapprove');


    //terms and policy
    Route::resource('portal/terms',TermController::class);
    Route::resource('portal/policy',PolicyController::class);
    Route::get('portal', [App\Http\Controllers\DashboardController::class, 'counts'])->name('index.admin');

    //social media
    Route::get('portal/social/posts', [App\Http\Controllers\PostController::class, 'admin_posts'])->name('social.posts');
    Route::get('portal/social/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('social.posts.delete');

});


//edit profile
Route::get('edit_profile/{id}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('edit_profile');
Route::PUT('update_profile/{id}', [App\Http\Controllers\ProfileController::class, 'update_profile'])->name('update_profile');

//edit user
Route::get('/user/edit/{id}', [App\Http\Controllers\AuthController::class, 'edit'])->name('edit_user');
Route::PUT('/user/edit/handel/{id}', [App\Http\Controllers\AuthController::class, 'handeledit'])->name('update_user');



Route::get('home/courses',[\App\Http\Controllers\Front\IndexController::class,'getAllCoursesInHome'])->name('home_elms');
Route::get('allcourses',[\App\Http\Controllers\Front\IndexController::class,'allCourses'])->name('allcourses');
Route::get('course/{id}',[\App\Http\Controllers\Front\IndexController::class,'detailsCourse'])->name('show.course');



Route::get('handsa',[\App\Http\Controllers\Front\CategoryController::class,'index'])->name('handsa.index');




