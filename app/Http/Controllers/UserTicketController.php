<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Ticket;
use Illuminate\Mail\Mailable;
use Mail;
use Symfony\Component\Console\Input\Input as InputInput;

class UserTicketController extends Controller
{
   public function get_ticket_data(Request $request){
       $data = Ticket::where('ticket_num',$request->nub)->first();
       return $data;
   }

   public function store_data(Request $request){
    //  try{
        $this->validate(request(), [

            'name'           => 'required',
            'discription'    => 'required',
            'email'          => 'required|email',
            'mobile'         => 'required|max:10',

            ]);

            $latest = Ticket::latest()->first();
            if (! $latest) {
              $ticnum = 'Tic/000001';
            }else{
              $string = preg_replace("/[^0-9\.]/", '', $latest->ticket_num);
              $ticnum = 'Tic/' . sprintf('%06d', $string+1);

          }

        $ticket = new Ticket;

        $ticket->full_name   = $request->name;
        $ticket->message     = $request->discription;
        $ticket->email       = $request->email;
        $ticket->mobile      = $request->mobile;
        $ticket->ticket_num  = $ticnum;
        $ticket->status      = 0;


        $ticket->save();

        $data = [
            'subject' => $request->name,
            'email' => $request->email,
            'fromemail' => 'task123test123@gmail.com',
            'content' => $ticket->ticket_num
          ];

          Mail::send('emails.mail2', $data, function($message) use ($data) {
            $message->to($data['email'])
            ->from('task123test123@gmail.com','Laravel')
            ->subject($data['subject']);
          });


        $notification = array(
            'message' => 'Ticket aded Successfully!',
             'alert-type' => 'Success'
         );

         return redirect('/')->with($notification);

    // }catch(\Exception $e){

    // }
}


}
