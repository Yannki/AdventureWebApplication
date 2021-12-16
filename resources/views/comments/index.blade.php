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

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-10">
        <a href="/taverns/create"
            class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
            COMMENTS:
        </a>
    </div>
    <div class="py-1">
        <ul>  
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div id="comments">
                    <li v-for="comment in comments">
                    <span class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Adventurer @{{comment.adventurer.name}}
                    </span>
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-green-200">
                                @{{ comment . text }}
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </ul>
    </div>

    <script>
        var app = new Vue({
            el: "#comments",
            data: {
                comments: [],
            },
            mounted() {
                axios.get("{{ route('api.comments.index', ['id' => $commission->id]) }}")
                    .then(response => {
                        this.comments = response.data;
                    })
                    .catch(response => {
                        console.log(response);
                    })
            },
        });
    </script>
</x-app-layout>
