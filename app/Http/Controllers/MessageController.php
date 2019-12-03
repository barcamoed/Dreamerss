<?php

namespace App\Http\Controllers;

use App\Company;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pusher\Laravel\Facades\Pusher;
class MessageController extends Controller
{
    public function saveMessage(Request $request)
    {
        $data = $request->all();
        $newMessage = new Message();
        $newMessage->message = $data['message'];
        $user_id = Company::find($data['company_id']);
        $newMessage->sender_id = $user_id->user_id;
        $newMessage->receiver_id = 48;
        $newMessage->save();

        Pusher::trigger('chat_chanel','chat_saved',['message'=> $newMessage]);

        return response()->json(compact('newMessage'));
    }

    public function getUserMessagesById(Request $request)
    {
        $sender_id = $request->input('sender_id');
        $receiver_id = 48;
        $messages = Message::whereIn('sender_id',[$sender_id,$receiver_id])
        ->whereIn('receiver_id',[$sender_id,$receiver_id])
            ->orderBy('created_at','asc')
            ->get();

        return response()->json(compact('messages'));
    }

}
