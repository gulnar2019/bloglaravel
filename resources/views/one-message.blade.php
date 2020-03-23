@extends('layouts/app')


@section('title-block')
{{$data->subject}}
@endsection
@section('content')

<h1>{{$data->subject}}</h1>
<div class="alert alert-info">
<h3>{{$data->name}}</h3>
<h3>{{$data->subject}}</h3>
<h3>{{$data->message}}</h3>
<h3>{{$data->email}}</h3>
<small>{{$data->created_at}}</small>
<a href="{{route('contact-update',$data->id)}}" >
<button class="btn btn-success">edit</button></a>
<a href="{{route('contact-delete',$data->id)}}" >
<button class="btn btn-alert">delete</button></a>
</div>

@endsection
