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
    
?>

