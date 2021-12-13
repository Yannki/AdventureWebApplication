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

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-green-200">
                    <ul>
                    @foreach ($adventurers as $adventurer)
                        <li>{{$adventurer->name}}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>