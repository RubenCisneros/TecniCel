
<div {{ $attributes->class([
    'relative border p-2 transition-opacity my-2',
    'border-sky-300 bg-sky-100 text-sky-500' => $color == 'primary',
    'border-slate-300 bg-slate-100 text-slate-600
     dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300' => $color == 'secondary',
    'border-green-300 bg-green-100 text-green-600
     dark:border-green-700 dark:bg-green-200 dark:text-green-800' => $color == 'green',
     'border-orange-300 bg-orange-100 text-orange-600
      dark:border-orange-700 dark:bg-orange-200 dark:text-orange-800' => $color == 'orange',
    'border-red-300 bg-red-100 text-red-600
    dark:border-700 dark;bg-red-200 dark:text-red-800' => $color == 'red'
])->merge(['data-type' => 'alert-dismissible']) }}>
    {{ $slot }}
    <x-buttons.basic class="btn-close z-50" color="{{ $color }}">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
    </x-buttons.basic>
</div>
