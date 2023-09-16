<style>
    #bt{
        background-color: white;
    }
    #bt:hover{
        background-color: #7D9BFF;
        border:1px solid white;
        border-radius: 5px;
        color:white;
    }
</style>
<button id="bt" {{ $attributes->merge(['type' => 'submit','class' => 'inline-flex items-end px-6 py-2 border border-transparent rounded-md font-semibold text-xs text-black  uppercase tracking-widest  focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-red-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
