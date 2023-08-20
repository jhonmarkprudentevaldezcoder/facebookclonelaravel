<div class="bg-gray-200 bg-opacity-25 flex flex-col gap-4 h-screen p-6 lg:p-8">
    <div class="flex gap-6 flex-col">
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                alt="{{ Auth::user()->name }}" />
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="/">{{ Auth::user()->name }}</a>
            </h2>
        </div>

        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/share.png') }}" alt="findFriends" />
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Find Friends</a>
            </h2>
        </div>
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/facebooklogo.png') }}"
                alt="findFriends" />
            <h2 class="ml-3 font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Welcome</a>
            </h2>
        </div>
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/clock.png') }}" alt="findFriends" />
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Memories</a>
            </h2>
        </div>
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/bookmark.png') }}" alt="findFriends" />
            <h2 class="ml-3 font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Saved</a>
            </h2>
        </div>
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/friends.png') }}" alt="findFriends" />
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Groups</a>
            </h2>
        </div>
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/video-camera.png') }}"
                alt="findFriends" />
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Video</a>
            </h2>
        </div>
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/market.png') }}" alt="findFriends" />
            <h2 class="ml-3 font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Marketplace</a>
            </h2>
        </div>
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/newspaper.png') }}" alt="findFriends" />
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Feeds</a>
            </h2>
        </div>
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/event.png') }}" alt="findFriends" />
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Events</a>
            </h2>
        </div>
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/publication.png') }}"
                alt="findFriends" />
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Ad Center</a>
            </h2>
        </div>
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/bar.png') }}" alt="findFriends" />
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Ads Manager</a>
            </h2>
        </div>
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/climate.png') }}" alt="findFriends" />
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Climate Science Center</a>
            </h2>
        </div>
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/crisis.png') }}" alt="findFriends" />
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Crisis response</a>
            </h2>
        </div>
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/donation.png') }}" alt="findFriends" />
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Fundraisers</a>
            </h2>
        </div>
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/logo/gaming.png') }}" alt="findFriends" />
            <h2 class="ml-3 font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Gaming Video</a>
            </h2>
        </div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Messenger</a>
            </h2>
        </div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Messenger Kids</a>
            </h2>
        </div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Order and payments</a>
            </h2>
        </div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Pages</a>
            </h2>
        </div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Play Games</a>
            </h2>
        </div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3  font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Recent ad activity</a>
            </h2>
        </div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3 font-semibold text-gray-900">
                <a href="https://laravel.com/docs">See Less</a>
            </h2>
        </div>
    </div>
</div>