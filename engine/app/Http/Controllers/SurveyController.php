<?php

namespace App\Http\Controllers;
use App\Models\Survey;
use Illuminate\Http\Request;


class SurveyController extends Controller
{
    public function formsurvey($url)
	{
		$survey = Survey::where('url', $url)->first();
		$pageTitle = "Survey Pelanggan Fingerspot";

        return view('new-survey-form', compact('pageTitle' , 'survey'));
	}

	public function submitform(Request $request, $url)
	{
		$survey = Survey::where('url', $url)->first();
		if (!$survey) {
            abort(404);
        }
		$request->validate([
            'kesan_pelayanan' => 'nullable|string',
            'agree' => 'accepted',
        ]);

		$survey->update([
            'kesan_pelayanan' => $request->input('kesan_pelayanan'),
        ]);
	return redirect()->route('thanks')->with('success', 'Berhasil menambahkan Survey');
	}

}
