<x-layout>
    <x-slot:heading>Employer</x-slot:heading>

    <h3 class="text-lg font-semibold">Employer: {{$employer['name']}}</h3>

   <ul>
        @foreach ($jobs as $job)
            <a href="#">
                <li>{{$job['title']}}</li>
            </a>
        @endforeach
   </ul>
</x-layout>