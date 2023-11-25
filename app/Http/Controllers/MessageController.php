<?php

namespace App\Http\Controllers;

// In MessageController.php

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('admin.messages.index', compact('messages'));
    }

    public function create()
    {
        return view('admin.messages.create');
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'purpose' => 'required',
        ]);

        // Create Message
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'purpose' => $request->purpose,
        ]);

        return redirect()->route('messages.index')->with('success', 'Message created successfully.');
    }

    public function storeGuest(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'purpose' => 'required',
        ]);

        // Create Message
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'purpose' => $request->purpose,
        ]);

        return redirect()->back()->with('success', 'Message created successfully.');
    }

    public function show(Message $message)
    {
        return view('admin.messages.show', compact('message'));
    }

    public function edit(Message $message)
    {
        return view('admin.messages.edit', compact('message'));
    }

    public function update(Request $request, Message $message)
    {
        // Validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'purpose' => 'required',
        ]);

        // Update Message
        $message->update([
            'name' => $request->name,
            'email' => $request->email,
            'purpose' => $request->purpose,
        ]);

        return redirect()->route('messages.index')->with('success', 'Message updated successfully.');
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('messages.index')->with('success', 'Message deleted successfully.');
    }
}
