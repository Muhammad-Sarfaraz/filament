<div class="space-y-2">
    @if ($label || $hint)
        <div class="flex items-center justify-between space-x-2">
            @if ($label)
                <x-filament::label :for="$id">
                    {{ __($label) }}
                </x-filament::label>
            @endif
            @if ($hint)
                <x-filament::hint>
                    @markdown($hint)
                </x-filament::hint>
            @endif
        </div>
    @endif
    @yield('field')
    <x-filament::error :field="$model" />
    @if ($help)
        <x-filament::help>
            @markdown($help)
        </x-filament::help>
    @endif
</div>