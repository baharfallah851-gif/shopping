<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Ticket;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(Ticket $ticket)
    {
        $messages = Message::all();
        $types = Type::all();
        $categories = Category::all();
        return view('message.index', compact('messages', 'ticket', 'types', 'categories'));
    }

    public function save(Request $request)
    {
        Message::create([
            'ticket_id' => $request->get('ticket_id'),
            'content' => $request->get('content'),
            'user_id' => Auth::id(),
            'customer_id' => $request->get('customer_id'),
        ]);
        return redirect(route('ticket.index'));
    }

    public function delete(Message $message)
    {
        $message->delete();
        return [
            'success' => true,
        ];
    }
}
