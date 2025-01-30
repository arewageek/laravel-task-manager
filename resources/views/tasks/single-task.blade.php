<x-app-layout>
    <div class="py-12 px-10 w-full lg:w-2/5 mx-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:task-header />

            <div class="bg-white shadow-lg mt-10 px-4 py-4 rounded-xl text-gray-500">
                <div class="divide-y-2">
                    <div class="flex items-center justify-between">
                        <h4 class="font-bold text-md text-gray-900">Task Description</h4>
                        <livewire:back-button />
                    </div>
                    <div class="my-4 pt-4">
                        Content for the description
                    </div>

                </div>

                <div class="mt-14">
                    <h4 class="text-sm font-bold text-gray-700">Update Task Status</h4>
                    <div class="flex items-center justify-between mt-4 ">
                        <div class="flex items-center gap-x-2">
                            <livewire:status-button text="" type="edit" />
                            <livewire:status-button text="" type="trash" />
                            </div>

                        <div>
                            <livewire:status-button text="" type="complete" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
