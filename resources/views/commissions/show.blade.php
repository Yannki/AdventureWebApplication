<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-green-200">
                    <ul>
                        <li>Name: {{ $commission->name }}</li>
                        <li>Difficulty: {{ $commission->difficulty }}</li>
                        <li>Reward: {{ $commission->reward }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul>
                @foreach ($commission->taverns as $tavern)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-green-200 hover:bg-green-50">
                            <li>
                                <a href="/taverns/{{ $tavern->id }}"
                                    class="hover:text-indigo-800 
                                   hover:text-underline text-right h-10 p-2 md:h-auto md:p-4">
                                    <br>{{ $tavern->name }}
                                    <br>{{ $tavern->country }}
                                    <br>{{ $tavern->active }}
                                    @if ($commission->image)
                                        <img src={{asset('images/' . $commission->image->image_path ) }} alt="{{ $commission->name }} tavern">
                                    @endif
                                </a>
                            </li>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
