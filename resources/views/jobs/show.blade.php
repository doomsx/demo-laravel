<x-layout>
    <x-slot:heading>Job</x-slot:heading>

    <div class="flex flex-col mb-3">
        <h2 class="text-lg font-bold">Job Title: {{$job['title']}}</h2>
        <h3 class="text-lg font-semibold">Employer: <a href="#">{{$employer['name']}}</a></h3>
        <p>
            This job pays {{$job['salary']}}
        </p>
    </div>
    <a href="/jobs/{{$job->id}}/edit" class="px-2 py-2 border border-black">Edit Job</a>
</x-layout>