<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Survey;

class Dashboard extends Controller
{
	public function showdashboard()
    {
		$survey = Survey::all();
        $pageTitle = "Dashboard";
        return view('dashboard', compact('pageTitle' , 'survey'));
    }

	public function create(Request $request)
{
    try {
        $request->validate([
            'id_leads' => 'required',
            'perusahaan' => 'required',
            'nama' => 'required',
            'telepon' => 'required',
        ]);

        $data = [
            'id_leads' => $request->input('id_leads'),
            'perusahaan' => $request->input('perusahaan'),
            'nama' => $request->input('nama'),
            'telepon' => $request->input('telepon'),
            'url' => $request->input('url'),
        ];

        if ($request->filled('kebutuhan')) {
            $data['kebutuhan'] = $request->input('kebutuhan');
        }

        Survey::create($data);

        return redirect()->route('dashboard')->with('success', 'Survey Berhasil Ditambahkan.');
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->with('error', 'Gagal menambahkan survey. Silakan coba lagi.');
    }
}


}
