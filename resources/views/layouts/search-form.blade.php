<div class=" flex justify-center w-screen">
    <form action="" method="get" class="flex max-md:flex-col justify-center items-center gap-2 bg-primary p-4 w-3/4  rounded-2xl">
        <div class=" bg-yellow-100 rounded-lg p-3 w-1/4 max-md:w-full">
            <select class="bg-yellow-100 focus:outline-none w-full" id="startCity" name="startCity" required>
                <option value="" disabled selected>Start city</option>
                @foreach ($cities as $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
            </select>
        </div>
        <div class="bg-yellow-100 rounded-lg p-3 w-1/4 max-md:w-full">
            <select class="bg-yellow-100 focus:outline-none w-full" id="destination" name="destination" required>
                <option value="" disabled selected>Destination</option>
                @foreach ($cities as $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col bg-yellow-100 p-3 w-1/4 rounded-lg max-md:w-full">
            <label class="text-xs font-semibold" for="date">Choose the date:</label>
            <hr class="bg-amber-400 h-[2px] w-full">
            <input class="bg-yellow-100 w-full" type="date" id="date" name="date" required>
        </div>
        <x-submit-button>Search</x-submit-button>
    </form>
</div>