<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class SendSurveyController extends Controller
{
    public function showlistsurvey(Request $request)
    {
        $search = $request->input('search');
        $survey = [];
        
        if (!empty($search)) {
            $survey = Survey::where('id_leads', 'like', '%' . $search . '%')
            ->orWhere('nama', 'like', '%' . $search . '%')
            ->orWhere('telepon', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->get();
        } 
        $pageTitle = "List Survey";

        return view('listsurvey', compact('pageTitle', 'survey' , 'search'));
    }

    public function view(Request $request)
    {
        $data = [
            'id_leads' => $request->input('id_leads'),
            'perusahaan' => $request->input('perusahaan'),
            'nama' => $request->input('nama'),
            'telepon' => $request->input('telepon'),
            'url' => $request->input('url'),
        ];

        Survey::view($data);

        $survey = Survey::all();
        $pageTitle = "List Survey";

        return view('listsurvey', compact('pageTitle', 'survey'));
    }
}