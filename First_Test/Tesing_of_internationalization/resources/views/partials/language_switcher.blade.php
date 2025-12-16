<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    <select onchange="location.href = '{{ request()->fullUrlWithQuery(['locale' => '']) }}' + this.value;" class="px-3 py-2 border border-gray-300 rounded bg-white text-gray-700 hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
        @foreach($available_locales as $locale_name => $available_locale)
            <option value="{{ $available_locale }}" @selected($available_locale === $current_locale)>{{ $locale_name }}</option>
        @endforeach
    </select>
</div>