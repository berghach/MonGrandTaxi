@foreach ($routes as $item)
    <!-- route card -->
    <div class=" flex flex-wrap w-full bg-cyan-300 p-3 rounded-xl items-center shadow-xl">
        <div class=" flex grow ps-4 pt-3 gap-3">
            <div class=" flex flex-col items-center py-2">
                <div id="start-point" class=" w-3 h-3 rounded-full bg-slate-300 outline outline-2 outline-slate-400 "></div>
                <div id="line" class=" w-1 h-16 bg-slate-300 "></div>
                <div id="end-point" class="  w-3 h-3 rounded-full bg-teal-400 outline outline-2 outline-teal-500"></div>
            </div>
            <div class=" flex flex-col gap-3">
                <h2 class=" text-lg">{{$item->start_city}}</h2>
                <p class=" text-slate-600"><ion-icon class="me-1 mt-1" name="time-outline"></ion-icon>Duration: {{$item->duration}}</p>
                <h2 class=" text-lg">{{$item->arrive_city}}</h2>
                <p>Price:{{$item->price}} DH</p>
            </div>
        </div>
        <div class="flex flex-col grow gap-3">
            <a href="#" class="font-semibold text-black flex justify-center h-10 rounded-lg hover:bg-yellow-200 bg-primary p-2 transition ease-in-out duration-150">Edit</a>
            <form action="{{route('route.delete', ['route'=>$item->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button class=" w-full font-semibold text-black flex justify-center h-10 rounded-lg hover:bg-yellow-200 bg-primary p-2 transition ease-in-out duration-150">Delete</button>
            </form>
        </div>
        
    </div>
    {{-- {{route('route.edit', ['route'=>$item->id])}} --}}
    {{-- {{route('route.delete', ['route'=>$item->id])}} --}}
    <!-- /route card -->
@endforeach