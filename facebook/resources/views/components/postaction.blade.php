<div class="p-6 lg:p-2 lg:px-8 bg-white border-b border-gray-200 flex flex-col gap-4 shadow-lg">
    {{--
    <x-application-logo class="block h-12 w-auto" /> --}}
    <div class=" flex flex-row items-center gap-4">
        <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
            alt="{{ Auth::user()->name }}" />
        <input class="w-full bg-gray-100 rounded-xl border-none" type="text" name="searc" id="searc"
            placeholder="what's ony your mind " />
        <img height="20" width="20" class="md:hidden h-8 w-8 rounded-full object-cover"
            src="{{ asset('/logo/gallery.png') }}" alt="findFriends" />
    </div>
    <hr class="" />

    <div class="hidden md:flex  flex-row justify-evenly font-sans text-gray-500 font-semibold">
        <div class="hover:cursor-pointer flex flex-row items-center gap-3 hover:bg-gray-100 px-8 py-1 rounded-md "><img
                class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/live.png') }}" alt="findFriends" />
            Live
            video</div>
        <div class="hover:cursor-pointer flex flex-row items-center gap-3 hover:bg-gray-100 px-8 py-1 rounded-md "><img
                class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/live.png') }}"
                alt="findFriends" />Photo/video</div>
        <div class="hover:cursor-pointer flex flex-row items-center gap-3 hover:bg-gray-100 px-8 py-1 rounded-md "><img
                class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/smile.png') }}"
                alt="findFriends" />Feeling/activity</div>
    </div>

</div>