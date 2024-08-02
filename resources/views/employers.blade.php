<x-layout>
    <h1 class="text-2xl font-bold">Welcome to Jobs Page</h1>

    <ul class="mt-2 px-4">
        @foreach ($employers as $employer)
        <a href="employers/{{$employer['id']}}">
            <li>
                <strong>{{$employer['name']}}</strong>
            </li>
        </a>
        @endforeach
    </ul>
</x-layout>
