<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\messages\ReplyMail;
use App\Mail\ReplyContact;
use App\models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    protected $model;

    public function __construct(Message $model)
    {
        $this->model = $model;
    }

    public function index(){
        $messages = $this->model;
        $messages = $this->filterUnreaded($messages);
        $messages = $messages->orderBy('id', 'desc')->paginate(30);
        return view('backend.messages.index', compact('messages'));
    }

    public function destroy($id){
        // delete a message
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->route('messages.index');
    }

    public function show($id){
        // display a message with reply form
        $message = Message::findOrFail($id);
        $user = auth()->user();
        $message->readed = 1;
        $message->save();
        return view('backend.messages.show', compact('message', 'user'));
    }

    public function reply($id, ReplyMail $request){
        // send the reply to the user
        $message = Message::findOrFail($id);
        Mail::send(new ReplyContact($message, $request->message, $request->email, $request->name));
        return redirect()->route('admin.showMessage', ['id' => $message->id])->with('alert', 'You Reply has been sent successfully');
    }


    protected function filterUnreaded($rows){
        if(request()->has('unreaded') && request()->get('unreaded') == 'true'){
            $rows = $rows->where('readed', 0);
        }
        return $rows;
    }
}
