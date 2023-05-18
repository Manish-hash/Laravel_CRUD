<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MyDetail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/invalid',[LoginController::class,'invalidateFunction']);
Route::get('/employee',[LoginController::class,'invalidateFunction']);

Route::get('/emp1',[StudentController::class,'generateRandomPass']);

Route::get('/empblade',[EmployeeController::class,'displayEmpBlade']);

Route::get('/detail',[MyDetail::class,'displayMyDetail']);

Route::get('/employee',[EmployeeController::class,'viewEmployee']);
Route::post('/sEmployee',[EmployeeController::class,'saveEmployee']);

Route::get('/list',[EmployeeController::class,'listEmployee']);

Route::get('delemp/{id}',[EmployeeController::class,'delEmpId']);//path ma id dako{}
Route::get('updemp/{id}',[EmployeeController::class,'updEmpId']);
Route::post('/updemployee',[EmployeeController::class,'updEmpIdPost']);

Route::get('/login', function () {
    return view('login');
});
Route::post('/submitted',[LoginController::class,'loginSubmitted']);
Route::get('/logout',[LoginController::class,'logOUt']);


//used for templating

Route::get('/home',[EmployeeController::class,'templateHome']);
Route::get('/about',[EmployeeController::class,'templateAbout']);







