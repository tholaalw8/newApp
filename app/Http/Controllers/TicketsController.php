<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketFormRequest;
use App\Ticket;

class TicketsController extends Controller
{
    public function create(){
        return view('tickets.create');
    }


    public function store (TicketFormRequest $request){

        $slug = uniqid();
        $ticket = new Ticket(array(
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' =>$slug,
            'user_id' => 3,
        ));

      $ticket->save();


      return redirect('/contact')->with('status','Your ticket has been created! Its unique id id '.$slug);

    }





}
