<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OnboardingController;
use Illuminate\Support\Facades\Route;


Route::get("/",[HomeController::class,'index']);
Route::get("/recruitment",[HomeController::class,'recruitment']);
Route::get("/institution",[HomeController::class,'institution']);
Route::get("/courses",[HomeController::class,'courses']);
Route::get("/program-onboard",[HomeController::class,'programOnboard']);





Route::get("/questionset",[OnboardingController::class,'getEligibilityQuestionSet']);
Route::post("/postOnboarding",[OnboardingController::class,'postOnboarding']);