@props([
    'sidebar' => false,
])

@if($sidebar)
    <flux:sidebar.brand name="Raouf Sajid Ltd." {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-8 items-center justify-center overflow-hidden rounded-md border border-[#E36A6A]/25 bg-[#FFFBF1]">
            <img src="{{ asset('images/logo-rsl.svg') }}" alt="RSL" class="h-5 w-auto" />
        </x-slot>
    </flux:sidebar.brand>
@else
    <flux:brand name="Raouf Sajid Ltd." {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-8 items-center justify-center overflow-hidden rounded-md border border-[#E36A6A]/25 bg-[#FFFBF1]">
            <img src="{{ asset('images/logo-rsl.svg') }}" alt="RSL" class="h-5 w-auto" />
        </x-slot>
    </flux:brand>
@endif
