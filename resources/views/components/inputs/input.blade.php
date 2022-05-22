@error($name)
    @php
        $hasError = true
    @endphp

    @elseif (old($name) != null )
    @php
        $isValid = true;
    @endphp
@enderror

<div>
    <label for="{{ $attributes->get('id')}}">{{ $label }}</label>
    <input {{ $attributes->class(['p-2 block border
    bg-slate-200 dark:bg-slate-800 outline-none
    caret-slate-900 dark:caret-slate-50 w-full',
     'border-red-500' => $hasError,
     'border-slate-300 dark:border-slate-700' => (!$hasError and !$isValid),
     'border-green-500' => $isValid])->
    merge(['type' => 'text', 'value' => old($name), 'name' => $name]) }}

    >

    @error($name)
        <x-inputs.input-message>
            {{ $message }}
        </x-inputs.input-message>
        @php
            $hasError = false;
        @endphp
    @enderror

</div>
