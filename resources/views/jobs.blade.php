<x-layout>
    <h1 class="text-2xl font-bold">Welcome to Jobs Page</h1>

    <ul class="mt-2 px-4">
        @foreach ($jobs as $job)
        <a href="/jobs/{{$job['id']}}">
            <li>
                <strong>{{$job['title']}}:</strong> Pays {{$job['salary']}}
            </li>
        </a>
        @endforeach
    </ul>
</x-layout>
