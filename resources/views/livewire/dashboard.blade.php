<div class="mx-auto py-10">
    <div class="text-center">
        <div class=" w-1/4 text-white flex flex-col p-6 justify-center items-center my-5 m-auto">
            <h1 class="text-black text-5xl font-bold">Student List</h1>
        </div>
    </div>

    <div x-show="isOpen" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95"  >
        <table class="w-4/5 mx-auto rounded-md border-collapse block md:table">
            <thead class="bg-black">
            <tr class="text-sm">
                <th class="p-3 font-bold uppercase text-white ">First Name</th>
                <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Last Name</th>
                <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Email</th>
                <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Date of Birth</th>
                <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Dorm</th>
                <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Phone Number</th>
                <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Gender</th>
                <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Actions</th>
            </tr>
            </thead>
            @foreach($trainees as $trainee)
                @if ($trainee->role === 'trainee')
                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->first_nm }}</td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->last_nm }}</td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->email }}</td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->DOB }}</td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{$trainee->room}}</td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">(876) {{$trainee->telephone}}</td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->gender }}</td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">
                            <a href="{{ url('editstudent/'.$trainee->id) }}" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >Edit</a>
                            <a href="" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >View</a>
                        </td>
                    </tr>
                @endif
            @endforeach
        </table>
            <div>
        </div>
    </div>
</div>
