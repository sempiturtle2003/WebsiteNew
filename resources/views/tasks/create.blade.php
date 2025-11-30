<x-layout :hideLinks="true">
    <div class="min-h-screen flex justify-center items-center px-4 py-10 bg-gradient-to-br from-indigo-100 via-sky-200 to-emerald-200">

        <div class="bg-white p-8 shadow-xl rounded-2xl w-full max-w-md">

            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">
                Create Task
            </h2>

            <!-- Form -->
            <form action="{{ route('tasks.store') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Task Name -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">
                        Task Name
                    </label>
                    <input type="text" name="name" required
                        class="w-full rounded-lg border-gray-300 shadow-sm
                               focus:border-indigo-500 focus:ring-indigo-500
                               px-4 py-3 text-gray-800">
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">
                        Description
                    </label>
                    <textarea name="description" rows="4"
                        class="w-full rounded-lg border-gray-300 shadow-sm
                               focus:border-indigo-500 focus:ring-indigo-500
                               px-4 py-3 text-gray-800 resize-none"></textarea>
                </div>

                <!-- Submit Button -->
                <button
                    class="w-full bg-indigo-600 text-white py-3 rounded-lg text-lg font-medium
                           hover:bg-indigo-700 shadow-md hover:shadow-lg transition duration-200">
                    Create Task
                </button>
            </form>

        </div>

    </div>
</x-layout>
