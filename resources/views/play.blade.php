@extends('layouts.layout')

@section('page')
<div class="content play-page">
    <div class="play-game-title">
        <div class="play-grid">
            <div class="play-game-back">
                <a target="_blank" href="/play/game1">Game 1</a>
                <div>Flags: 1</div>
            </div>
            <div class="play-game-back" target="_blank" href="/play/game2">
                <a target="_blank" href="/play/game2">Game 2</a>
                <div>Flags: 2</div>
            </div>
            <div class="play-game-back" target="_blank" href="/play/game2">
                <a target="_blank" href="/play/game2">Game 3</a>
                <div>Flags: 4</div>
            </div>
            <div class="play-game-back" target="_blank" href="/play/game2">
                <a target="_blank" href="/play/game2">Game 4</a>
                <div>Flags: 3</div>
            </div>
            <div class="play-game-back" target="_blank" href="/play/game2">
                <a target="_blank" href="/play/game2">Game 5</a>
                <div>Flags: 4</div>
            </div>
        </div>
    </div>
</div>
@endsection
