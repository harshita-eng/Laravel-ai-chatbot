<aside class="w-80 bg-slate-900 text-white flex flex-col">

    <!-- Logo -->
    <div class="px-6 py-6 border-b border-slate-800">

        <h1 class="text-2xl font-bold">
            Laravel AI
        </h1>

        <p class="text-sm mt-1 text-slate-300">
            Smart Assistant
        </p>

    </div>

    <!-- New Chat -->

    <div class="p-6">

        <button
            class="w-full bg-blue-600 hover:bg-blue-700 transition rounded-xl py-3 font-semibold">

            + New Chat

        </button>

    </div>

    <!-- Search -->

    <div class="px-6">

        <input
            type="text"
            placeholder="Search conversations..."
            class="w-full rounded-xl bg-slate-800 border border-slate-700 px-4 py-3 text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500">

    </div>

    <!-- Recent Chats -->

    <div class="flex-1 overflow-y-auto px-6 mt-8">

        <h2 class="text-sm font-semibold mb-4">
            Recent Chats
        </h2>

        <div class="space-y-2">

            <button class="w-full text-left rounded-xl bg-slate-800 px-4 py-3 hover:bg-slate-700 transition">
                Laravel Interview
            </button>

            <button class="w-full text-left rounded-xl px-4 py-3 hover:bg-slate-800 transition">
                Resume Builder
            </button>

            <button class="w-full text-left rounded-xl px-4 py-3 hover:bg-slate-800 transition">
                SQL Generator
            </button>

            <button class="w-full text-left rounded-xl px-4 py-3 hover:bg-slate-800 transition">
                Email Writer
            </button>

        </div>

    </div>

    <!-- User -->

    <div class="border-t border-slate-800 p-6">

        <p class="font-semibold">
            {{ auth()->user()->name }}
        </p>

        <p class="text-sm text-slate-300 mt-1">
            {{ auth()->user()->email }}
        </p>

        <button class="mt-4 text-red-400 hover:text-red-300 text-sm">
            Logout
        </button>

    </div>

</aside>