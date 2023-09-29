<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendPhotoBotTelegramController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('photo');
    }
}
