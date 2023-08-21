<div id="authentication-modal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full  overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center "
                data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Create post</h3>
                <div class="border-t border-gray-200"></div>
                <div class="flex flex-row gap-2 py-3">
                    <div>
                        <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                    </div>
                    <div>
                        <p class="text-sm font-sans">{{ Auth::user()->name }}</p>
                        <p class="text-sm bg-gray-200 px-2 py-1 rounded-md font-bold font-sans">public</p>
                    </div>
                </div>

                <form class="space-y-6 mt-5 mb-5" method="POST" action="{{ route('post.save') }}">
                    @csrf
                    <div>
                        <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="likes" id="likes" value="0">
                        <input type="hidden" name="comments" id="comments" value="0">
                        <input type="hidden" name="shares" id="shares" value="0">
                        <input type="text" name="post" id="post"
                            class=" border-none text-gray-900 text-sm rounded-lg  block w-full p-2.5  focus:ring-white"
                            placeholder="What's on your mind" required />
                    </div>

                    <div class="border border-gray-200 shadow-md rounded-md">
                        <div class="flex flex-row justify-between p-4">
                            <div class="text-sm font-bold">Add to your post</div>
                            <div class="flex flex-row gap-3">
                                <span class="hover:cursor-pointer">
                                    <img src=" {{ asset('/logo/gallery.png') }}" alt="logo" width="25">
                                </span>
                                <span class="hover:cursor-pointer">
                                    <img src=" {{ asset('/logo/label.png') }}" alt="logo" width="25">
                                </span>
                                <span class="hover:cursor-pointer">
                                    <img src=" {{ asset('/logo/smile.png') }}" alt="logo" width="25">
                                </span class="hover:cursor-pointer">
                                <span class="hover:cursor-pointer">
                                    <img src=" {{ asset('/logo/place.png') }}" alt="logo" width="25">
                                </span>
                                <span class="hover:cursor-pointer">
                                    <img src=" {{ asset('/logo/gif.png') }}" alt="logo" width="25">
                                </span>
                                <span class="hover:cursor-pointer">
                                    <img src=" {{ asset('/logo/more.png') }}" alt="logo" width="20">
                                </span>
                            </div>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Post
                        Now
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>