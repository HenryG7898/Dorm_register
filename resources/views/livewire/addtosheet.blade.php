<div>
    <form wire:submit.prevent="addtrainee">


        <label for="Student">Trainee Name</label>

            <select wire:model="student_id" id="Student" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                <option value="">Select A Trainee</option>
                @foreach ($trainee as $item)
                    @if ($item->role === 'trainee')
                        <option value="{{$item->id}}">{{$item->first_nm.' '.$item->last_nm}}</option>
                    @endif
                @endforeach
            </select>

        @error('student_id') <span class="error text-red-600">{{ $message }}</span> @enderror
        <button type="submit">Save</button>
    </form>
</div>

