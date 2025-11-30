<x-layout :hideLinks="true">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">

            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">
                Create an Account
            </h2>

            <!-- Form -->
            <form action="{{ url('register') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Full Name -->
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">
                        Full Name
                    </label>
                    <input type="text" name="name" id="name" required
                        class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500
                               shadow-sm px-3 h-11 text-gray-800">
                </div>

                <!-- Age -->
                <div>
                    <label for="age" class="block text-sm font-semibold text-gray-700 mb-1">
                        Age
                    </label>
                    <input type="number" name="age" id="age" min="1" required
                        class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500
                               shadow-sm px-3 h-11 text-gray-800">
                </div>

                <!-- Gender -->
                <div>
                    <label for="gender" class="block text-sm font-semibold text-gray-700 mb-1">
                        Gender
                    </label>
                    <select name="gender" id="gender" required
                        class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500
                               shadow-sm px-3 h-11 text-gray-800 bg-white">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">
                        Email Address
                    </label>
                    <input type="email" name="email" id="email" required
                        class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500
                               shadow-sm px-3 h-11 text-gray-800">
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-1">
                        Password
                    </label>
                    <input type="password" name="password" id="password" required
                        class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500
                               shadow-sm px-3 h-11 text-gray-800">
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white py-3 rounded-lg text-lg
                               hover:bg-indigo-700 transition-all duration-200 shadow
                               hover:shadow-lg">
                        Register
                    </button>
                </div>
            </form>

            <!-- Already Registered? -->
            <p class="mt-6 text-center text-sm text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}" class="text-indigo-600 font-semibold hover:underline">
                    Login here
                </a>
            </p>

        </div>
    </div>
</x-layout>
