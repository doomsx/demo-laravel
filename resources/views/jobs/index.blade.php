<x-layout>
    
    <x-slot:heading>Jobs</x-slot:heading>


    <div class="my-2 px-4">
        @foreach ($jobs as $job)
        <a href="jobs/{{$job['id']}}" class="flex mt-2 px-3 py-4 border border-black">
            <div>
                <div class="font-semibold text-blue-500">{{$job->employer->name}}</div>
                <div>
                    <strong>{{$job['title']}}:</strong> Pays {{$job['salary']}}
                </div>
            </div>
        </a>
        @endforeach
    </div>
    {{ $jobs->links() }}
</x-layout>
