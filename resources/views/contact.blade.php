@extends('layouts/app')


@section('title-block')
Contacts
@endsection
@section('content')

<h1>contact</h1>


<form action="{{ route('contact-form') }}" method="post">
@csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" name="subject" class="form-control" id="subject" placeholder="subject">

  </div>
  <div class="form-group">
    <label for="message">Example textarea</label>
    <textarea type="text" name="message" class="form-control" id="message" rows="3" placeholder="add message"></textarea>
  </div>
   <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>

@endsection
