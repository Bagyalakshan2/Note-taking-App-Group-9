<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{

    public function index()
    {

        $notes = Note::all(); 
        return view('notes.index', compact('notes'));

        }

    
    public function create()
    {
        return view('notes.create'); 
    }

    public function store(Request $request)
    {
      
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Note::create($request->all());
        return redirect('/')->with('success', 'Note created successfully!');
    }

   

   

  


}
    
?>

