@extends('layouts/app')


@section('title-block')
All mesages
@endsection
@section('content')

<h1>All Mesages</h1>
 @foreach($data as $el)
<div class="alert alert-info">
<h3>{{$el->subject}}</h3>
<h3>{{$el->created_at}}</h3>
<a href="{{ route('contact-data-one', $el->id)}}" ><button class="btn btn-success">more</button></a>
</div>
@endforeach
@endsection
