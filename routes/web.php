<?php

use App\Models\Employer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::view('/', 'home');
Route::view('/contact', 'contact');

// Route::controller(JobController::class)->group(function(){
//     Route::get('/jobs',  'index');// index
//     Route::get('/jobs/create',  'create');//create
//     Route::get('/jobs/{job}',  'show');//show
//     Route::post('/jobs',  'store'); //store
//     Route::get('/jobs/{job}/edit',  'edit');//edit
//     Route::patch('/jobs/{job}',  'update'); //update
//     Route::delete('/jobs/{job}',  'destroy');//destroy
// });

Route::resource('jobs', JobController::class);


Route::get('/employers', function () {
    return view(
        'employers',
        ['employers' => Employer::all()]
    );
});

Route::get('employers/{id}', function ($id) {
    $employer = Employer::find($id);
    $jobs = $employer->jobs;
    return view('employer', [
        'employer' => $employer,
        'jobs' => $jobs
    ]);
});

