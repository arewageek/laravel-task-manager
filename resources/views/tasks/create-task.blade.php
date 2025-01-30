<x-app-layout>
    <div class="py-12 px-10 w-full lg:w-2/5 mx-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:tasks.create-task-header />

            <div class="bg-white shadow-lg mt-10 px-4 py-4 rounded-xl text-gray-500">
                <div class="divide-y-2">
                    <div class="flex items-center justify-between">
                        <h4 class="font-bold text-md text-gray-900">Task Description</h4>
                        <livewire:back-button />
                    </div>
                    <textarea class="my-4 pt-4 w-full h-full text-sm font-bold border-0 bg-transparent border-b-2 border-gray-300 focus:ring-0" placeholder="Content for the description"></textarea>

                </div>

                <div class="mt-14">
                    <h4 class="text-sm font-bold text-gray-700">Update Task Status</h4>
                    <div class="flex items-center justify-between mt-4 ">

                        <div>
                            <livewire:status-button text="Submit" type="complete" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
