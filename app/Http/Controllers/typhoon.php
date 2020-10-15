<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class typhoon extends Controller
{
    public function main_view()
    {
        return view('typhoon.typhoon');
    }
    public function typhoon_add($id)
    {
        return view('typhoon.typhoon_add');
    }
    public function typhoon_edit($id)
    {
        return view('typhoon.typhoon_edit')->with('id',$id);
    }
    public function typhoon_delete($id)
    {
        return "tobe";
    }
    public function typhoon_show($id)
    {
        return view('typhoon.typhoon_show')->with("id",$id);
    }
}
