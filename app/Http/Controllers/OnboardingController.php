<?php

namespace App\Http\Controllers;

use App\Models\EligibilityQuestionSet;
use Illuminate\Http\Request;

class OnboardingController extends Controller
{
    //

    public function getEligibilityQuestionSet()
    {

        $questions = EligibilityQuestionSet::get();
        return response()->json([
            'questions' => $questions,
        ]);
    }



    public function postOnboarding(Request $request){

        $res = $request->all();


       return response()->json([
            'questions' => $res,
            'status' => "POst Successfully"

        ]);
        
    }
    
}
