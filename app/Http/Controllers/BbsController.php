<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index() {
        $context = ['bbs' => Bb::latest()->get()];
        //$context = ['bbs' => Bb::all()];
        return view('index', $context);
        //return response('Перелік оголошень')->header('Content-Type', 'text/plain');
    }


}
