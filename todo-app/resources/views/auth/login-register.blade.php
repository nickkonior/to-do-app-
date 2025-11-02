<div x-data="{ tab: 'login' }">
    <div class="flex justify-center mb-4 space-x-4">
        <button :class="tab === 'login' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                @click="tab = 'login'" class="px-3 py-2 font-medium">Login</button>
        <button :class="tab === 'register' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                @click="tab = 'register'" class="px-3 py-2 font-medium">Register</button>
    </div>

    <!-- Login Form -->
    <form x-show="tab === 'login'" method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf
        <input name="email" type="email" class="w-full border rounded px-3 py-2" placeholder="Email" required>
        <input name="password" type="password" class="w-full border rounded px-3 py-2" placeholder="Password" required>
        <button type="submit" class="w-full bg-blue-600 text-white px-3 py-2 rounded hover:bg-blue-700">Login</button>
    </form>

    <!-- Register Form -->
    <form x-show="tab === 'register'" method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf
        <input name="name" type="text" class="w-full border rounded px-3 py-2" placeholder="Name" required>
        <input name="email" type="email" class="w-full border rounded px-3 py-2" placeholder="Email" required>
        <input name="password" type="password" class="w-full border rounded px-3 py-2" placeholder="Password" required>
        <input name="password_confirmation" type="password" class="w-full border rounded px-3 py-2" placeholder="Confirm Password" required>
        <button type="submit" class="w-full bg-green-600 text-white px-3 py-2 rounded hover:bg-green-700">Register</button>
    </form>
</div>
