<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::query()
            ->orderBy('is_read')
            ->latest()
            ->paginate(15);

        $selectedMessageId = request()->integer('message');
        $selectedMessage = $messages->firstWhere('id', $selectedMessageId) ?? $messages->first();

        return view('admin.messages.index', compact('messages', 'selectedMessage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_complet' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'nullable|string|max:20',
            'service' => 'required|string',
            'message' => 'required|string',
        ]);

        Message::create([
            'nom_complet' => $request->nom_complet,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'type_service' => $request->service,
            'message' => $request->message,
            'is_read' => false,
        ]);

        return back()->with('success', 'Message envoyé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $message->delete();

        return back()->with('success', 'Message supprimé.');
    }

    public function toggleRead(Message $message)
    {
        $message->update([
            'is_read' => ! $message->is_read,
        ]);

        return back()->with('success', 'Statut du message mis à jour.');
    }
}
