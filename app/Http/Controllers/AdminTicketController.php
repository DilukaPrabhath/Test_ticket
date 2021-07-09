<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ticket;
use Mail;

class AdminTicketController extends Controller
{
    public function index(){
        $data = Ticket::all();
        return view('backend.admin.ticket.index',compact('data'));
    }

    public function view($id){
        $data = Ticket::find($id);
        if($data->status != 1){
            $data->status = 3;
        }
        $data->save();
        return view('backend.admin.ticket.view',compact('data'));
    }



    public function update(Request $request,$id){

            $this->validate(request(), [
            'reply'  => 'required',
            ]);

            $ticket = Ticket::find($id);

            $ticket->reply   = $request->reply;
            $ticket->status  = 1;
            $ticket->save();

            $data = [
                'subject' => $request->name,
                'email' => $request->email,
                'fromemail' => 'task123test123@gmail.com',
                'content' => $request->reply,
                'number'  => $ticket->ticket_num
              ];

              Mail::send('emails.mail', $data, function($message) use ($data) {
                $message->to($data['email'])
                ->from('task123test123@gmail.com','test mail')
                ->subject($data['subject']);
              });


            $notification = array(
                'message' => 'Ticket reply Sent Successfully!',
                 'alert-type' => 'Success'
             );

             return redirect('admin/ticket')->with($notification);

    }
}
