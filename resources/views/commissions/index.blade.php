<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul>
                @foreach ($commissions as $commission)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-green-200 hover:bg-green-50">
                        <li>
                            <a href="/taverns/{{$commission->id}}"
                            class="hover:text-indigo-800 
                                   hover:text-underline text-right h-10 p-2 md:h-auto md:p-4">
                            <br>{{$commission->name}} 
                            <br>{{$commission->difficulty}} 
                            <br>{{$commission->reward}}
                            </a>
                        </li>
                    </div>
                </div>
                @endforeach
            </ul> 
        </div>
    </div>
</x-app-layout>
