<div class="inline-block relative h-full" data-type="dropdown">
    <button class="flex justify-center align-middle h-full">
        {{ $slot }}
    </button>

    <div class="absolute hidden opacity-0 transition-opacity border-2 bg-slate-200 border-slate-300 z-40 dark:bg-slate-800
     right-0 dark:border-slate-700">
        {{ $items }}
    </div>
</div>
