<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Response;

class ResponseController extends Controller
{
    //
    public function index()
    {
        $responses = Response::query()->latest()->get();
        return view('responses.index', ['responses' => $responses]);
    }
}
