<x-mail::message>
Congrats! Your job <h2>
    {{ $job->title }}
</h2> is now live on our website,

<x-mail::button :url="url('/jobs/' . $job->id)">
    Right Here
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
