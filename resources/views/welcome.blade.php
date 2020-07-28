@extends('layouts.layout')

@section('page')
    <div class="homepage">
        <div class="top-section">
            <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>
            Hackour CTF Homepage
        </div>
        <div class="reasons-to-join">
            <div class="reasons-title">Why you should join us</div> 
            <div class="reasons-grid">
                <div class="reasons-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio minima sit ullam in necessitatibus iure, labore ex. Voluptatum, delectus dolor quia nam culpa cupiditate, consectetur ad, sed quae non omnis.</div>
                <div class="reasons-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga at, animi quod beatae reiciendis magni sunt adipisci omnis repudiandae pariatur nobis, sit deserunt! Iste velit excepturi voluptas expedita doloremque laborum?</div>
                <div class="reasons-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dicta voluptatibus vel error exercitationem fugiat consectetur, repellendus quia possimus recusandae saepe repudiandae amet officiis ratione? Itaque laudantium sequi error at.</div>
                <div class="reasons-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et quidem tempora quasi earum iste voluptatum magni, fugiat error culpa. Laborum animi officia architecto repudiandae voluptatum eius enim rem at labore!</div>
            </div>
            <a href="{{ route('register') }}" class="join-now-button">Join Now</a>
        </div>
        <div class="join-section">
            Join now
        </div>
    </div>
@endsection