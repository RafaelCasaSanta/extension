<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\CreateCourse;
use App\Http\Controllers\StudentsController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentArea;

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


Route::get('/redirect', [LoginController::class, 'redirectToProvider'])->name('Google');
Route::get('/callback', [LoginController::class, 'handleProviderCallback']);




Route::get('/', function () {
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



//Atividades

Route::get('form', [PostController::class, 'index'])->middleware('admin');
Route::post('store-form', [PostController::class, 'store'])->middleware('admin');
Route::get('list', [ActivityController::class, 'showActivity'])->name('list')->middleware('admin');
Route::delete('list/{id}', [ActivityController::class, 'delete'])->middleware('admin');
Route::get('list/edit/{id}', [ActivityController::class, 'edit'])->middleware('admin');
Route::patch('list/{id}/update', [ActivityController::class, 'update'])->name('update')->middleware('admin');
//Route::get('delete/{id}', ActivityController::class, 'delete')


//Cursos//

Route::get('coursePage/{id}', [CoursesController::class, 'courseId'])->name('courseid')->middleware('admin');
Route::get('courseForm', [CoursesController::class, 'CoursePage'])->middleware('admin');
Route::post('store-course-form', [CoursesController::class, 'storeCourse'])->middleware('admin');
Route::get('courses', [CoursesController::class, 'courseList'])->name('courses')->middleware('admin');

Route::get('admin/courses',[CoursesController::class, 'courseList'])->name('courses')->middleware('admin');
Route::delete('coursePage/{id}', [CoursesController::class, 'deleteCourse'])->middleware('admin');

// Cadastro de Estudantes//

Route::post('store-students', [StudentsController::class, 'storeStudents'])->middleware('admin');
Route::get('student-list', [StudentsController::class, 'studentsList'])->name('studentList')->middleware('admin');

Route::get('students', [StudentsController::class, 'studentsList'])->name('students')->middleware('admin');

Route::post('coursePage/{id}', [StudentsController::class, 'storeStudents'])->name('storeStudents')->middleware('admin');

Route::get('student-list', ['as' => 'students.studentList', 'uses' => 'StudentController@studentList'])->middleware('admin');

// Perfil do Aluno //

Route::get('students-page', [StudentsController::class, 'studentPageView'])->name('aluno');

// Projetos //

Route::get('project-list-page', [ProjectController::class, 'projectPreview']);
Route::get('project-page/{id}', [ProjectController::class, 'getProjects'])->name('getProjects');
Route::post('store-projects', [ProjectController::class, 'storeProjects']);

Route::get('projects-list', [ProjectController::class, 'projectPreview'])->name('projectlist');
require __DIR__.'/auth.php';
