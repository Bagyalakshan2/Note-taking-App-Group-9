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
        $notes = Note::all(); // Retrieve all notes from the database
        return view('notes.index', compact('notes')); // Pass notes to the view
    }

    public function create()
    {
        return view('notes.create'); // Show the form to create a note
    }

    public function store(Request $request)
    {
        // Validate and store the note
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Note::create($request->all());
        return redirect('/')->with('success', 'Note created successfully!');
    }
}
?>

