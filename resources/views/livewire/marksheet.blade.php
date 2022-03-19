<div>
    <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
            <table class="text-left w-full border-collapse">
                <thead>
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Trainee</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Course</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Dorm</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Status</th>
                </tr>
                </thead>


                @foreach($mark as $marks)
                    <tr class="hover:bg-red-700">
                        <td class="py-4 px-6 border-b border-grey-light">{{$marks->trainee->first_nm.' '.$marks->trainee->last_nm}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$marks->trainee->course}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$marks->trainee->room}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            Present
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
