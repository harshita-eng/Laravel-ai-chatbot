@extends('layouts.chat')

@section('content')

<div class="flex h-full flex-col bg-gray-100">

    <!-- Welcome Section -->
    <div class="flex-1 flex items-center justify-center px-8">

        <div class="w-full max-w-5xl text-center">

            <h5 class="text-2xl font-bold text-black">
                Welcome to Laravel AI Chatbot
            </h5>

            <p class="mt-4 text-lg text-black">
                Ask questions, generate code, write emails, build SQL queries and much more.
            </p>

            <!-- Prompt Suggestions -->
            <div class="mt-14 grid grid-cols-2 gap-6">

                <button class="rounded-2xl bg-white p-6 text-left shadow-sm border border-gray-200 hover:shadow-md hover:-translate-y-1 transition duration-200">
                    <h3 class="font-semibold text-black text-lg">
                        Explain Laravel Middleware
                    </h3>

                    <p class="mt-2 text-sm text-black">
                        Learn middleware with practical examples.
                    </p>
                </button>

                <button class="rounded-2xl bg-white p-6 text-left shadow-sm border border-gray-200 hover:shadow-md hover:-translate-y-1 transition duration-200">
                    <h3 class="font-semibold text-black text-lg">
                        Generate SQL Query
                    </h3>

                    <p class="mt-2 text-sm text-black">
                        Create optimized SQL queries instantly.
                    </p>
                </button>

                <button class="rounded-2xl bg-white p-6 text-left shadow-sm border border-gray-200 hover:shadow-md hover:-translate-y-1 transition duration-200">
                    <h3 class="font-semibold text-black text-lg">
                        Improve My Resume
                    </h3>

                    <p class="mt-2 text-sm text-black">
                        Make your resume ATS friendly.
                    </p>
                </button>

                <button class="rounded-2xl bg-white p-6 text-left shadow-sm border border-gray-200 hover:shadow-md hover:-translate-y-1 transition duration-200">
                    <h3 class="font-semibold text-black text-lg">
                        Write Professional Email
                    </h3>

                    <p class="mt-2 text-sm text-black">
                        Draft formal emails in seconds.
                    </p>
                </button>

            </div>

        </div>

    </div>

    <!-- Chat Composer -->
    <!-- <div class="border-t border-gray-200 bg-white px-8 py-6">

        <div class="mx-auto max-w-5xl">

            <div class="flex items-center rounded-2xl border border-gray-300 bg-white shadow-sm">

                <input
                    type="text"
                    placeholder="Ask anything..."
                    class="flex-1 rounded-l-2xl px-6 py-5 text-black placeholder:text-black/50 focus:outline-none">

                <button
                    class="rounded-r-2xl bg-blue-600 px-8 py-5 font-semibold text-white hover:bg-blue-700 transition">

                    Send

                </button>

            </div>

        </div>

    </div> -->

    <div class="bg-gray-100 px-8 pb-8">

    <div class="mx-auto max-w-6xl">

        <form id="chatForm">
            @csrf

            <div class="flex items-center rounded-3xl bg-white shadow-lg border border-gray-200 px-3 py-3">

                <input
                    id="message"
                    type="text"
                    placeholder="Ask anything..."
                    class="flex-1 bg-transparent px-4 py-3 text-black placeholder:text-black/50 focus:outline-none">

                <button
                    type="submit"
                    class="h-12 w-12 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition">

                    →
                </button>

            </div>

        </form>

    </div>

</div>

</div>

@endsection

<script>
document.addEventListener('DOMContentLoaded', function () {

    const chatForm = document.getElementById('chatForm');

    if (!chatForm) {
        console.error('chatForm not found');
        return;
    }

    chatForm.addEventListener('submit', async function (e) {

        e.preventDefault();

        const message = document.getElementById('message').value;

        try {

            const response = await fetch('/chat/send', {

                method: 'POST',

                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document
                        .querySelector('meta[name="csrf-token"]')
                        .content
                },

                body: JSON.stringify({
                    message: message
                })

            });

            const data = await response.json();

            console.log("response".data);

        } catch (error) {

            console.error(error);

        }

    });

});
</script>