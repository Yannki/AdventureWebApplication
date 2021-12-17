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
    <div id="comments">
        <div class="py-1">
            <ul>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    <li v-for="comment in comments" :key="comment.id">
                        <span
                            class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Adventurer @{{ comment . adventurer . name }}
                        </span>
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-green-200">
                                @{{ comment . text }}
                            </div>
                        </div>
                        <button @click="deleteComment(comment.id)"
                            class="text-red-600 hover:text-red-800 
                                            hover:text-underline text-center h-10 p-2 md:h-auto md:p-4">
                            Delete
                        </button>
                    </li>

                </div>
            </ul>
        </div>

        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <input type="text" class="w-full" v-model="newComment">
                <button @click="createComment"
                    class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                    submit
                    <button>
            </div>
        </div>
    </div>

    <script>
        var app = new Vue({
            el: "#comments",
            data: {
                comments: [],
                newComment: '',
                newCommentCommission: "{{ $commission->id }}",
                newCommentAdventurer: "{{ Auth::user()->adventurer->id }}",
            },

            methods: {
                createComment: function() {
                    axios.post("{{ route('api.comments.store', ['id' => $commission->id]) }}", {
                            text: this.newComment,
                            commission_id: this.newCommentCommission,
                            adventurer_id: this.newCommentAdventurer,
                        })
                        .then(response => {
                            this.comments.push(response.data);
                            this.newComment = '';
                            location.reload();
                        })
                        .catch(response => {
                            console.log(response);
                        })
                },

                deleteComment: function(id) {
                    axios.post("{{ route('api.comments.destroy', ['id' => $commission->id]) }}",{
                        comment_id: id,
                    })
                        .then(response => {
                            this.comments.splice(this.comments.indexOf(id), 1);
                            location.reload();
                        })
                        .catch(response => {
                            console.log(response);
                        })
                },
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
