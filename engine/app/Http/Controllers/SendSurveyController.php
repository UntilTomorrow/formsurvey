<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Survey;

class SendSurveyController extends Controller
{
    public function showlistsurvey(Request $request)
    {
        $search = $request->input('search');
        
        if (!empty($search)) {
            $survey = Survey::where('id_leads', 'like', '%' . $search . '%')
                ->orWhere('nama', 'like', '%' . $search . '%')
                ->orWhere('telepon', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->get();
        } else {
            $survey = Survey::all();
        }
        foreach ($survey as $data) {
            $feedback = Feedback::where('survey_id', $data->id)->first();
            $data->feedback = $feedback;
        }
    
        $pageTitle = "List Survey";
        return view('listsurvey', compact('pageTitle', 'survey', 'search'));
    }
    
}