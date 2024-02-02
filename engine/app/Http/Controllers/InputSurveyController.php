<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Survey;

class InputSurveyController extends Controller
{
	public function showforminput()
    {
        $pageTitle = "Input Data Survey";
        return view('formsurvey', compact('pageTitle'));
    }

}
