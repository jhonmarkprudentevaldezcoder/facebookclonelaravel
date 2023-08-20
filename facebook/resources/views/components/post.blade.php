<div class="p-6 lg:p-8 bg-white border-b border-gray-200 flex flex-col gap-4 shadow-lg">
    {{--
    <x-application-logo class="block h-12 w-auto" /> --}}
    <div class=" flex flex-row items-center gap-4">
        <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
            alt="{{ Auth::user()->name }}" />
        <div class="flex flex-col  gap-1">
            <p class="text-sm font-semibold">{{ Auth::user()->name }}</p>
            <p class="text-sm">{{ Auth::user()->created_at }}</p>
        </div>

    </div>
    <div class="flex flex-col  gap-1">
        <p class="text-sm font-semibold">{{ Auth::user()->name }}</p>
        <p class="text-sm">{{ Auth::user()->created_at }}</p>
    </div>
    <hr />


    <div class="flex flex-row justify-evenly font-sans text-gray-500 font-semibold">

    </div>

    <hr />
</div>