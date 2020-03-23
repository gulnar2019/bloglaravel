<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;



class ContactController extends Controller
{
public function submit(ContactRequest $req){

$contact = new Contact();
$contact -> name = $req->input('name');
$contact -> email = $req->input('email');
$contact -> subject = $req->input('subject');
$contact -> message = $req->input('message');

$contact-> save();
return redirect()->route('home')->with('success', 'mesaj gonderildi');
  /*
  $validation = $req->validate([
    'subject' => 'required|min:5|max:50',
    'message' =>'required|min:5|max:200'
  ]);
  */
}


public function updateMessageSubmit($id, ContactRequest $req){

$contact = Contact::find($id);
$contact -> name = $req->input('name');
$contact -> email = $req->input('email');
$contact -> subject = $req->input('subject');
$contact -> message = $req->input('message');

$contact-> save();
return redirect()->route('contact-data-one', $id)->with('success', 'mesaj deyishildi');

}


public function deleteMessage($id){

$contact = Contact::find($id)->delete();

return redirect()->route('contact-data')->with('success', 'mesaj silindi');
}
public function allData(){
  $contact = new Contact;
//dd($contact->all());
//return view('messagesall', ['data'=> Contact::all()]);
//return view('messagesall', ['data'=>[$contact->find(2)]]);
//return view('messagesall', ['data'=>[$contact->inRandomOrder()->first()]]);
//return view('messagesall', ['data'=>$contact->inRandomOrder()->get()]);
//return view('messagesall', ['data'=>$contact->OrderBy('id', 'asc')->get()]);
//return view('messagesall', ['data'=>$contact->OrderBy('id', 'asc')->take(2)->get()]);
//return view('messagesall', ['data'=>$contact->OrderBy('id', 'asc')->skip(1)->take(1)->get()]);
//return view('messagesall', ['data'=> $contact->where('subject', '=', 'sub')->get()]);
return view('messagesall', ['data'=> $contact->all()]);
}

public function ShowOneMessage($id){
  $contact = new Contact;
return view('one-message', ['data'=> $contact->find($id)]);
}

public function updateMessage($id){
  $contact = new Contact;
return view('update-message',
['data'=> $contact->find($id)]);
}

    //
}


/*
public function submit(Request $req){
  $validation = $req->validate([
    'subject' => 'required|min:5|max:50',
    'message' =>'required|min:5|max:200'
  ]);
}
