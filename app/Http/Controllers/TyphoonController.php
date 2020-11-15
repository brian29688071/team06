<?php

namespace App\Http\Controllers;

use App\Models\team06_typhoon;
use Illuminate\Http\Request;

class TyphoonController extends Controller
{
    public function main_view()
    {
        $typhoon=team06_typhoon::all();
        return view('typhoon.typhoon',['typhoons'=>$typhoon]);
    }
    public function typhoon_add()
    {/*
        $id=30;
        $typhoon=new team06_typhoon;
        $typhoon->year=2000;
        $typhoon->$id;
        $typhoon->name="test";
        $typhoon->arrived=0;
        $typhoon->powerLV=0;
        $typhoon->level=0;
        $typhoon->save();
*/
        return view('typhoon.typhoon_add');
    }
    public function typhoon_edit($id)
    {
        $typhoon = team06_typhoon::query()->findOrFail($id);
        return view('typhoon.typhoon_edit',$typhoon);
    }
    public function typhoon_delete($id)
    {
        return "tobe";
    }
    public function typhoon_show($id)
    {
        $typhoon = team06_typhoon::query()->findOrFail($id);
        return view('typhoon.typhoon_show',$typhoon);
    }
    public  function typhoon_add_updating(Request $request)
    {
        $typhoon=new team06_typhoon;
        $typhoon->year=$request->year;
        $typhoon->id=$request->id;
        $typhoon->name=$request->name;
        $typhoon->arrived=$request->arrived;
        $typhoon->powerLV=$request->powerLV;
        $typhoon->level=$request->level;
        $typhoon->save();
        $typhoon=team06_typhoon::query()->findOrFail($request->id);
        return view('typhoon.typhoon_show',$typhoon);
        //return $request;
    }
    public  function typhoon_edit_updating(Request $request)
    {
        $typhoon=team06_typhoon::query()->findOrFail($request->o_id);
        $typhoon->year=$request->year;
        $typhoon->id=$request->id;
        $typhoon->name=$request->name;
        $typhoon->arrived=$request->arrived;
        $typhoon->powerLV=$request->powerLV;
        $typhoon->level=$request->level;
        $typhoon->save();
        $typhoon=team06_typhoon::query()->findOrFail($request->id);
        return view('typhoon.typhoon_show',$typhoon);
    }
}
