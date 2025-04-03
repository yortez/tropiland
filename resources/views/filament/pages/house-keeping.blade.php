<x-filament-panels::page>
        <h2 class="text-2xl font-bold mb-4 dark:text-gray-200">Housekeeping Dashboard</h2>

        <!-- Room Status Overview -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold mb-2 dark:text-gray-300">Room Status</h3>
            <div class="grid grid-cols-4 gap-4">
                <div class="bg-green-100 dark:bg-green-800 p-4 rounded">
                    <p class="font-bold dark:text-gray-200">Clean</p>
                    <p class="text-2xl dark:text-gray-100">25</p>
                </div>
                <div class="bg-yellow-100 dark:bg-yellow-800 p-4 rounded">
                    <p class="font-bold dark:text-gray-200">To Be Cleaned</p>
                    <p class="text-2xl dark:text-gray-100">10</p>
                </div>
                <div class="bg-red-100 dark:bg-red-800 p-4 rounded">
                    <p class="font-bold dark:text-gray-200">Out of Order</p>
                    <p class="text-2xl dark:text-gray-100">2</p>
                </div>
                <div class="bg-blue-100 dark:bg-blue-800 p-4 rounded">
                    <p class="font-bold dark:text-gray-200">Inspected</p>
                    <p class="text-2xl dark:text-gray-100">15</p>
                </div>
            </div>
        </div>

        <!-- Cleaning Tasks -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold mb-2 dark:text-gray-300">Today's Cleaning Tasks</h3>
            <table class="min-w-full">
                <thead>
                    <tr class="border-b dark:border-gray-700">
                        <th class="text-left py-2 dark:text-gray-300">Room</th>
                        <th class="text-left py-2 dark:text-gray-300">Type</th>
                        <th class="text-left py-2 dark:text-gray-300">Status</th>
                        <th class="text-left py-2 dark:text-gray-300">Assigned To</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b dark:border-gray-700">
                        <td class="py-2 dark:text-gray-300">101</td>
                        <td class="py-2 dark:text-gray-300">Standard Clean</td>
                        <td class="py-2 dark:text-gray-300">Pending</td>
                        <td class="py-2 dark:text-gray-300">John Doe</td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <td class="py-2 dark:text-gray-300">205</td>
                        <td class="py-2 dark:text-gray-300">Deep Clean</td>
                        <td class="py-2 dark:text-gray-300">In Progress</td>
                        <td class="py-2 dark:text-gray-300">Jane Smith</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>

        <!-- Staff Assignment -->
        <div>
            <h3 class="text-lg font-semibold mb-2 dark:text-gray-300">Staff Assignment</h3>
            <div class="grid grid-cols-3 gap-4">
                <div class="border dark:border-gray-700 p-4 rounded">
                    <p class="font-bold dark:text-gray-200">John Doe</p>
                    <p class="dark:text-gray-300">Assigned Rooms: 101, 102, 103</p>
                    <p class="dark:text-gray-300">Tasks Completed: 2/5</p>
                </div>
                <div class="border dark:border-gray-700 p-4 rounded">
                    <p class="font-bold dark:text-gray-200">Jane Smith</p>
                    <p class="dark:text-gray-300">Assigned Rooms: 201, 202, 205</p>
                    <p class="dark:text-gray-300">Tasks Completed: 3/6</p>
                </div>
                <!-- Add more staff members as needed -->
            </div>
        </div>
</x-filament-panels::page>
