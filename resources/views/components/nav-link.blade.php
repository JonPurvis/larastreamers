    <a href="{{ $link }}" class="{{ request()->routeIs($routeName) ? '-mb-1 border-red border-b-4 text-gray-darkest font-bold' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 text-gray-dark text-base font-medium">
    {{ $name }}
</a>
