<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        return view('notice');
    }

    public function campaignDetails()
    {
        return view('campaign-details');
    }
}
