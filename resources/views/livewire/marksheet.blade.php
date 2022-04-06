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

                <form wire:submit.prevent="store">

                @foreach($mark as $marks)
                        <tr class="hover:bg-red-700">
                            <input type="hidden" name="trainee_id[]" value="1">
                            <td class="py-4 px-6 border-b border-grey-light">
                                {{$marks->trainee->first_nm.' '.$marks->trainee->last_nm}}
                                <input type="text" wire:model="trainee" value="{{$marks->trainee->first_nm.' '.$marks->trainee->last_nm}}" hidden disabled>
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                {{$marks->trainee->course}}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                {{$marks->trainee->room}}
                                <input type="text" wire:model="dorm_nm[]" value="{{$marks->trainee->room}}" hidden disabled >
                            </td>
                            @if ($marks->mark === 0)
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ ('Not Mark') }}
                                    <input type="text" wire:model="marking[]" value="{{ ('Not Mark') }}" hidden disabled>
                                </td>
                            @elseif($marks->mark === 1)
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ ('Present') }}
                                    <input type="text" wire:model="marking[]" value="{{ ('Present') }}" hidden disabled>
                                </td>
                            @elseif($marks->mark === 2)
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ ('Absent') }}
                                    <input type="text" wire:model="marking[]" value="{{ ('Absent') }}" hidden disabled>
                                </td>
                                @endif

                                @if ($marks->mark === 0)
                                    <td class="flex justify-center mt-2">
                                        <div  class="px-2">
                                            <button type="submit"  wire:click.prevent="present({{ $marks->id, 1 }})" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Present</button>
                                        </div>
                                        <div  class="px-2">
                                            <button type="submit" wire:click.prevent="absent({{$marks->id,  2 }})"  class="btn btn-primary p-2 text-white rounded bg-black hover:bg-red-600 hover:text-black">Absent</button>
                                        </div>
                                    </td>
                                @elseif ($marks->mark === 1)

                                    <td class="flex justify-center mt-2">
                                        <div>
                                            <button type="submit" wire:click.prevent="absent({{$marks->id,  0 }})"  class="btn btn-primary p-2 text-white rounded bg-black hover:bg-red-600 hover:text-black">Absent</button>
                                        </div>
                                    </td>
                                @elseif ($marks->mark === 2)

                                    <td class="flex justify-center mt-2">
{{--                                        <form  >--}}
                                            <button type="submit"  wire:click.prevent="present({{ $marks->id, 1 }})" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Present</button>
{{--                                        </form>--}}


                                    </td>
                                @endif

                        </tr>
                        @endforeach
                        <button type="submit"  wire:click.prevent="resetStatus" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Reset</button>
                        <button type="submit" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Submit</button>
                    </form>



            </table>

        </div>
    </div>

</div>
