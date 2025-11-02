<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold text-gray-700">Your Projects</h3>
                    <a href="{{ route('projects.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        + New Project
                    </a>
                </div>

                @forelse(Auth::user()->projects as $project)
                    <div class="border border-gray-200 rounded p-4 mb-3 hover:shadow transition">
                        <h4 class="text-lg font-semibold text-gray-800 mb-1">{{ $project->name }}</h4>
                        <p class="text-gray-600 text-sm mb-2">{{ $project->description ?? 'No description' }}</p>
                        <a href="{{ route('projects.show', $project) }}" class="text-blue-500 hover:underline">View Tasks →</a>
                    </div>
                @empty
                    <p class="text-gray-500 text-center">You don’t have any projects yet.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
