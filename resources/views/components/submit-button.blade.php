<button {{ $attributes->merge( ['type'=>'submit', 'class'=>'font-semibold text-black w-1/4 flex justify-center max-md:w-full h-10 rounded-lg hover:bg-cyan-200 bg-secondary p-2 transition ease-in-out duration-150'])}}>
    {{$slot}}
</button>
