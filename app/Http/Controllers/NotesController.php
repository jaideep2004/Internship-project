<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    
    public function index()
    {
        $notes = Notes::all();
        return view('home',compact('notes'));
    }

    
    
    public function store(Request $request)
    {
        $data = $request -> validate([
            'content' => 'required'
        ]);

        Notes::create($data);
        return back();
    }

    public function destroy(Notes $notes)
    {
        $notes -> delete();
        return back();
    }

    public function edit($id)
    {
        $notes = Notes::findOrFail($id); // Fetch the note by its ID
        
        return view('edit', compact('notes')); // Assuming you have an 'edit' view
    }

    public function update(Request $request, $id)
    {
        $notes = Notes::findOrFail($id); // Fetch the note by its ID
        
        $notes->content = $request->input('content'); // Update the note content
        
        $notes->save(); // Save the changes
        
        return redirect()->route('index')->with('success', 'Note updated successfully'); // Redirect to index page or wherever you want
    }
}
