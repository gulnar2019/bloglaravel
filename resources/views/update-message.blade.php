@extends('layouts/app')


@section('title-block')
Update
@endsection
@section('content')

<h1>contact</h1>


<form action="{{ route('contact-update-submit',$data->id) }}" method="post">
@csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{$data->name}}" class="form-control" id="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" value="{{$data->email}}" class="form-control" id="email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" name="subject" value="{{$data->subject}}" class="form-control" id="subject" placeholder="subject">

  </div>
  <div class="form-group">
    <label for="message">Example textarea</label>
    <textarea type="text" name="message" class="form-control" id="message"
     rows="3" placeholder="add message">{{$data->message}}</textarea>
  </div>
   <button type="submit" class="btn btn-primary mb-2">save</button>
</form>

@endsection
