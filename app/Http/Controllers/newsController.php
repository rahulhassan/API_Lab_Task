<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;

class newsController extends Controller
{
    function newsInfo(){
        $newsInfo = news::all();

        return response()->json($newsInfo);
    } 
    function newsByType($type){
        $newsInfo = news::where('type', '=', "$type")->get();

        return response()->json($newsInfo);
    } 
    function newsInsert(Request $req){
        $newsInfo = new news();
        $newsInfo->title = $req->title;
        $newsInfo->description = $req->description;
        $newsInfo->type = $req->type;
        $newsInfo->date = $req->date;
        $newsInfo->save();
        return response()->json($newsInfo);
    } 
    function newsUpdate(Request $req, $id){
        $newsInfo = news::find($id);
        $newsInfo->title = $req->title;
        $newsInfo->description = $req->description;
        $newsInfo->type = $req->type;
        $newsInfo->date = $req->date;
        $newsInfo->save();
        return response()->json($newsInfo);
    } 
    function newsDelete($id){
        $newsInfo = news::where('id', '=', $id)->delete();
        return response()->json($newsInfo);
    } 
}
