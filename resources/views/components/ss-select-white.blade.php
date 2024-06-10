@props(['label', 'classLabel' => '', 'classSelect' => ''])

<div>
    <label for="{{ $attributes->get('id') }}"
        class="font-semibold text-base text-gray-300 {{ $classLabel }}">{{ $label }}</label>
    <select
        {{ $attributes->merge(['class' => 'overflow-y-auto w-full rounded-lg text-sm mb-6 text-gray-900 bg-gray-300 border-2 border-gray-300']) }}>
        {{ $slot }}
    </select>
</div>
