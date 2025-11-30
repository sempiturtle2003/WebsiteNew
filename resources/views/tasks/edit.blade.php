<x-layout :hideLinks="true">
    <div class="min-h-screen flex justify-center items-center px-4 py-10 bg-gradient-to-br from-indigo-100 via-sky-200 to-emerald-200">

        <div class="bg-white p-8 shadow-xl rounded-2xl w-full max-w-md">

            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center drop-shadow">
                Edit Task
            </h2>

            <!-- Form -->
            <form action="{{ route('tasks.update', $task) }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

                <!-- Task Name -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">
                        Task Name
                    </label>
                    <input type="text" name="name" required
                           value="{{ $task->name }}"
                           class="w-full rounded-lg border-gray-300 shadow-sm
                                  focus:border-yellow-500 focus:ring-yellow-500
                                  px-4 py-3 text-gray-800">
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">
                        Description
                    </label>
                    <textarea name="description" rows="4"
                              class="w-full rounded-lg border-gray-300 shadow-sm
                                     focus:border-yellow-500 focus:ring-yellow-500
                                     px-4 py-3 text-gray-800 resize-none">{{ $task->description }}</textarea>
                </div>

                <!-- Update Button -->
                <button type="submit"
                        class="w-full bg-yellow-600 text-white py-3 rounded-lg text-lg font-medium
                               hover:bg-yellow-700 shadow-md hover:shadow-lg transition duration-200">
                    Update Task
                </button>

            </form>

        </div>

    </div>
</x-layout>
