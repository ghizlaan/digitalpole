<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact; // Assurez-vous que le chemin vers votre modèle Contact est correct

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomc' => 'required|string',
            'phonec' => 'required|string',
            'emailc' => 'required|email',
            'message' => 'required|string',
        ]);
    
        contact::create([
            'nomc' => $request->nomc,
            'phonec' => $request->phonec,
            'emailc' => $request->emailc,
            'message' => $request->message,
        ]);
    
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès!');
    }
}
