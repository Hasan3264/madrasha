<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-dark border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500  focus:ring-2   dark:focus:ring-offset-blue-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
