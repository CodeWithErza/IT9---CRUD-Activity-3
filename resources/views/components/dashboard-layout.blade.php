@props(['title' => null, 'icon' => null])

<!-- Pass content to the layouts.dashboard component -->
<x-layouts.dashboard :title="$title" :icon="$icon">
    {{ $slot }}
</x-layouts.dashboard> 