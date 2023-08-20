<div class="p-6 lg:p-8 rounded-md bg-white border-b border-gray-200 flex flex-col gap-4 shadow-lg">
    {{--
    <x-application-logo class="block h-12 w-auto" /> --}}
    <div class="flex flex-row  justify-between">
        <div class=" flex flex-row items-center gap-4">
            <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                alt="{{ Auth::user()->name }}" />
            <div class="flex flex-col  gap-1">
                <p class="text-base font-semibold">{{ Auth::user()->name }}</p>
                <p class="text-sm text-gray-400">{{ Auth::user()->created_at->format('H') }}h</p>
            </div>
        </div>
        <div class="cursor-pointer">
            <img src=" {{ asset('/logo/more.png') }}" height="20" width="10" class="cursor-pointer" alt="more">
        </div>
    </div>
    <div class="flex flex-col  gap-1">
        <p class="text-sm font-semibold">post </p>
        <p class="text-sm">#FARLIGHT4EVER</p>
    </div>


    <div class="border-t border-gray-200"></div>
    <div class="flex flex-row justify-evenly font-sans text-gray-500 font-semibold">
        <div class="flex flex-row gap-1 items-center cursor-pointer hover:bg-gray-200 px-12 py-1 w-auto">
            <p class="text-sm">1</p>
            <span>
                <img src=" {{ asset('/logo/like.png') }}" height="5" width="25" class="cursor-pointer" alt="more">
            </span>
            <p class="text-sm">like</p>
        </div>
        <div class="flex flex-row gap-1 items-center cursor-pointer hover:bg-gray-200 px-12 py-1 w-auto">
            <p class="text-sm">0</p>
            <span>
                <img src=" {{ asset('/logo/comment.png') }}" height="5" width="25" class="cursor-pointer" alt="more">
            </span>
            <p class="text-sm">comment</p>
        </div>
        <div class="flex flex-row gap-1 items-center cursor-pointer hover:bg-gray-200 px-12 py-1 w-auto">
            <p class="text-sm">11 </p>
            <span>
                <img src=" {{ asset('/logo/send.png') }}" height="5" width="25" class="cursor-pointer" alt="more">
            </span>
            <p class="text-sm">share</p>
        </div>
    </div>
</div>