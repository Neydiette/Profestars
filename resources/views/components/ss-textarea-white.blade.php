@props(['label', 'classLabel' => ''])

<div class="flex flex-col h-full">
    <label for="{{ $attributes->get('id') }}"
        class="font-semibold text-base text-gray-300 {{ $classLabel }}">{{ $label }}</label>
    <textarea {{ $attributes->merge(['class' => 'flex-1 w-full rounded-lg text-sm mb-6 text-gray-900 bg-gray-300 border-2 border-gray-300']) }}></textarea>
</div>
