<?php

namespace App\Http\Controllers;

use App\Models\Timezone;

class ProfileController extends Controller
{
    public function index()
    {
        $timezones = Timezone::orderBy('offset')->get();

        return view('timezoneList', compact('timezones'));
    }
}
