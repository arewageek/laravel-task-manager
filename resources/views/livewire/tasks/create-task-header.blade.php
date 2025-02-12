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
