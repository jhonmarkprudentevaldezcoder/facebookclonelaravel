<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <div class=" flex flex-col md:flex-row justify-between p-3 gap-1">

        <div class=" md:flex hidden max-w-md mx-auto ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @include('components/leftbanner')
            </div>
        </div>

        <div class="overflow-auto w-f md:max-w-6xl mx-auto ">
            <div class="overflow-hidden shadow-xl sm:rounded-lg">
                @include('components/story')
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @include('components/modal-post')
                @include('components/postaction')
            </div>

            <div class="mt-12">
                @include('components/post')
            </div>

        </div>


        <div class="hidden md:hidden max-w-sm  mx-auto lg:flex">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>

</x-app-layout>