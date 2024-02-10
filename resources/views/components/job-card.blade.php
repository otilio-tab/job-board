<x-card class="mb-4">
    <div class="mb-4 flex justify-between">
        <h2 class="text-lg font-medium">{{ $job->title }}</h2>
        <p class="text-slate-500">${{ number_format($job->salary) }}</p>
    </div>
    <div class="mb-4 flex items-center justify-between text-sm text-slate-500">
        <div class="flex space-x-4">
            <p>{{ $job->employer->company_name }}</p>
            <p>{{ $job->location }}</p>
        </div>
        <div class="flex space-x-1 text-sm">
            <x-tag>
                <a href="{{ route('jobs.index', ['experience' => $job->experience]) }}">
                    {{ Str::ucfirst($job->experience) }}
                </a>
            </x-tag>
            <x-tag>
                <a href="{{ route('jobs.index', ['category' => $job->category]) }}">
                    {{ $job->category }}
                </a>
            </x-tag>
        </div>
    </div>
    {{ $slot }}
</x-card>