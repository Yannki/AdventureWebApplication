<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-25 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-green-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="/commissions" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="adventurer_id" value={{ Auth::user()->adventurer->id }}>
                        <div>
                            Commission Name:<br>
                            <input type="text" name="name"
                                class="rounded-md shadow-sm border-green-300 focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50">
                        </div>

                        <div class="mt-4">
                            Difficulty:<br>
                            <input type="text" name="difficulty"
                                class="rounded-md shadow-sm border-green-300 focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50">
                        </div>

                        <div class="mt-4">
                            Reward:<br>
                            <input type="text" name="reward"
                                class="rounded-md shadow-sm border-green-300 focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50">
                        </div>

                        <div class="mt-4">
                            <input type="file" name="image"
                                class="rounded-md shadow-sm border-green-300 focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50">
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button>
                                {{ __('Create') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
