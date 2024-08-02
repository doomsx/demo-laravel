<x-layout>
    <h1 class="text-2xl font-bold">Job</h1>

    <h2 class="text-lg font-bold">Job Title: {{$job['title']}}</h2>
    <h3 class="text-lg font-semibold">Employer: <a href="#">{{$employer['name']}}</a></h3>
    <p>
        This job pays {{$job['salary']}}
    </p>
</x-layout>