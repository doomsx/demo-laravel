<x-layout>
    <x-slot:heading>Edit Job: {{$job->title}}</x-slot:heading>

   <form action="/jobs/{{$job->id}}" method="POST" class="mb-2">
        @csrf
        @method('PATCH')
        <div class="flex flex-col gap-2 max-w-sm w-full">
            <div class="flex flex-col">
                <label for="title">Title</label>
                <input type="text"
                 name="title"
                 id="title"
                 placeholder="Shift Leader"
                 class="border border-black"
                 value="{{$job->title}}">

                <div class="text-red-500">
                    @error('title')
                        {{$message}}
                    @enderror
                </div>

           </div>
            <div class="flex flex-col">
                <label for="salary">Salary</label>
                <input type="text"
                name="salary"
                id="salary"
                placeholder="$50,000"
                class="border border-black "
                value="{{$job->salary}}">

                <div class="text-red-500">
                    @error('salary')
                        {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="flex justify-around items-center mt-5">
            <div>
                <button form="delete-item" class="px-2 py-2 bg-red-600 text-gray-300 rounded-md">Delete</button>
            </div>
            <div>
                <a href="/jobs/{{$job->id}}" class="px-2 py-2 border border-black rounded-md">Cancel</a>
                <button type="submit" class="px-2 py-2 bg-blue-600 text-gray-300 rounded-md">Update</button>
            </div>
        </div>
    </form>


    <form action="/jobs/{{$job->id}}" class="hidden" id="delete-item" method="POST">
        @csrf
        @method("DELETE")
    </form>
</x-layout>
