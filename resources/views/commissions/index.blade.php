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
                <div
                    class="'inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150'">
                    Commission: {{ $commission->name }}
                </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-green-200 hover:bg-green-50">
                            <li>
                                @if ($commission->image)
                                    <div class="float-right top-1 right-1">
                                        <img src={{ asset('images/' . $commission->image->image_path) }}
                                            class="object-scale-down h-20 w-20" alt="{{ $commission->name }} tavern">
                                    </div>
                                @endif

                                <a href="/commissions/{{ $commission->id }}"
                                    class="hover:text-indigo-800 
                                   hover:text-underline text-right h-10 p-2 md:h-auto md:p-4">
                                    <br>
                                    <br>Difficulty: {{ $commission->difficulty }}
                                    <br>Rewared: {{ $commission->reward }} coins
                                </a>
                            </li>

                            <div class="flex float-right justify-self-center">
                                <form method="POST" action="/commissions/{{ $commission->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-red-600 hover:text-red-800 
                                            hover:text-underline text-center h-10 p-2 md:h-auto md:p-4">
                                        Delete
                                    </button>
                                </form>

                                <a href="/commissions/{{ $commission->id }}/edit"
                                    class="hover:text-indigo-800 
                                    hover:text-underline text-center h-10 p-2 md:h-auto md:p-4">
                                    Edit
                                </a>
                            </div>

                            <div class="text-xs underline text-opacity-5">
                                Posted by adventurer {{ $commission->adventurer->name }}
                            </div>

                        </div>
                    </div>
                @endforeach
            </ul>
            {{ $commissions->links() }}
        </div>
    </div>

    {{-- <script>
        var app = new Vue({
            el: "#root",
            data: {
                enclosures: [],
            },
            mounted() {
                axios.get("{{ route('api.enclosures.index') }}")
                    .then(response => {
                        this.enclosures = response.data;
                    })
                    .catch(response => {
                        console.log(response);
                })
            }
        });
    </script> --}}

</x-app-layout>
