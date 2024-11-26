<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


// Reitti kotisivulle
Route::get('/', function () {
  return view('home');
});

// Reitti työpaikkalistalle
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

// Reitti yksittäiselle työpaikalle
Route::get('/jobs/{id}', function ($id) {
    // Haetaan työpaikka listasta
   $job = job::find($id);
    return view('job', ['job' => $job]);
});

// Reitti yhteydenottosivulle
Route::get('/contact', function () {
    return view('contact');
});
