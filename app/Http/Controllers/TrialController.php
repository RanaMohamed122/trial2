<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrialController extends Controller
{
    public function trial()
    {
        /*
        $title = 'passing variable methods3';
        //return view('TrialView',compact('title'));
        //return view('TrialView',['title' => $title]);
        return view('TrialView')->with('title',$title);
        */

        $array = [
            'x' => 'x data',
            'y' => ['y data1','y data2','y data3']
        ];
        return view('TrialView')->with($array);

    }
}
