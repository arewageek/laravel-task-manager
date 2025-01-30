<div class=" overflow-hidden rounded-3xl">
    <div class="p-6 text-gray-900">
        <div class="flex items-center justify-between">
            <div class="flex flex-col gap-3">
                <h1 class="text-3xl font-bold">Today's Tasks</h1>
                <h4 class="text-xl font-medium text-gray-600/70">
                    Thursday Jan 30th, 2023-02-23
                </h4>
            </div>
            <div>
                <button class="bg-white px-4 py-2 rounded-lg text-sky-800 text-lg font-bold shadow hover:shadow-lg transition hover:scale-105">
                    + New Task
                </button>
            </div>
        </div>


        <div class="my-5 flex flex-wrap items-center gap-3 divide-x-2 text-gray-500">
            <div class="text-sm font-bold text-sky-800 flex items-center justify-center gap-x-3">
                All
                <livewire:tab-count count="10" shade="sky" isActive={{true}} />
            </div>
            <div class="pl-2 flex items-center justify-center gap-x-3">
                Active
                <livewire:tab-count count="0" shade="gray" />
            </div>
            <div class="pl-2 flex items-center justify-center gap-x-3">
                Completed
                <livewire:tab-count count="0" shade="gray" />
            </div>
            <div class="pl-2 flex items-center justify-center gap-x-3">
                Archived
                <livewire:tab-count count="0" shade="gray" />
            </div>
        </div>

    </div>
</div>
