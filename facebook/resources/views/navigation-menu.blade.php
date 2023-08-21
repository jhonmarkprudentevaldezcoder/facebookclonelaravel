<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 fixed right-0 top-0 w-full ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="flex justify-between h-16 ">
            <div class="flex  w-full justify-start">
                <!-- Logo -->
                <div class="shrink-0 flex items-center flex-row gap-3 w-full md:w-1/4">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                    <input class="w-full bg-gray-100 rounded-xl border-none" type="text" name="search" id="search"
                        placeholder=" search bookface  " />
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-3 sm:-my-px sm:ml-10 sm:flex ">
                    <x-nav-link class="ml-10" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <img src=" {{ asset('/logo/home.png') }}" alt="logo" width="35">
                    </x-nav-link>
                    <x-nav-link href="{{ route('dashboard') }}">
                        <img src=" {{ asset('/logo/share.png') }}" alt="logo" width="35">
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden space-x-3 sm:-my-px  sm:flex md:flex flex-row items-center">
                <x-dropdown width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img width="35" src="{{ asset('/logo/plus.png') }}" alt="plus" />
                        </button>
                    </x-slot>

                    <x-slot name="content" class="p-5">

                        <!-- Account Management -->
                        <x-dropdown-link {{-- href="{{ route('profile.show') }}" --}}
                            class="flex flex-row gap-2 items-center">
                            <h1 class="p5 text-xl font-sans font-bold"> {{ __('Create') }}</h1>
                        </x-dropdown-link>

                        <x-dropdown-link data-modal-target="authentication-modal"
                            data-modal-toggle="authentication-modal"
                            class="flex flex-row gap-5 items-center cursor-pointer">
                            <img width="25" src="{{ asset('/logo/plus.png') }}" alt="plus" />
                            <div class="flex flex-col">
                                <span class="text-gray-900 text-base">{{ __('Post') }}</span>
                                <span class="text-gray-600 text-sm">{{ __('Share a post on News Feed.') }}</span>
                            </div>
                        </x-dropdown-link>


                        <x-dropdown-link href="{{ route('profile.show') }}" class="flex flex-row gap-5 items-center">
                            <img width="25" src="{{ asset('/logo/plus.png') }}" alt="plus" />
                            <div class="flex flex-col">
                                <span class="text-gray-900 text-base">{{ __('Story') }}</span>
                                <span class="text-gray-600 text-sm">{{ __('Share a photo or Write somethin.') }}</span>
                            </div>
                        </x-dropdown-link>


                        <x-dropdown-link href="{{ route('profile.show') }}" class="flex flex-row gap-5 items-center">
                            <img width="25" src="{{ asset('/logo/plus.png') }}" alt="plus" />
                            <div class="flex flex-col">
                                <span class="text-gray-900 text-base">{{ __('Reel') }}</span>
                                <span class="text-gray-600 text-sm">{{ __('Share a reel.') }}</span>
                            </div>
                        </x-dropdown-link>

                        <x-dropdown-link href="{{ route('profile.show') }}" class="flex flex-row gap-5 items-center">
                            <img width="25" src="{{ asset('/logo/plus.png') }}" alt="plus" />
                            <div class="flex flex-col">
                                <span class="text-gray-900 text-base">{{ __('Life event') }}</span>
                                <span class="text-gray-600 text-sm">{{ __('Add a life event to your profile.') }}</span>
                            </div>
                        </x-dropdown-link>

                        <div class="border-t border-gray-200"></div>

                        <x-dropdown-link href="{{ route('profile.show') }}" class="flex flex-row gap-5 items-center">
                            <img width="25" src="{{ asset('/logo/plus.png') }}" alt="plus" />
                            <div class="flex flex-col">
                                <span class="text-gray-900 text-base">{{ __('Page') }}</span>
                                <span class="text-gray-600 text-sm">{{ __('Connect and share with customers of fans')
                                    }}</span>
                            </div>
                        </x-dropdown-link>

                        <x-dropdown-link href="{{ route('profile.show') }}" class="flex flex-row gap-5 items-center">
                            <img width="25" src="{{ asset('/logo/plus.png') }}" alt="plus" />
                            <div class="flex flex-col">
                                <span class="text-gray-900 text-base">{{ __('Ad') }}</span>
                                <span class="text-gray-600 text-sm">{{ __('Advertise your business, brand or
                                    organization') }}</span>
                            </div>
                        </x-dropdown-link>

                        <x-dropdown-link href="{{ route('profile.show') }}" class="flex flex-row gap-5 items-center">
                            <img width="25" src="{{ asset('/logo/plus.png') }}" alt="plus" />
                            <div class="flex flex-col">
                                <span class="text-gray-900 text-base">{{ __('Group') }}</span>
                                <span class="text-gray-600 text-sm">{{ __('Connect with people who share your
                                    interests.') }}</span>
                            </div>
                        </x-dropdown-link>

                        <x-dropdown-link href="{{ route('profile.show') }}" class="flex flex-row gap-5 items-center">
                            <img width="25" src="{{ asset('/logo/plus.png') }}" alt="plus" />
                            <div class="flex flex-col">
                                <span class="text-gray-900 text-base">{{ __('Event') }}</span>
                                <span class="text-gray-600 text-sm">{{ __('Bring people together with a public or
                                    private event.') }}</span>
                            </div>
                        </x-dropdown-link>

                        <x-dropdown-link href="{{ route('profile.show') }}" class="flex flex-row gap-5 items-center">
                            <img width="25" src="{{ asset('/logo/plus.png') }}" alt="plus" />
                            <div class="flex flex-col">
                                <span class="text-gray-900 text-base">{{ __('Marketplace listing') }}</span>
                                <span class="text-gray-600 text-sm">{{ __('Sell items to people in your community')
                                    }}</span>
                            </div>
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>

                <x-nav-link class="ml-10" href="{{ route('dashboard') }}">
                    <img src=" {{ asset('/logo/messenger.png') }}" alt="logo" width="35">
                </x-nav-link>
                <x-nav-link href="{{ route('dashboard') }}">
                    <img src=" {{ asset('/logo/bell.png') }}" alt="logo" width="35">
                </x-nav-link>



            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="ml-3 relative">
                    <x-dropdown align="right" width="60">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                    {{ Auth::user()->currentTeam->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                    </svg>
                                </button>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <div class="w-60">
                                <!-- Team Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Team') }}
                                </div>

                                <!-- Team Settings -->
                                <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                    {{ __('Team Settings') }}
                                </x-dropdown-link>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-dropdown-link>
                                @endcan

                                <div class="border-t border-gray-200"></div>

                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Switch Teams') }}
                                </div>

                                @foreach (Auth::user()->allTeams() as $team)
                                <x-switchable-team :team="$team" />
                                @endforeach
                            </div>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button
                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                    {{ Auth::user()->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}"
                                class="flex flex-row gap-3 items-center">
                                <img class="h-8 w-8 rounded-full object-cover"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                <div class="border-t border-gray-200"></div>
                                <div>{{ Auth::user()->name }}</div>
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="shrink-0 mr-3">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                        alt="{{ Auth::user()->name }}" />
                </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-responsive-nav-link href="{{ route('api-tokens.index') }}"
                    :active="request()->routeIs('api-tokens.index')">
                    {{ __('API Tokens') }}
                </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="border-t border-gray-200"></div>

                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Team') }}
                </div>

                <!-- Team Settings -->
                <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                    :active="request()->routeIs('teams.show')">
                    {{ __('Team Settings') }}
                </x-responsive-nav-link>

                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                    {{ __('Create New Team') }}
                </x-responsive-nav-link>
                @endcan

                <div class="border-t border-gray-200"></div>

                <!-- Team Switcher -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Switch Teams') }}
                </div>

                @foreach (Auth::user()->allTeams() as $team)
                <x-switchable-team :team="$team" component="responsive-nav-link" />
                @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>