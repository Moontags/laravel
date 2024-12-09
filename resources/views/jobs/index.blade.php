<x-layout>
    <x-slot:heading>
        Job Titles
    </x-slot:heading>


        <div class="space-y-4">
            @foreach ($jobs as $job)

                    <!-- Dynaaminen linkki työpaikan ID:n perusteella -->
                    <a href="/jobs/{{ $job['id'] }}"
                       class="text-lg font-semibold text-gray-900 hover:underline block px-4 py-6 border border-gray-200 rounded-lg">
                       <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                     <div>
                        <strong>{{ $job['title'] }}:</strong> Pays {{ $job ['salary']}} per year.
                     </div>
                    </a>

            @endforeach
            <div>
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
</x-layout>
