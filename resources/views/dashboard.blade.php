<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-green-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-green-200">
                    <ul>
                    <li>Name: {{Auth::user()->adventurer->name}}</li>
                    <li>Age: {{Auth::user()->adventurer->age}}</li>
                    <li>Rank: {{Auth::user()->adventurer->rank}}</li>
                    <li>Origin: {{Auth::user()->adventurer->origin}}</li>
                    <li>Tavern: {{Auth::user()->adventurer->tavern->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
