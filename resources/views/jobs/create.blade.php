<x-layout>
    <h1>Create</h1>

    <form action="/jobs" method="POST" class="mb-2">
        @csrf
        <div class="flex flex-col gap-2 max-w-44">
            <div class="flex flex-col">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Shift Leader" class="border border-black ">
            </div>
            <div class="flex flex-col">
                    <label for="salary">Salary</label>
                    <input type="text" name="salary" id="salary" placeholder="$50,000" class="border border-black ">
            </div>
        </div>

        <button type="submit" class="px-3 py-2 border mt-5 border-black rounded-lg">Submit</button>
    </form>
</x-layout>