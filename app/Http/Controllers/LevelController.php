<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\team06_level;
class LevelController extends Controller
{
    public function main_view()
    {
        $level=team06_level::all();
        return view('level.level',['levels'=>$level]);
    }
    public function level_add()
    {
        return view('level.level_add');
    }
    public function level_edit($id)
    {
        $level = team06_level::query()->findOrFail($id);
        return view('level.level_edit',$level);
    }
    public function level_delete($id)
    {
        return "tobe";
    }
    public function level_show($id)
    {
        $level = team06_level::query()->findOrFail($id);
        return view('level.level_show',$level);
    }
    public  function level_add_updating(Request $request)
    {
        $level=new team06_level;
        $level->id=$request->id;
        $level->description=$request->description;
        $level->save();
        $level=team06_level::query()->findOrFail($request->id);
        return view('level.level_show',$level);
        //return $request;
    }
    public  function level_edit_updating(Request $request)
    {
        $level=team06_level::query()->findOrFail($request->o_id);
        $level->id=$request->id;
        $level->description=$request->description;
        $level->save();
        $level=team06_level::query()->findOrFail($request->id);
        return view('level.level_show',$level);
    }
}
