<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul>
                <div
                    class="'inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150'">
                    TAVERN DETAILS:
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-green-200">

                        <li>Name: {{ $tavern->name }}</li>
                        <li>Country: {{ $tavern->country }}</li>
                        <li>Active: {{ $tavern->active }}</li>
                        @if ($tavern->image)
                            <img src={{ asset('images/' . $tavern->image->image_path) }} alt="{{ $tavern->name }} tavern">
                        @endif

                    </div>
                </div>
            </ul>
        </div>
    </div>
</x-app-layout>
