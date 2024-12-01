<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>
        Salary: {{ $job['salary'] }}$ per year.
    </p>
    <div class="text-bold underline">
    <a href="/jobs">Back to Job List</a>
</div>
</x-layout>
