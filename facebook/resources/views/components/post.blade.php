@foreach ($posts as $post)
<div class="p-6 lg:p-8 rounded-md bg-white border-b border-gray-200 flex flex-col gap-4 shadow-lg mt-8">
    {{--
    <x-application-logo class="block h-12 w-auto" /> --}}
    <div class="flex flex-row  justify-between">
        <div class=" flex flex-row items-center gap-4">
            <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                alt="{{ Auth::user()->name }}" />
            <div class="flex flex-col  gap-1">
                <p class="text-base font-semibold">{{ Auth::user()->name }}</p>
                <p class="text-sm text-gray-400   gap-2 ">{{ $post->created_at->diffForHumans()}}

                </p>
            </div>
        </div>
        <div class="cursor-pointer">

            @if (Auth::user()->id != $post->user_id)
            @else
            <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                type="button">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                    </path>
                </svg>
                <span class="sr-only">Comment settings</span>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownComment1"
                class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownMenuIconHorizontalButton">
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                    </li>
                </ul>
            </div>
            @endif

        </div>
    </div>
    <div class="flex flex-col  gap-1">
        <p class="text-sm font-semibold"> {{ $post->post }} </p>
    </div>


    <div class="border-t border-gray-200"></div>
    <div class="flex flex-row justify-evenly font-sans text-gray-500 font-semibold">
        <div class="flex flex-row gap-1 items-center cursor-pointer hover:bg-gray-200  md:px-12 py-1 w-auto">
            <p class="text-sm">{{ $post->likes }}</p>
            <span class=" md:flex">
                <img src=" {{ asset('/logo/like.png') }}" height="5" width="15" class="cursor-pointer" alt="more">
            </span>
            <p class="text-sm">like</p>
        </div>
        <div id="toggleButton"
            class="flex flex-row gap-1 items-center cursor-pointer hover:bg-gray-200 md:px-12 py-1 w-auto">
            <p class="text-sm">{{ $post->comments }}</p>
            <span class=" md:flex">
                <img src=" {{ asset('/logo/comment.png') }}" height="5" width="15" class="cursor-pointer" alt="more">
            </span>
            <p class="text-sm">comment</p>
        </div>
        <div class="flex flex-row gap-1 items-center cursor-pointer hover:bg-gray-200 md:px-12 py-1 w-auto">
            <p class="text-sm">{{ $post->shares }}</p>
            <span class=" md:flex">
                <img src=" {{ asset('/logo/send.png') }}" height="5" width="15" class="cursor-pointer" alt="more">
            </span>
            <p class="text-sm">share</p>
        </div>
    </div>
</div>

@include('components/comments')
@endforeach