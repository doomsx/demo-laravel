<x-layout>
    <x-slot:heading>Employers</x-slot:heading>

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
