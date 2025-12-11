<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            @include('partials.language_switcher')

            <div class="flex justify-center mt-6">
                <a href="{{ url('/homepage') . '?locale=' . app()->getLocale() }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">{{ __('Go to Homepage') }}</a>
            </div>

            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                {{ __('Welcome to our website!') }}
            </div>
        </div>
    </div>
</body>