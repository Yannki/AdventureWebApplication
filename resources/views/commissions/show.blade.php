<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul>
                <div
                    class="'inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150'">
                    COMMISSION DETAILS:
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-green-200">
                        @if ($commission->image)
                            <div class="flex float-right">
                                <img src={{ asset('images/' . $commission->image->image_path) }}
                                    class="object-scale-down h-20 w-20" alt="{{ $commission->name }} tavern">
                            </div>
                        @endif
                        <li>Name: {{ $commission->name }}</li>
                        <li>Difficulty: {{ $commission->difficulty }}</li>
                        <li>Reward: {{ $commission->reward }}</li>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul>
                <div
                    class="'inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150'">
                    COMMISSION AVAILABLE IN TAVERNS:
                </div>
                @foreach ($commission->taverns as $tavern)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-green-200 hover:bg-green-50">
                            <li>
                                <a href="/taverns/{{ $tavern->id }}"
                                    class="hover:text-indigo-800 
                                   hover:text-underline text-right h-10 p-2 md:h-auto md:p-4">
                                    <br>Name: {{ $tavern->name }}
                                    <br>Country: {{ $tavern->country }}
                                    <br>Active: {{ $tavern->active }}
                                </a>
                            </li>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
