<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul>
                @foreach ($taverns as $tavern)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-green-200 hover:bg-green-50">
                        <li>
                            <div class="flex float-right">
                                <form method="POST" action="/taverns/{{$tavern->id}}">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" 
                                            class="text-red-600 hover:text-red-800 
                                            hover:text-underline text-center h-10 p-2 md:h-auto md:p-4">
                                        Delete
                                    </button>
                                </form>

                                <a href="/taverns/{{$tavern->id}}/edit"
                                    class="hover:text-indigo-800 
                                    hover:text-underline text-center h-10 p-2 md:h-auto md:p-4">
                                    Edit
                                </a>
                            </div>
                            <a href="/taverns/{{$tavern->id}}"
                            class="hover:text-indigo-800 
                                    hover:text-underline text-center h-10 p-2 md:h-auto md:p-4">
                            {{$tavern->name}}
                            </a>
                        </li>
                    </div>
                </div>
                @endforeach
            </ul> 
        </div>
    </div>
</x-app-layout>