<?php

namespace App\Http\Controllers;
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

	public function submitform(Request $request, $url)
	{
		$survey = Survey::where('url', $url)->first();
		if (!$survey) {
            abort(404);
        }
		dd($request->all());
		$request->validate([
			'sikap_keramahan' => 'required',
			'pemahaman_kebutuhan' => 'required',
			'kecepatan_pelayanan' => 'required',
			'penjelasan'=>'required',
			'sumber_info'=>'required',
			'saran_kritik' => 'required',
		]);
		dd($request->all());

		$feedback = new Feedback();
		$feedback->survey_id = $request->input('survey_id');
		$feedback->sikap_keramahan = $request->input('sikap_keramahan');
		$feedback->pemahaman_kebutuhan = $request->input('pemahaman_kebutuhan');
		$feedback->kecepatan_pelayanan = $request->input('kecepatan_pelayanan');
		$feedback->sumber_info = $request->input('sumber_info');
		$feedback->penjelasan = $request->input('penjelasan');
		$feedback->saran_kritik = $request->input('saran_kritik');

		$feedback->save();

	return redirect()->route('thanks')->with('success', 'Berhasil menambahkan Survey');
	}

}
