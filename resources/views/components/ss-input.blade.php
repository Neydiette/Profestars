@props(['label', 'type' => 'text', 'classLabel' => ' '])

<div>
    <label for="{{ $attributes->get('id') }}"
        class="font-semibold text-base text-gray-300 {{ $classLabel }}">{{ $label }}</label>
    <input
        {{ $attributes->merge(['class' => 'w-full rounded-lg text-sm mb-6 text-gray-300 bg-gray-900 border-2 border-gray-300', 'type' => $type]) }}>
</div>
