<?php

use App\Models\Employer;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    $employer = $job->employer;
    return view('job', ['job' => $job, 'employer' => $employer]);
});

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
Route::get('/contact', function () {
    return view('contact');
});
