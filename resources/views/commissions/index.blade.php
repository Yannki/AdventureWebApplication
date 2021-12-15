<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-10">
        <a href="/commissions/create"
            class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
            New Commission
        </a>
    </div>
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul>
                @foreach ($commissions as $commission)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-green-200 hover:bg-green-50">
                            <li>
                                <a href="/commissions/{{ $commission->id }}"
                                    class="hover:text-indigo-800 
                                   hover:text-underline text-right h-10 p-2 md:h-auto md:p-4">
                                    <br>{{ $commission->name }}
                                    <br>{{ $commission->difficulty }}
                                    <br>{{ $commission->reward }}
                                </a>
                            </li>
                            <div class="text-xs underline text-opacity-5">
                                Posted by {{ $commission->adventurer->name }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </ul>
            {{ $commissions->links() }}
        </div>
    </div>
</x-app-layout>
