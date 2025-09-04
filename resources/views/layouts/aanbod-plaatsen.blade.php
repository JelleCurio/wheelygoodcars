<!-- resources/views/layouts/aanbod-plaatsen.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Aanbod Plaatsen</h1>

<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0"
    aria-valuemax="100">
    <div class="progress-bar" style="width: 50%"></div>
</div>

<!-- Form to submit data -->
<form action="{{ route('aanbod.submit') }}" method="POST">
    @csrf
    <input type="text" name="license_plate" placeholder="Kentekenplaat" required>
    <button type="submit">Submit</button>
</form>
@endsection