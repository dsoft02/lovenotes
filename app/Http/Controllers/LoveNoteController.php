<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\LoveNote;

class LoveNoteController extends Controller
{
    public function submitNote(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'string|nullable',
            'gender' => 'in:Male,Female,None',
            'age' => 'nullable|integer',
            'message' => 'required|string',
        ]);
//dd($request);
        // Create a new love note
        LoveNote::create([
            'name' => $request->input('name') ?: 'Anonymous',
            'gender' => $request->input('gender', 'None'),
            'age' => $request->input('age'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Your Love note has been submitted successfully!');
    }

    public function generateNoteImage($noteId)
    {
        $note = LoveNote::findOrFail($noteId);

        // Load background image
        $img = Image::make(storage_path('app/public/love-note-bg.jpg'));

        // Add note text and other details
        $img->text($note->note, 150, 300, function($font) {
            $font->file(public_path('fonts/YourFont.ttf'));
            $font->size(24);
            $font->color('#000');
            $font->align('center');
        });

        $img->text("Love Notes To My Baby", 150, 50, function($font) {
            $font->file(public_path('fonts/YourFont-Bold.ttf'));
            $font->size(36);
            $font->color('#000');
            $font->align('center');
        });

        // Save or return the image
        $img->save(storage_path("app/public/love_notes/{$note->id}.jpg"));

        return response()->download(storage_path("app/public/love_notes/{$note->id}.jpg"));
    }

}
