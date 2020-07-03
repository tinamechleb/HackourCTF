@extends('layouts.layout')

@section('page')
<div class="content">
    <div class="title m-b-md">
        <form action="{{ route('flag.submit') }}" method="POST" class="submitflag-card">
        {{ csrf_field() }}
            <label for="flag" class="col-md-4 col-form-label text-md-right submitflag-label">{{ __('Submit your $FLAG$') }}</label>

            <div class="col-md-6 submitflag-grid">
                <input id="flag" type="text" class="submitflag-input" name="flag" placeholder="$FLAG$" required>
                
                @error('flag')
                    <span class="flag-invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" class="submitflag-button">
                    {{ __('Submit') }}
                </button>
            </div> 
        </form>
    </div>
</div>
@endsection