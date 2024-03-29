@foreach ($schedules as $item)
    <div class=" flex flex-wrap w-full -z-10 bg-cyan-300 p-3 rounded-xl items-center shadow-xl">
        <img class=" w-20 h-20 rounded-full" src="public\IMG\user_av.png" alt="Travel Image">
        <div class=" flex grow ps-4 pt-3 gap-3">
            <div class=" flex flex-col items-center py-2">
                <div id="start-point" class=" w-3 h-3 rounded-full bg-slate-300 outline outline-2 outline-slate-400 "></div>
                <div id="line" class=" w-1 h-16 bg-slate-300 "></div>
                <div id="end-point" class="  w-3 h-3 rounded-full bg-teal-400 outline outline-2 outline-teal-500"></div>
            </div>
            <div class=" flex flex-col gap-3">
                <h2 class=" text-lg"></h2>
                <p class=" text-slate-600"><ion-icon class="me-1 mt-1" name="time-outline"></ion-icon>Duration: 3 hours</p>
                <h2 class=" text-lg">{{Route::find(1)->where('id', $item->route_id)->arrive_city}}</h2>
            </div>
        </div>
        <div id="info" class=" grow">
            <p>Available Seats: 10</p>
            <p>Price: $50</p>
            <p>Payment method:</p>
            <p>Driver Reviews: 4.5/5</p>
        </div>
        <a href="#" class="font-semibold text-black flex justify-center h-10 rounded-lg hover:bg-yellow-200 bg-primary p-2 transition ease-in-out duration-150">Reserve Now</a>
    </div>
@endforeach
