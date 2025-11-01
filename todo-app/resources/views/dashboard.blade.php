<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-6">Your Projects</h1>

        <a href="{{ route('projects.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ New Project</a>

        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @forelse(Auth::user()->projects as $project)
                <div class="p-4 bg-white shadow rounded hover:shadow-md transition">
                    <h2 class="text-xl font-semibold mb-2">{{ $project->name }}</h2>
                    <p class="text-gray-600 text-sm mb-3">{{ $project->description ?? 'No description' }}</p>
                    <a href="{{ route('projects.show', $project) }}" class="text-blue-500 hover:underline">View Tasks →</a>
                </div>
            @empty
                <p class="text-gray-500 mt-4">You don’t have any projects yet.</p>
            @endforelse
        </div>
    </div>
</x-app-layout>
