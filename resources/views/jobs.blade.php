<x-layout>
    <x-slot:heading>
        Job Titles
    </x-slot:heading>

    <div class="max-w-lg mx-auto shadow-md rounded-lg p-6">
        <ul class="divide-y divide-gray-200">
            @foreach ($jobs as $job)
                <li class="py-4">
                    <!-- Dynaaminen linkki työpaikan ID:n perusteella -->
                    <a href="/jobs/{{ $job['id'] }}"
                       class="text-lg font-semibold text-gray-900 hover:text-white-100 underline hover:shadow-md transition duration-200 ease-in-out">
                        {{ $job['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
