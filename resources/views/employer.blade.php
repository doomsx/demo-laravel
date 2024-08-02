<x-layout>
    <h1 class="text-2xl font-bold">Employer</h1>
    <h3 class="text-lg font-semibold">Employer: {{$employer['name']}}</h3>

   <ul>
        @foreach ($jobs as $job)
            <a href="#">
                <li>{{$job['title']}}</li>
            </a>
        @endforeach
   </ul>
</x-layout>