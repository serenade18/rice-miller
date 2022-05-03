<?php
use App\Http\Controllers\SocialShareButtonsController;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\RecipeComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\ServiceComponent;
use App\Http\Livewire\TestimonialComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Controllers\MailController; 

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminBlogComponent;
use App\Http\Livewire\Admin\AdminAddBlogComponent;
use App\Http\Livewire\Admin\AdminRecipeComponent;

use App\Http\Livewire\RecipeDetailsComponent;
use App\Http\Livewire\BlogDetailsComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', HomeComponent::class);
Route::get('/recipe', RecipeComponent::class);
Route::get('/blog', BlogComponent::class);
Route::get('/about', AboutComponent::class);
Route::get('/testimonial', TestimonialComponent::class);
Route::get('/service', ServiceComponent::class);
Route::get('/contact', ContactComponent::class);

Route::get('/recipe/{slug}', RecipeDetailsComponent::class)->name('recipe.details');
Route::get('/blog/{slug}', BlogDetailsComponent::class)->name('blog.details');

Route::get('/social-media-share', [SocialShareButtonsController::class,'ShareWidget']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
