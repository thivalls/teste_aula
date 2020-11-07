<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
            <a class="ml-5" href="{{ route('web.clients.create') }}">
            <svg class="h-8 w-8 inline" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 0C114.836 0 0 114.836 0 256s114.836 256 256 256 256-114.836 256-256S397.164 0 256 0zm0 0" fill="#2196f3"/><path d="M368 277.332h-90.668V368c0 11.7773-9.5547 21.332-21.332 21.332s-21.332-9.5547-21.332-21.332v-90.668H144c-11.7773 0-21.332-9.5547-21.332-21.332s9.5547-21.332 21.332-21.332h90.668V144c0-11.7773 9.5547-21.332 21.332-21.332s21.332 9.5547 21.332 21.332v90.668H368c11.7773 0 21.332 9.5547 21.332 21.332s-9.5547 21.332-21.332 21.332zm0 0" fill="#fafafa"/></svg>
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-12">
                @if(null !== session()->get('message'))
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                        <div class="flex">
                            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                            <div>
                            <p class="font-bold">{{ session()->get('message') }}</p>
                            </div>
                        </div>
                    </div>
                @endisset

                @livewire('client.client')

            </div>
        </div>
    </div>
</x-app-layout>
