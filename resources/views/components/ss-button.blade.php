<button {{ $attributes->merge(['class' => 'py-2 px-2 text-lg text-gray-300 rounded-xl bg-yellow-600 hover:bg-yellow-700 active:outline active:outline-rose-600 border-2 border-black']) }}>
    {{ $slot }}
</button>
