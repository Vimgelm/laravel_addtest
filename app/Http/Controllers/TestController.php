<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function actionIndex(){
        return view('createtest');
    }

    public function Result(Request $request){
        $tests = New Test();
        $tests-> name = $request->name;
        $tests-> description = $request->description;
        $tests-> owner = $request->owner;
        $tests->save();
    }
}
