<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ThanksController extends Controller
{
    public function showthanks()
    {
        $pageTitle = "Terima kasih";
        return view('thanks.thanks', compact('pageTitle'));
    }

}
