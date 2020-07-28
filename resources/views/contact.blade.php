@extends('layouts.layout')

@section('page')
<div class="content">
    <div class="title m-b-md">
        <form class="contact-form">
            <div class="primary-color">Get in touch!</div>
            <input placeholder="Email" type="email" class="contact-input"/>
            <input placeholder="Subject" type="text" class="contact-input"/>
            <textarea placeholder="Message" type="textarea" class="contact-message"></textarea>
            <button class="start-hacking-button">SEND</button>
        </form>
    </div>
</div>
@endsection