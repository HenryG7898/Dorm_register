<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
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

                <form method="post" action="{{ url('Register-mark') }}">
@csrf
                    @foreach($mark as $marks)
                        <tr class="hover:bg-red-700">
                            <td><input type="text" name="trainee_id[]" value="{{$marks->id}}"  readonly></td>
                            <td><input type="text" name="student_id[]" value="{{$marks->student_id}}" hidden></td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                {{$marks->trainee->first_nm.' '.$marks->trainee->last_nm}}
                                <input type="text" name="trainee[]" value="{{$marks->trainee->first_nm.' '.$marks->trainee->last_nm}}" >
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                {{$marks->trainee->course}}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                {{$marks->trainee->room}}
                                <input type="text" name="dorm_nm[]" value="{{$marks->trainee->room}}"   >
                            </td>
                            @if ($marks->mark === 0)
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ ('Not Mark') }}
                                    <input type="text" name="marking[]" value="{{ ('Not Mark') }}" >
                                </td>
                            @elseif($marks->mark === 1)
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ ('Present') }}
                                    <input type="text" name="marking[]" value="{{ ('Present') }}" >
                                </td>
                            @elseif($marks->mark === 2)
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ ('Absent') }}
                                    <input type="text" name="marking[]" value="{{ ('Absent') }}">
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
</body>
</html>
