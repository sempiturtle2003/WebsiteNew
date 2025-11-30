<x-layout :hideLinks="true">
    <div class="min-h-screen bg-gradient-to-br from-indigo-100 via-sky-200 to-emerald-200 py-12">

        <div class="max-w-6xl mx-auto px-6">

            <!-- Dashboard Header -->
            <div class="text-center mb-10">
                <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 drop-shadow">
                    Dashboard
                </h1>
                <p class="text-gray-700 text-lg mt-2">
                    Welcome back! Here’s an overview of your activity.
                </p>
            </div>

            <!-- Stats Card -->
            <div class="bg-white shadow-lg rounded-xl p-6 sm:p-8 mb-12 text-center">
                <p class="text-xl text-gray-700">Total Registered Users</p>
                <p class="text-5xl font-extrabold text-indigo-600 mt-2">
                    {{ $userCount }}
                </p>
            </div>

            <!-- Task Management Section -->
            <div class="mb-16">

                <!-- Section Title -->
                <h2 class="text-2xl sm:text-3xl font-semibold text-gray-800 mb-6">
                    Task Management
                </h2>

                <!-- Action Buttons -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">

                    <!-- Left Buttons -->
                    <div class="flex flex-wrap gap-4">

                        <!-- Add Task -->
                        <a href="{{ route('tasks.create') }}"
                           class="px-5 py-3 bg-indigo-600 text-white rounded-lg
                                  font-medium shadow-md hover:shadow-lg
                                  hover:bg-indigo-700 transition duration-200">
                            + Add New Task
                        </a>

                        <!-- Show Tasks -->
                        <a href="{{ route('tasks.index') }}"
                           class="px-5 py-3 bg-blue-600 text-white rounded-lg
                                  font-medium shadow-md hover:shadow-lg
                                  hover:bg-blue-700 transition duration-200">
                            View All Tasks
                        </a>
                    </div>

                    <!-- Logout Button -->
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="px-6 py-3 bg-red-600 text-white rounded-lg font-medium
                                   shadow-md hover:shadow-lg hover:bg-red-700
                                   transition duration-200">
                            Logout
                        </button>
                    </form>
                </div>

            </div>

        </div>

    </div>
</x-layout>
