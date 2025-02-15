<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('index');
// });

// '/Dashboard'
Route::get('/', function () {
    return view('Dashboard.dashboard');
});

// Book
Route::get('/Book/create',[BookController::class,'create'])->name('books.create');
Route::get('/Book',[BookController::class,'index'])->name('books.index');
Route::post('/Book/store',[BookController::class,'store'])->name('books.store');
Route::get('/Book/edit/{id}',[BookController::class,'edit'])->name('books.edit');
Route::put('Book/update',[BookController::class,'update'])->name('books.update');
Route::delete('Book/delete/{id}',[BookController::class,'destroy'])->name('books.destroy');



// Students
Route::get('/Student',[StudentController::class,'index'])->name('students.index');
Route::get('/Student/create',[StudentController::class,'create'])->name('students.create');
Route::post('/Student/store',[StudentController::class,'store'])->name('students.store');
Route::get('Student/edit/{id}',[StudentController::class,'edit'])->name('students.edit');
Route::put('Student/update',[StudentController::class,'update'])->name('students.update');
Route::delete('Student/delete/{id}',[StudentController::class,'destroy'])->name('students.destroy');


// Authors
Route::get('/Author',[AuthorController::class,'index'])->name('authors.index');
Route::get('/Author/create',[AuthorController::class,'create'])->name('authors.create');
Route::post('/Author/store',[AuthorController::class,'store'])->name('authors.store');
Route::get('/Author/edit/{id}', [AuthorController::class, 'edit'])->name('authors.edit');
Route::put('/Author/update',[AuthorController::class,'update'])->name('authors.update');
Route::delete('Author/delete/{id}',[AuthorController::class,'destroy'])->name('authors.destroy');

// Category
Route::get('/Category',[CategoryController::class,'index'])->name('categories.index');
Route::get('/Category/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('/Category/store',[CategoryController::class,'store'])->name('categories.store');


// BookCategory
Route::get('/BookCategory',[BookCategoryController::class,'index'])->name('bookcategories.index');
Route::get('/BookCategory/create',[BookCategoryController::class,'create'])->name('bookcategories.create');
Route::post('/BookCategory/store',[BookCategoryController::class,'store'])->name('bookcategories.store');



// Auth
Route::get('/register',[AuthController::class,'register'])->name('Auth.register');
Route::post('/register',[AuthController::class,'handelRegister'])->name('Auth.handelRegister');
?>