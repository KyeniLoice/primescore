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

                    <!-- Message Status -->
                    <x-message-status class="mb-4" :status="session('status')" />

                    <form action="{{route('clients.store')}}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block font-medium text-gray-700">Name:</label>
                            <input type="text" name="name" id="name" class="form-input w-full rounded-md shadow-sm">
                        </div>
                        <div class="mb-4">
                            <label for="idNo" class="block font-medium text-gray-700">ID Number:</label>
                            <input type="text" name="idNo" id="idNo" class="form-input w-full rounded-md shadow-sm">
                        </div>
                        <div class="mb-4">
                            <label for="amount" class="block font-medium text-gray-700">Loan Amount:</label>
                            <input type="text" name="amount" id="amount" class="form-input w-full rounded-md shadow-sm">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-black hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
