<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Survey;

class InputSurveyController extends Controller
{
	public function showforminput()
    {
        $pageTitle = "Input Data Survey";
        return view('formsurvey', compact('pageTitle'));
        $data->feedback = Feedback::where('survey_id', $data->id)->exists();
    }

    public function inputform(Request $request)

    {
        try{
            $request->validate([
                'id_leads' => 'required',
                'nama' => 'required',
                'telepon' => 'required',
                'email' => 'required',
                'contactby' => 'required',
                'kebutuhan' => 'required',
            ]);
    
            $data = [
                'id_leads' => $request->input('id_leads'),
                'nama' => $request->input('nama'),
                'telepon' => $request->input('telepon'),
                'email' => $request->input('email'),
                'contactby' => $request->input('contactby'),
                'kebutuhan' => $request->input('kebutuhan'),
                'url' => $request->input('url'),
            ];
    
            Survey::create($data);
            return redirect()->route('input')->with('success', 'Survey Berhasil Ditambahkan.');

        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan survey. Silakan cek inputan lagi.');
        }        
    }
}
