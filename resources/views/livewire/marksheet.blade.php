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
                    <th class="justify-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>
                </tr>
                </thead>


                @foreach($mark as $marks)
                    <tr class="hover:bg-red-700">
                        <td class="py-4 px-6 border-b border-grey-light">{{$marks->trainee->first_nm.' '.$marks->trainee->last_nm}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$marks->trainee->course}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$marks->trainee->room}}</td>
{{--                        <td class="py-4 px-6 border-b border-grey-light">--}}
                        @if ($marks->mark === 0)
                            <td class="py-4 px-6 border-b border-grey-light">{{ ('Pending') }}</td>
                        @elseif($marks->mark === 1)
                            <td class="py-4 px-6 border-b border-grey-light">{{ ('Approve') }}</td>
                        @elseif($marks->mark === 2)
                            <td class="pC">{{ ('Reject') }}</td>
                            @endif
{{--                        </td>--}}

                        @if ($marks->mark === 0)
                            <td class="flex justify-center">
                                <form wire:submit.prevent="present" class="px-2">

                                    <button type="submit"  value="1" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Approve</button>
                                </form>
                                <form  >

                                    <button type="submit"  value="2" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-red-600 hover:text-black">Reject</button>
                                </form>
                            </td>
                        @else

                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
