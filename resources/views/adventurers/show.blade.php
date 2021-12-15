<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-green-200">
                    <ul>
                    <li>Name: {{$adventurer->name}}</li>
                    <li>Age: {{$adventurer->age}}</li>
                    <li>Rank: {{$adventurer->rank}}</li>
                    <li>Origin: {{$adventurer->origin}}</li>
                    <li>Tavern: {{$adventurer->tavern->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>