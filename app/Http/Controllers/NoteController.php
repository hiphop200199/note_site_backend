<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class NoteController extends Controller
{

    public function index(Request $request)
    {
       return  Note::getList($request->id);
    }

    public function get($id)
    {
       return Note::get($id);
    }

    public function add(Request $request)
    {
        return Note::add($request->user_id,$request->subject,$request->content,$request->date);
    }


    public function edit(Note $note)
    {

    }

    public function delete(Request $request)
    {
        return Note::del($request->id);
    }
}
