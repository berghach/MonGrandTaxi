<div class=" flex justify-center w-screen">
    <form action="{{route('schedule.add')}}" method="post" class="flex max-md:flex-col justify-center items-center gap-2 bg-primary p-4 w-3/4  rounded-2xl">
        @csrf
        <!-- for admin -->
        @if (Auth::User()->user_role == 'admin')
            <div class=" bg-yellow-100 rounded-lg p-3 w-1/4 max-md:w-full">
                <input class="bg-yellow-100 focus:outline-none w-full" list="Drivers" type="text" id="driver" name="driver" placeholder="Driver" value="">
                <datalist class="bg-yellow-100 focus:outline-none w-full" id="Drivers" name="Drivers">
                    <option value="email1">driver 1</option>
                    <option value="email2">driver 2</option>
                </datalist>
            </div>
        @endif
        <!-- /for admin -->
        <div class=" bg-yellow-100 rounded-lg p-3 w-1/4 max-md:w-full">
            <input class="bg-yellow-100 focus:outline-none w-full" type="text" id="driver" name="driver" placeholder="Driver" value="{{Auth::User()->id}}">
        </div>
        <div class=" bg-yellow-100 rounded-lg p-3 w-1/4 max-md:w-full">
            <select class="bg-yellow-100 focus:outline-none w-full" id="route" name="route" required>
                <option value="" disabled selected>Route</option>
                @foreach ($routes as $item)
                    <option value="{{$item->id}}">{{$item->start_city}} à {{$item->arrive_city}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col bg-yellow-100 p-3 w-1/4 rounded-lg max-md:w-full">
            <label class="text-xs font-semibold" for="date">Choose the date:</label>
            <hr class="bg-amber-400 h-[2px] w-full">
            <input class="bg-yellow-100 w-full" type="date" id="date" name="date" required>
        </div>
        <x-submit-button>Add schedule</x-submit-button>
    </form>
</div>