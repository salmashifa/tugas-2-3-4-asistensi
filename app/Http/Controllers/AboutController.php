<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

public function index()
{
    $members = Member::latest()->get();

    return view('about', compact('members'));
}