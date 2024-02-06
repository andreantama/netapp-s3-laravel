<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class HomeController extends Controller
{
    function index(Request $request) {
        $createTempUrl = Storage::disk('s3_bucket_emr')->temporaryUrl("Badge-depan.png",  now()->addMinutes(1));
        return view("home", [
            'url' => $createTempUrl
        ]);
    }
}
