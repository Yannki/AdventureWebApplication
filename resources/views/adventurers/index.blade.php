@extends('layouts.app')

@section('title','Adventurer Board')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-4">
        <ul>
        @foreach ($adventurers as $adventurer)
            <li>{{$adventurer->name}}</li>
        @endforeach
        </ul>
    </div>
</div>
</div>
@endsection