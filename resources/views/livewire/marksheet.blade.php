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
                        <th class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>
{{--                        @if ($mark[0]->mark == 0)--}}
{{--                            <td class="py-4 px-6 border-b border-grey-light">{{ ('Not Mark') }}</td>--}}

{{--                        @endif--}}
{{--                        @if (!$mark[0]->mark == 2)--}}
{{--                            <th class="justify-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>--}}
{{--                        @else--}}
{{--                            bbbr--}}
{{--                            <th class="justify-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>--}}
{{--                        @endif--}}
                    </tr>
                </thead>


                @foreach($mark as $marks)
                    <tr class="hover:bg-red-700">
                        <td class="py-4 px-6 border-b border-grey-light">{{$marks->trainee->first_nm.' '.$marks->trainee->last_nm}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$marks->trainee->course}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$marks->trainee->room}}</td>
{{--                        <td class="py-4 px-6 border-b border-grey-light">--}}
                        @if ($marks->mark === 0)
                            <td class="py-4 px-6 border-b border-grey-light">{{ ('Not Mark') }}</td>
                        @elseif($marks->mark === 1)
                            <td class="py-4 px-6 border-b border-grey-light">{{ ('Present') }}</td>
                        @elseif($marks->mark === 2)
                            <td class="py-4 px-6 border-b border-grey-light">{{ ('Absent') }}</td>
                            @endif
{{--                        </td>--}}

                        @if ($marks->mark === 0)
                            <td class="flex justify-center">
                                <form  class="px-2">
                                    <button type="submit"  wire:click.prevent="present({{ $marks->id, 1 }})" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Present</button>
                                </form>
                                <form  >
                                    <button type="submit" wire:click.prevent="absent({{$marks->id,  2 }})"  class="btn btn-primary p-2 text-white rounded bg-black hover:bg-red-600 hover:text-black">Absent</button>
                                </form>
                            </td>
                        @elseif ($marks->mark === 1)

                            <td class="flex justify-center">
                                <form  >
                                    <button type="submit" wire:click.prevent="absent({{$marks->id,  2 }})"  class="btn btn-primary p-2 text-white rounded bg-black hover:bg-red-600 hover:text-black">Absent</button>
                                </form>
                            </td>
                        @elseif ($marks->mark === 2)

                            <td class="flex justify-center">
                                <form  >
                                    <button type="submit"  wire:click.prevent="present({{ $marks->id, 1 }})" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Present</button>

                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
