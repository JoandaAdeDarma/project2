<?php 
namespace App\Http\Controllers; 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;

class LoginRegisterController extends Controller 
{ 
    public function login() { 
        return view('auth.login'); 
    } 

    public function register() { 
        return view('auth.register');
    }
} 
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
Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');

Route::get('/', function () {
    return view('home'); 
}); 
