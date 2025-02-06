<form wire:submit="save" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @error('title')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
    {{-- <livewire:tasks.create-task-header title="title" date='date' time='time' /> --}}

    <div class="flex items-center justify-between gap-y-2 flex-col md:flex-row overflow-hidden max-w-full">
    <div class="flex flex-col gap-3 md:w-3/4 md:max-w-3/4 overflow-hidden">
        <div class="flex gap-x-2 items-baseline">
            <div>
                @error('title')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <input wire:model='title' class="text-3xl font-bold border-0 bg-transparent border-b-2 border-gray-300 focus:ring-0" placeholder="Title of task"/>
        </div>
        <div>
            <div class="flex gap-x-2">

                {{-- @error('date' || 'time')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror --}}

                <input wire:model='date' class="text-xl font-medium text-gray-800/80 border-0 bg-transparent border-b-2 border-gray-300 focus:ring-0" type="date">
                <input wire:model='time' class="text-xl font-medium text-gray-800/80 border-0 bg-transparent border-b-2 border-gray-300 focus:ring-0" type="time">
            </div>
            <p class="text-sm text-gray-800/50">
                Deadline
            </p>
        </div>
    </div>
    <div class=" w-full md:w-1/4 mt-5">
        <button class="bg-slate-300 px-4 py-2 rounded-lg text-slate-900 text-sm font-bold shadow-lg hover:bg-slate-200 hover:shadow-md transition  flex items-center gap-x-2">
            Save Draft
            <i class="bi bi-cloud-arrow-up-fill"></i>
        </button>
    </div>
</div>


    <div class="bg-white shadow-lg mt-10 px-4 py-4 rounded-xl text-gray-500">
        <div class="divide-y-2">
            <div class="flex items-center justify-between">
                <h4 class="font-bold text-md text-gray-900">Task Description</h4>
                <livewire:back-button />
            </div>
            <textarea class="my-4 pt-4 w-full h-full text-sm font-bold border-0 bg-transparent border-b-2 border-gray-800 focus:ring-0" placeholder="Content for the description"></textarea>
        </div>

        <div class="mt-14">
            <div class="flex items-center justify-between mt-4 ">
                <div>
                    {{-- <livewire:status-button text="Submit" type="complete"  /> --}}
                    <button type="submit" class="bg-success-200 px-4 py-2 rounded-lg text-success-900 text-sm font-bold shadow hover:bg-success-300 hover:shadow-sm transition flex items-center gap-x-2">
                        Submit
                        <i class="bi bi-check-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
