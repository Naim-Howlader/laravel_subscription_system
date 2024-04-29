<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="flex items-center mb-2">
                            <h2 class="text-2xl font-semibold">Subscription Details</h2>
                            @if ($userDetails->package_status ==1)
                            <div class="flex items-center">
                                <div class="h-4 w-4 ml-3 rounded-full bg-green-500 shadow-green-neon">
                                </div>
                            </div>
                            @else
                            <div class="flex items-center">
                                <div class="h-4 w-4 ml-3 rounded-full bg-red-500 shadow-red-neon">
                                </div>
                            </div>
                            @endif
                        </div>
                        @if ($userDetails->package_status ==1)
                        <p class="mb-4 font-medium">You currently have one active package.</p>
                        @else
                        <p class="mb-4 font-medium">You currently have no active package.</p>
                        @endif
                        @if ($userDetails->package_status ==1)
                        <div class="grid grid-cols-2 gap-4">
                            <div class="border border-gray-300 rounded-lg p-4 space-y-1">
                                <h3 class="text-lg font-semibold mb-2">Package Information</h3>
                                <p class="text-gray-600"><strong>Package Name: </strong>{{ $userDetails->packages->title }}</p>
                                <p class="text-gray-600"><strong>Speed:</strong> {{ $userDetails->packages->mbps }} Mbps</p>
                                <p class="text-gray-600"><strong>Validity:</strong> 30 Days</p>
                                <p class="text-gray-600"><strong>Cost:</strong> {{ $userDetails->packages->price }} TK</p>


                            </div>
                            <div class="border border-gray-300 rounded-lg p-4">
                                <h3 class="text-lg font-semibold mb-2">Subscription Dates</h3>
                                <p class="text-gray-600"><strong>Starting Date:</strong> {{ $userDetails->starting_date }}</p>
                                <p class="text-gray-600"><strong>Ending Date:</strong> {{ $userDetails->ending_date }}</p>
                            </div>
                        </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
