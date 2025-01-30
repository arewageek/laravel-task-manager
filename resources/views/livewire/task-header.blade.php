<div class="flex items-center justify-between">
    <div class="flex flex-col gap-3">
        <h1 class="text-3xl font-bold">{{$task_title}}</h1>
        <div>
            <h4 class="text-xl font-medium text-gray-800/80">
                {{$task_deadline}}
            </h4>
            <p class="text-sm text-gray-800/50">
                Deadline
            </p>
        </div>
    </div>
    <div>
        <button class="bg-green-200 px-4 py-2 rounded-lg text-green-900 text-sm font-bold shadow hover:bg-green-300 hover:shadow-sm transition  flex items-center gap-x-2">
            Complete
            <i class="bi bi-check-circle-fill"></i>
        </button>
    </div>
</div>
