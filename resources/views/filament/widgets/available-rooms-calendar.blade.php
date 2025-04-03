<x-filament-widgets::widget>
    <x-filament::section>
        <h2 class="text-lg font-bold mb-4">Room Availability Calendar</h2>
        <div class="grid grid-cols-7 gap-2">
            @php
                $currentMonth = now()->format('F Y');
                $daysInMonth = now()->daysInMonth;
                $firstDayOfMonth = now()->startOfMonth()->dayOfWeek;
            @endphp

            <div class="col-span-7 text-center font-bold mb-2">{{ $currentMonth }}</div>

            @foreach(['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] as $dayName)
                <div class="text-center font-semibold">{{ $dayName }}</div>
            @endforeach

            @for ($i = 1; $i < $firstDayOfMonth; $i++)
                <div></div>
            @endfor

            @for ($day = 1; $day <= $daysInMonth; $day++)
                @php
                    $availability = rand(0, 2);
                    $colorClass = match($availability) {
                        0 => 'bg-red-200',
                        1 => 'bg-yellow-200',
                        2 => 'bg-green-200',
                    };
                    $statusText = match($availability) {
                        0 => 'Full',
                        1 => 'Limited',
                        2 => 'Available',
                    };
                @endphp
                <div class="p-2 text-center {{ $colorClass }}">
                    <div class="font-bold">{{ $day }}</div>
                    <div class="text-xs">{{ $statusText }}</div>
                </div>
            @endfor
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
