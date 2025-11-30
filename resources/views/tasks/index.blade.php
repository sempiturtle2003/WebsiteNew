<x-layout :hideLinks="true">
    <div class="min-h-screen bg-gradient-to-br from-indigo-100 via-sky-200 to-emerald-200 py-12 px-4">

        <!-- Page Title -->
        <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-10 drop-shadow">
            Task List
        </h1>

        <!-- Search + Actions -->
        <div class="max-w-5xl mx-auto mb-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">

                <!-- Search Bar -->
                <form method="GET" action="{{ route('tasks.index') }}"
                      class="flex items-center w-full md:w-auto gap-3">
                    <input
                        type="text"
                        name="search"
                        placeholder="Search tasks..."
                        value="{{ $search ?? '' }}"
                        class="w-full md:w-72 px-4 py-2.5 bg-white border rounded-xl shadow-sm
                               focus:outline-none focus:ring-2 focus:ring-indigo-400 text-gray-800"
                    >
                    <button
                        type="submit"
                        class="px-4 py-2.5 bg-indigo-600 text-white rounded-xl font-medium
                               shadow-md hover:bg-indigo-700 hover:shadow-lg transition-all duration-200"
                    >
                        Search
                    </button>
                </form>

                <!-- Action Buttons -->
                <div class="flex gap-3">
                    <a href="{{ route('tasks.create') }}"
                       class="px-4 py-2.5 bg-blue-600 text-white rounded-xl font-medium
                              shadow-md hover:shadow-lg hover:bg-blue-700 transition">
                        + Add Task
                    </a>

                    <a href="{{ route('dashboard') }}"
                       class="px-4 py-2.5 bg-gray-700 text-white rounded-xl font-medium
                              shadow-md hover:shadow-lg hover:bg-gray-800 transition">
                        Back
                    </a>
                </div>
            </div>
        </div>

        <!-- Table Container -->
        <div class="max-w-5xl mx-auto">
            <div class="overflow-x-auto bg-white shadow-xl rounded-2xl">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">ID</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Task Name</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Description</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-100">
                        @forelse ($tasks as $task)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $task->id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">{{ $task->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $task->description }}</td>

                                <td class="px-6 py-4 text-sm flex gap-4 items-center">

                                    <!-- Edit -->
                                    <a href="{{ route('tasks.edit', $task) }}"
                                       class="text-yellow-600 font-medium hover:underline">
                                        Edit
                                    </a>

                                    <!-- Delete -->
                                    <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                                          class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="text-red-600 font-medium hover:underline">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4"
                                    class="text-center py-8 text-gray-500 italic text-lg">
                                    No tasks found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-layout>
