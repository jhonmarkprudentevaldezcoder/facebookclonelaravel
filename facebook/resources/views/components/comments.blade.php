<section class="bg-white py-2 hidden" id="hiddenDiv">
    <div class="max-w-2xl mx-auto px-4">

        <form method="POST" action="{{ route('comment.save') }}">
            @csrf
            <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 ">
                <input type="hidden" name="user_id" name="user_id" id="user_id" value="{{ Auth::user()->email }}">
                <input type="hidden" name="post_id" name="post_id" id="post_id" value="{{ $post->id }}">
                <label for="comment" class="sr-only">Your comment </label>
                <input type="message" id="comment" name="comment"
                    class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none  "
                    placeholder="Write a comment..." required />
            </div>
            <button type="submit"
                class="inline-flex mb-5 items-center py-2.5 px-4 text-xs font-medium text-center text-gray-200 bg-blue-900 w-full rounded-lg focus:ring-4 focus:ring-primary-200  hover:bg-primary-800">
                Post comment
            </button>
        </form>


        @foreach ($comments as $comment)
        <article class="p-2 mb-1 text-base bg-gray-100 rounded-lg ">
            <footer class="flex justify-between items-center mb-2">
                <div class="flex items-center">
                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 ">{{-- <img
                            class="h-8 w-8 mr-4 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" /> --}}{{ $comment->user_id }}
                        {{--
                    <p class="text-sm text-gray-600 ">{{$comment->created_at->diffForHumans() }}</p> --}}
                </div>

                @if (Auth::user()->email != $comment->user_id)
                @else
                <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 "
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
                <div id="dropdownComment1" class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow ">
                    <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownMenuIconHorizontalButton">

                        <li>
                            <form class="w-full" action="{{ route('comment.delete', $comment->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-red-600 py-2 px-4 hover:bg-gray-100 w-full  ">Delete</button>
                            </form>
                        </li>

                    </ul>
                </div>
                @endif

            </footer>
            <p class="text-gray-500 ">{{ $comment->comment }}</p>
            <div class="flex items-center mt-4 space-x-4">
                <button type="button" class="flex items-center text-sm text-gray-500 flex-row justify-between ">
                    <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                        </path>
                    </svg>
                    Reply

                </button>
                <p class="text-sm text-gray-600 ">{{$comment->created_at->diffForHumans() }}</p>
            </div>
        </article>
        @endforeach
    </div>
</section>