<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('New Score') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 align-items-center justify-contents-center">

                    @foreach($clients as $client)
                    <div class="row"><div class="col-md-6"><h1>{{ $client->name }}-{{ $client->amount }}</h1></div></div>
                    @endforeach


            </div>
        </div>
    </div>
</div>
</x-app-layout>
