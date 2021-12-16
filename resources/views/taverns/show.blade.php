<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-green-200">
                    <ul>
                    <li>Name: {{$tavern->name}}</li>
                    <li>Country: {{$tavern->country}}</li>
                    <li>Active: {{$tavern->active}}</li>
                    @if($tavern->image)
                    <img src={{asset("images/".$tavern->image->image_path)}} alt="{{$tavern->name}} tavern">
                    @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>