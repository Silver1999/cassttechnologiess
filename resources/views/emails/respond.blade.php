@extends('emails.layout')
@section('content')
    <div class="thank-you-container">
        <h1>New message from {{$email}}</h1>
        <h2>Name: {{$name}}</h2>
        <h3>Message: {{$msg}}</h3>
        <h3>Phone: {{$phone}}</h3>
    </div>
@endsection

