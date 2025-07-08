<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index (Request $request) {
        if (isset($request['search'])) {
            return view('notes', ['notes' => 
                Note::where('title', 'like', "%{$request['search']}%")
                ->orWhere('text', 'like', "%{$request['search']}%")
                ->get()
            ]);
        } 
        return view('notes', ['notes' => Note::all()]);
    }

    public function show ($id) {
        return view('note', Note::find($id));
    }
}
