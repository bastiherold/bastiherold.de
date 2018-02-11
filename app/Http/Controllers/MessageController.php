<?php

namespace App\Http\Controllers;

use Mail;
use App\Message;
use App\Mail\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::orderBy('isRead', 'asc')
                        ->orderBy('created_at', 'desc')
                        ->orderBy('readTimestamp', 'desc')
                        ->get();

        return view('admin.messages.index', [
            'messages' => $messages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'senderName' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'body' => 'required|min:10',
        ]);

        $message = new Message($request->all());
        $message->save();

        session()->flash('status', 'Message was send successfully');
        Mail::to('bastiherold@bastiherold.de')->send(new Contact());

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        if ( ! $message->isRead){
            $message->readNow();
        }

        return view('admin.messages.show', [
            'message' => $message
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
