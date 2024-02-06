<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Survey;
use App\Models\Feedback;
use Illuminate\Http\Request;


class SurveyController extends Controller
{
    public function formsurvey($url)
	{
		$survey = Survey::where('url', $url)->first();
		$pageTitle = "Survey Pelanggan Fingerspot";

        return view('new-survey-form', compact('pageTitle' , 'survey' , 'url'));
	}

	public function submitForm(Request $request, $url)
{
    $survey = Survey::where('url', $url)->first();        
    if (!$survey) {
        abort(404);
    }

    $validator = Validator::make($request->all(), [
        'sikap_keramahan' => 'required',
        'pemahaman_kebutuhan' => 'required',
        'kecepatan_pelayanan' => 'required',
        'penjelasan' => 'required',
        'saran_kritik' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Gagal menambahkan survey. Silakan cek inputan lagi.');
    }
	$sumber_info = $request->input('sumber_info');
	$sumber_info_json = json_encode($sumber_info);
    $data = [
		'sikap_keramahan' => $request->input('sikap_keramahan'),
		'pemahaman_kebutuhan' => $request->input('pemahaman_kebutuhan'),
		'kecepatan_pelayanan' => $request->input('kecepatan_pelayanan'),
		'penjelasan' => $request->input('penjelasan'),
		'sumber_info' => $sumber_info_json,
		'saran_kritik' => $request->input('saran_kritik'),
		'url' => $request->input('url'),
    ];
//dd($data);
    Feedback::create($data);
    return redirect()->route('thanks');
}

	
}
