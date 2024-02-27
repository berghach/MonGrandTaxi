<div class=" flex justify-center w-screen">
    <form action="{{route('route.add')}}" method="post" class="flex max-md:flex-col justify-center items-center gap-2 bg-primary p-4 w-3/4  rounded-2xl">
        @csrf
        <div class=" bg-yellow-100 rounded-lg p-3 w-1/4 max-md:w-full">
            <select class="bg-yellow-100 focus:outline-none w-full" id="start_city" name="start_city" required>
                <option value="" disabled selected>Start city</option>
                @foreach ($cities as $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
            </select>
        </div>
        <div class="bg-yellow-100 rounded-lg p-3 w-1/4 max-md:w-full">
            <select class="bg-yellow-100 focus:outline-none w-full" id="arrive_city" name="arrive_city" required>
                <option value="" disabled selected>Destination</option>
                @foreach ($cities as $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col bg-yellow-100 p-3 w-1/4 rounded-lg max-md:w-full">
            <label class="text-xs font-semibold" for="duration">Duration</label>
            <hr class="bg-amber-400 h-[2px] w-full">
            <input class="bg-yellow-100 w-full" type="time" id="duration" name="duration" required>
        </div>
        <div class="flex flex-col bg-yellow-100 p-3 w-1/4 rounded-lg max-md:w-full">
            <label class="font-semibold" for="price">Price for a passenger (DH)</label>
            <input class="bg-yellow-100 outline outline-2 outline-amber-400 rounded-lg ps-2 w-full" type="number" step="0.01" id="price" name="price" placeholder="00.0" required>
        </div>
        <button type="submit" class="font-semibold text-black w-1/4 flex justify-center max-md:w-full h-10 rounded-lg hover:bg-cyan-200 bg-secondary p-2 transition ease-in-out duration-150">Add route</button>
    </form>
</div>