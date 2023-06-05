<?php

namespace App\Http\Controllers;
use App\Models\lesson;
use Illuminate\Http\Request;
use DB;

class LessonsController extends Controller
{
    public function lessons () {
        $lessons = DB::table('lessons')->get();
        return view('LessonsPage', compact('lessons'));
    }
}
