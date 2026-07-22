<header class="h-20 bg-white border-b border-gray-200 px-8 flex items-center justify-between">

    <!-- Left Section -->
    <div>

        <h1 class="text-2xl font-bold text-black">
            Laravel AI Chatbot
        </h1>

        <p class="text-sm text-black mt-1">
            Build AI powered applications with Laravel
        </p>

    </div>

    <!-- Right Section -->
    <div class="flex items-center gap-4">

        <!-- AI Model -->
        <select
            class="rounded-xl border border-gray-300 bg-white px-4 py-2 text-black focus:outline-none focus:ring-2 focus:ring-blue-500">

            <option>GPT-4o</option>
            <option>GPT-4.1</option>

        </select>

        <!-- Notification -->
        <button
            class="h-11 w-11 rounded-xl border border-gray-300 bg-white hover:bg-gray-100 transition">

            🔔

        </button>

        <!-- User Avatar -->
        <div
            class="h-11 w-11 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center">

            {{ strtoupper(substr(auth()->user()->name,0,1)) }}

        </div>

    </div>

</header>