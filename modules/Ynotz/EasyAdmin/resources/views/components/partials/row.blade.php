@props(['item', 'form_items', 'form', '_old', 'errors'])
@php
    $wclasses = [
        '1/2' => 'w-1/2',
        '1/3' => 'w-1/3',
        '1/4' => 'w-1/4',
        '2/3' => 'w-2/3',
        '2/5' => 'w-2/5',
        '3/4' => 'w-3/4',
        '3/5' => 'w-3/5',
        'full' => 'w-full',
        'grow' => 'flex-grow'
    ];
    $width = isset($item['width']) && isset($wclasses[$item['width']]) ? $wclasses[$item['width']] : 'flex-grow';
@endphp
<div class="flex flex-row w-full flex-wrap md:flex-nowrap md:{{$width}} space-x-0 sm:space-x-4">
@foreach ($item['items'] as $item)
    @if ($item['item_type'] == 'layout')
        <x-easyadmin::partials.layoutrenderer
            :item="$item"
            :form="$form"
            :_old="$_old"
            :errors="$errors" />
    @elseif ($item['item_type'] == 'input')
        <x-easyadmin::partials.inputrenderer
            :item="$form['items'][$item['key']]"
            :form="$form"
            :_old="$_old"
            :errors="$errors" />
    @endif
@endforeach
</div>
