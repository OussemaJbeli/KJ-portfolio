<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\gest_pages\LandingPageController;
use App\Http\Controllers\gest_pages\BLogPageController;

use App\Http\Controllers\admin_pages\Dashboard_adminController;
use App\Http\Controllers\admin_pages\about_adminController;
use App\Http\Controllers\admin_pages\Blogs_adminController;
use App\Http\Controllers\admin_pages\contact_adminController;
use App\Http\Controllers\admin_pages\experience_adminController;
use App\Http\Controllers\admin_pages\project_adminController;
use App\Http\Controllers\admin_pages\service_adminController;
use App\Http\Controllers\admin_pages\skill_adminController;
use App\Http\Controllers\admin_pages\testimonial_adminController;
use App\Http\Controllers\admin_pages\user_manegement_adminController;

use App\Http\Controllers\Auth\AuthBLogPageController;
use Illuminate\Support\Facades\Route;


// ***************************gest pages

    Route::get('/', [LandingPageController::class, 'index'])
        ->name('gest.page');

    Route::get('/blog/List', [BLogPageController::class, 'index'])
        ->name('blog.List');
    
    Route::get('/blog/blog', [BLogPageController::class, 'show'])
        ->name('blog.show');
    
//*************************user

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //darcktheme
    Route::get('/profile/{user}/{darck_state}/darcktheme', [ProfileController::class, 'darcktheme'])->name('profile.darcktheme');
    //update_theme
    Route::get('/profile/{user}/{theme_id}/theme', [ProfileController::class, 'updateTheme'])->name('profile.updateTheme');
    //update_sid_img
    Route::get('/profile/{user}/{sid_img_id}/sid_img', [ProfileController::class, 'updateSideImg'])->name('profile.updateSideImg');
    //update_avatar
    Route::get('/profile/{user}/{avatar}/avatar', [ProfileController::class, 'updateAvatar'])->name('profile.updateAvatar');

    //**************************user

    Route::get('/Authblog', [AuthBLogPageController::class, 'index'])
        ->name('Authblog.List')
        ->middleware('auth');
    //*************************admin

    ///////////////Dashboard_admin
    Route::get('/Dashboard_admin', [Dashboard_adminController::class, 'index'])
        ->name('Dashboard_admin')
        ->middleware('auth');

    ///////////////about_admin
    Route::get('/about_admin', [about_adminController::class, 'index'])
        ->name('about_admin')
        ->middleware('auth');

    Route::post('/about_admin/edit', [about_adminController::class, 'edit'])
        ->name('about_admin.edit')
        ->middleware('auth');

    ///////////////skill_admin
    Route::get('/skill_admin', [skill_adminController::class, 'index'])
        ->name('skill_admin')
        ->middleware('auth');

    Route::get('/skill_admin/{id}/editSkil', [skill_adminController::class, 'editSkil'])
        ->name('skill_admin.editSkil')
        ->middleware('auth');
    Route::get('/skill_admin/addSkil', [skill_adminController::class, 'addSkil'])
        ->name('skill_admin.addSkil')
        ->middleware('auth');
    Route::get('/skill_admin/{id}/skildestroy', [skill_adminController::class, 'skildestroy'])
        ->name('skill_admin.skildestroy')
        ->middleware('auth');


    Route::get('/skill_admin/{id}/editEducation', [skill_adminController::class, 'editEducation'])
        ->name('skill_admin.editEducation')
        ->middleware('auth');

    Route::get('/skill_admin/addEducation', [skill_adminController::class, 'addEducation'])
        ->name('skill_admin.addEducation')
        ->middleware('auth');

    Route::get('/skill_admin/{id}/educdestroy', [skill_adminController::class, 'educdestroy'])
        ->name('skill_admin.educdestroy')
        ->middleware('auth');


    ///////////////service_admin
    Route::get('/service_admin', [service_adminController::class, 'index'])
        ->name('service_admin')
        ->middleware('auth');

    Route::get('/service_admin/{id}/edit', [service_adminController::class, 'edit'])
        ->name('service_admin.edit')
        ->middleware('auth');

    Route::get('/service_admin/store', [service_adminController::class, 'store'])
        ->name('service_admin.store')
        ->middleware('auth');

    Route::get('/service_admin/{id}/destroy', [service_adminController::class, 'destroy'])
        ->name('service_admin.destroy')
        ->middleware('auth');

    ///////////////experience_admin
    Route::get('/experience_admin', [experience_adminController::class, 'index'])
        ->name('experience_admin')
        ->middleware('auth');

    Route::get('/experience_admin/{id}/edit', [experience_adminController::class, 'edit'])
        ->name('experience_admin.edit')
        ->middleware('auth');

    Route::get('/experience_admin/store', [experience_adminController::class, 'store'])
        ->name('experience_admin.store')
        ->middleware('auth');

    Route::get('/experience_admin/{id}/destroy', [experience_adminController::class, 'destroy'])
        ->name('experience_admin.destroy')
        ->middleware('auth');

    ///////////////project_admin
    Route::get('/project_admin', [project_adminController::class, 'index'])
        ->name('project_admin')
        ->middleware('auth');

    Route::get('/project_admin/{id}/show', [project_adminController::class, 'show'])
        ->name('project_admin.show')
        ->middleware('auth');

    Route::post('/project_admin/store', [project_adminController::class, 'store'])
        ->name('project_admin.store')
        ->middleware('auth');

    Route::post('/project_admin/{id}/edit', [project_adminController::class, 'edit'])
        ->name('project_admin.edit')
        ->middleware('auth');

    Route::post('/project_admin/{id}/addSections', [project_adminController::class, 'addSections'])
        ->name('project_admin.addSections')
        ->middleware('auth');

    Route::post('/project_admin/{id}/editSections', [project_adminController::class, 'editSections'])
        ->name('project_admin.editSections')
        ->middleware('auth');

    Route::post('/project_admin/{id}/addImageProject', [project_adminController::class, 'addImageProject'])
        ->name('project_admin.addImageProject')
        ->middleware('auth');

    Route::get('/project_admin/{id}/destroy', [project_adminController::class, 'destroy'])
        ->name('project_admin.destroy')
        ->middleware('auth');

    Route::get('/project_admin/{id}/destroySections', [project_adminController::class, 'destroySections'])
        ->name('project_admin.destroySections')
        ->middleware('auth');

    Route::get('/project_admin/{id}/destroyImage', [project_adminController::class, 'destroyImage'])
        ->name('project_admin.destroyImage')
        ->middleware('auth');
    ///////////////testimonial_admin
    Route::get('/testimonial_admin', [testimonial_adminController::class, 'index'])
        ->name('testimonial_admin')
        ->middleware('auth');

    Route::post('/testimonial_admin/{id}/edit', [testimonial_adminController::class, 'edit'])
        ->name('service_admin.edit')
        ->middleware('auth');

    Route::post('/testimonial_admin/store', [testimonial_adminController::class, 'store'])
        ->name('service_admin.store')
        ->middleware('auth');

    Route::get('/testimonial_admin/{id}/destroy', [testimonial_adminController::class, 'destroy'])
        ->name('service_admin.destroy')
        ->middleware('auth');

    ///////////////contact_admin
    Route::get('/contact_admin', [contact_adminController::class, 'index'])
        ->name('contact_admin')
        ->middleware('auth');
    
    Route::post('/contact_admin/edit', [contact_adminController::class, 'edit'])
        ->name('contact_admin.edit')
        ->middleware('auth');

    ///////////////Blogs
    Route::get('/Blogs_admin', [Blogs_adminController::class, 'index'])
        ->name('Blogs_admin')
        ->middleware('auth');

    Route::get('/Blogs_admin/show_to_create', [Blogs_adminController::class, 'show_to_create'])
    ->name('Blogs_admin.show_to_create')
    ->middleware('auth');

    Route::get('/Blogs_admin/{id}/show_to_edit', [Blogs_adminController::class, 'show_to_edit'])
    ->name('Blogs_admin.show_to_edit')
    ->middleware('auth');

    Route::post('/Blogs_admin/store', [Blogs_adminController::class, 'store'])
    ->name('Blogs_admin.store')
    ->middleware('auth');

    Route::post('/Blogs_admin/{id}/edit', [Blogs_adminController::class, 'edit'])
    ->name('Blogs_admin.edit')
    ->middleware('auth');

    Route::get('/Blogs_admin/{id}/destroy', [Blogs_adminController::class, 'destroy'])
    ->name('Blogs_admin.destroy')
    ->middleware('auth');

    ///////////////users_admin
    Route::get('/user_manegement_admin', [user_manegement_adminController::class, 'index'])
    ->name('user_manegement_admin')
    ->middleware('auth');

    Route::get('/user_manegement_admin/add_special_user', [user_manegement_adminController::class, 'add_special_user'])
    ->name('user_manegement_admin.add_special_user')
    ->middleware('auth');

    Route::get('/user_manegement_admin/add_admin', [user_manegement_adminController::class, 'add_admin'])
    ->name('user_manegement_admin.add_admin')
    ->middleware('auth');

    Route::get('/user_manegement_admin/{id}/edit_user', [user_manegement_adminController::class, 'edit_user'])
    ->name('user_manegement_admin.edit_user')
    ->middleware('auth');

    Route::get('/user_manegement_admin/{id}/destroy', [user_manegement_adminController::class, 'destroy'])
    ->name('user_manegement_admin.destroy')
    ->middleware('auth');


});


require __DIR__.'/auth.php';
