{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard ATOM</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head> --}}

<body class="relative antialiased bg-gray-100">
    <!-- Start Nav -->
    <div class="fixed bottom-4 right-4 xl:right-20">
        <a href="https://www.buymeacoffee.com/ejulfaey" target="_blank"
            class="transform duration-500 ease-in-out animate-bounce bg-yellow-400 px-4 py-3 font-mono font-semibold rounded-lg shadow hover:shadow-xl flex justify-between items-center gap-4">
            <img class="w-8 h-8 rounded"
                src="https://img.buymeacoffee.com/api/?name=Ejul&size=300&bg-image=bmc&background=5F7FFF"
                alt="buymeacoffee">
            Buy Me A Coffee
        </a>
    </div>
    <!-- End Nav -->
    <!-- Start Main -->
    <main class="container mx-w-6xl mx-auto py-4">
        <div class="flex flex-col space-y-8">
            <!-- First Row -->
            <div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-5 px-4 xl:p-0 gap-y-4 md:gap-6">
                <div class="transform duration-500 ease-in-out hover:shadow-xl md:col-span-2 xl:col-span-3 bg-white p-6 rounded-2xl border border-gray-50">
                    <div class="flex flex-col space-y-6 md:h-full md:justify-between">
                        <div class="flex justify-between ">
                            <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">
                                Main Account
                            </span>
                            <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">
                                Available Funds
                            </span>
                        </div>
                        <div class="flex gap-2 md:gap-4 justify-between items-center">
                            <div class="flex flex-col space-y-4">
                                <h2 class="text-gray-800 font-bold tracking-widest leading-tight">Derol's Savings
                                    Account</h2>
                                <div class="flex items-center gap-4">
                                    <p class="text-lg text-gray-600 tracking-wider">**** **** *321</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </div>
                            </div>
                            <h2 class="text-lg md:text-xl xl:text-3xl text-gray-700 font-black tracking-wider">
                                <span class="md:text-xl">$</span>
                                92,817.45
                            </h2>
                        </div>
                        <div class="flex gap-2 md:gap-4">
                            <a href="#"
                                class="bg-blue-600 px-5 py-3 w-full text-center md:w-auto rounded-lg text-white text-xs tracking-wider font-semibold hover:bg-blue-800">
                                Transfer Money
                            </a>
                            <a href="#"
                                class="bg-blue-50 px-5 py-3 w-full text-center md:w-auto rounded-lg text-blue-600 text-xs tracking-wider font-semibold hover:bg-blue-600 hover:text-white">
                                Link Account
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class=" transform duration-500 ease-in-out hover:shadow-xl col-span-2 p-6 rounded-2xl bg-gradient-to-r from-blue-500 to-blue-800 flex flex-col justify-between">
                    <div class="flex flex-col">
                        <p class="text-white font-bold">Lorem ipsum dolor sit amet</p>
                        <p class="mt-1 text-xs md:text-sm text-gray-50 font-light leading-tight max-w-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio soluta saepe consequuntur
                            facilis ab a. Molestiae ad saepe assumenda praesentium rem dolore? Exercitationem, neque
                            obcaecati?
                        </p>
                    </div>
                    <div class="flex justify-between items-end">
                        <a href="#"
                            class="bg-blue-800 px-4 py-3 rounded-lg text-white text-xs tracking-wider font-semibold hover:bg-blue-600 hover:text-white">
                            Learn More
                        </a>
                        <img src="assets/calendar.png" alt="calendar" class="w-auto h-24 object-cover">
                    </div>
                </div>

            </div>
            <!-- End First Row -->
            <!-- Start Second Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-4 xl:p-0 gap-4 xl:gap-6">
                <div class="col-span-1 md:col-span-2 lg:col-span-4 flex justify-between">
                    <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                        Expenses By Category</h2>
                    <a href="#" class="text-xs text-gray-800 font-semibold uppercase">More</a>
                </div>
                <div class="shadow-sm transform duration-500 ease-in-out hover:shadow-xl bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Foods & Beverages</p>
                            <h3 class="mt-1 text-lg text-blue-500 font-bold">$ 818</h3>
                            <span class="mt-4 text-xs text-gray-500">Last Transaction 3 Hours ago</span>
                        </div>
                        <div class="bg-blue-500 p-2 md:p-1 xl:p-2 rounded-md">
                            <img src="assets/dish-2.png" alt="icon" class="w-auto h-8 md:h-6 xl:h-8 object-cover">
                        </div>
                    </div>
                </div>
                <div class="shadow-sm transform duration-500 ease-in-out hover:shadow-xl bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Groceries</p>
                            <h3 class="mt-1 text-lg text-green-500 font-bold">$ 8,918</h3>
                            <span class="mt-4 text-xs text-gray-500">Last Transaction 3 Days ago</span>
                        </div>
                        <div class="bg-green-500 p-2 md:p-1 xl:p-2 rounded-md">
                            <img src="assets/grocery.png" alt="icon" class="w-auto h-8 md:h-6 xl:h-8 object-cover">
                        </div>
                    </div>
                </div>
                <div class=" shadow-sm transform duration-500 ease-in-out hover:shadow-xl bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Gaming</p>
                            <h3 class="mt-1 text-lg text-yellow-500 font-bold">$ 1,223</h3>
                            <span class="mt-4 text-xs text-gray-600">Last Transaction 4 Days ago</span>
                        </div>
                        <div class="bg-yellow-500 p-2 md:p-1 xl:p-2 rounded-md">
                            <img src="assets/gaming.png" alt="icon" class="w-auto h-8 md:h-6 xl:h-8 object-cover">
                        </div>
                    </div>
                </div>
                <div class="shadow-sm transform duration-500 ease-in-out hover:shadow-xl bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Trip & Holiday</p>
                            <h3 class="mt-1 text-lg text-indigo-500 font-bold">$ 5,918</h3>
                            <span class="mt-4 text-xs text-gray-500">Last Transaction 1 Month ago</span>
                        </div>
                        <div class="bg-indigo-500 p-2 md:p-1 xl:p-2 rounded-md">
                            <img src="assets/holiday.png" alt="icon" class="w-auto h-8 md:h-6 xl:h-8 object-cover">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Second Row -->
            <!-- Start Third Row -->
            <div class="grid grid-cols-1 md:grid-cols-5 items-start px-4 xl:p-0 gap-y-4 md:gap-6">
                <div class="col-start-1 col-end-5">
                    <h2 class="text-xs md:text-sm text-gray-800 font-bold tracking-wide">Summary Transactions</h2>
                </div>
                <div class="col-span-2 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 flex justify-between items-center">
                        <div class="p-4 cursor-pointer border">
                            <span class="text-xs text-gray-500 font-semibold">Daily</span>
                            <h2 class="text-gray-800 font-bold tracking-wider">$ 27.80</h2>
                        </div>
                        <div class="p-4 cursor-pointer border">
                            <span class="text-xs text-gray-500 font-semibold">Weekly</span>
                            <h2 class="text-gray-800 font-bold tracking-wider">$ 192.92</h2>
                        </div>
                        <div class="p-4 cursor-pointer border">
                            <span class="text-xs text-gray-500 font-semibold">Monthly</span>
                            <h2 class="text-gray-800 font-bold tracking-wider">$ 501.10</h2>
                        </div>
                    </div>
                    <canvas id="myChart"></canvas>
                </div>
                <div class="col-span-3 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
                    <div class="flex justify-between items-center">
                        <h2 class="text-sm text-gray-600 font-bold tracking-wide">Latest Transactions</h2>
                        <a href="#"
                            class="px-4 py-2 text-xs bg-blue-100 text-blue-500 rounded uppercase tracking-wider font-semibold hover:bg-blue-300">More</a>
                    </div>
                    <ul class="divide-y-2 divide-gray-100 overflow-x-auto w-full">
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">McDonald</p>
                            <p class="px-4 tracking-wider">Cash</p>
                            <p class="px-4 text-blue-600">Food</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                16.90
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">McDonald</p>
                            <p class="px-4 tracking-wider">Cash</p>
                            <p class="px-4 text-blue-600">Food</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                16.90
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">McDonald</p>
                            <p class="px-4 tracking-wider">Cash</p>
                            <p class="px-4 text-blue-600">Food</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                16.90
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">McDonald</p>
                            <p class="px-4 tracking-wider">Cash</p>
                            <p class="px-4 text-blue-600">Food</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                16.90
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">McDonald</p>
                            <p class="px-4 tracking-wider">Cash</p>
                            <p class="px-4 text-blue-600">Food</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                16.90
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">McDonald</p>
                            <p class="px-4 tracking-wider">Cash</p>
                            <p class="px-4 text-blue-600">Food</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                16.90
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Third Row -->
        </div>
    </main>
    <!-- End Main -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');

        const data = {
            labels: [
                'Food & beverages',
                'Groceries',
                'Gaming',
                'Trip & holiday',
            ],
            datasets: [{
                label: 'Total Expenses',
                data: [148, 150, 130, 170],
                backgroundColor: [
                    '#3B82F6',
                    '#10B981',
                    '#6366F1',
                    '#F59E0B'
                ]
            }]
        };

        const config = {
            type: 'polarArea',
            data: data,
            options: {
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                }
            }
        };

        const chart = new Chart(ctx, config);
    </script>

</body>

</html>
