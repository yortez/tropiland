<x-filament-panels::page>
    <div class="space-y-6">
        <h2 class="text-2xl font-bold dark:text-white">Hotel Amenities Catalog</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @php
            $amenities = [
                'Room Features' => [
                    'Air conditioning',
                    'Flat-screen TV',
                    'Mini-bar',
                    'In-room safe',
                ],
                'Hotel Services' => [
                    '24-hour front desk',
                    'Concierge service',
                    'Room service',
                ],
                'Facilities' => [
                    'Swimming pool',
                    'Fitness center',
                    'Spa and wellness center',
                ],
            ];
            @endphp

            @foreach ($amenities as $category => $items)
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">{{ $category }}</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-600 dark:text-gray-300">
                        @foreach ($items as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</x-filament-panels::page>
