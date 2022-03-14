<div>
    <div>
        <div class="sm:mx-auto lg:mx-auto w-full h-screen bg-black
                flex items-center shadow-lg"
        >

            <section
                class="w-3/5 p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
                <div class="">
                    @if(session()->has('success'))
                        <div class="bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                            <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                                <path fill="currentColor"
                                      d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
                                ></path>
                            </svg>
                            <span class="text-green-800"> {{ session('success') }} </span>
                        </div>
                    @endif
                    <div class="">
                        <h2 class="text-3xl font-bold mb-10 text-gray-800 text-center">New Trainee</h2>

                        <form class="space-y-5 space-x-1" wire:submit.prevent="newtrainee">
                            <div class="grid grid-cols-3 gap-6 mt-4 sm:grid-cols-2">
                                <div>
                                    <label class="block mb-1 font-bold text-gray-500">First Name</label>
                                    <input type="text" wire:model="first_nm" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                    @error('first_nm') <span class="error text-red-600">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block mb-1 font-bold text-gray-500">Last Name</label>
                                    <input type="text" wire:model="last_nm" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                    @error('last_nm') <span class="error text-red-600">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block mb-1 font-bold text-gray-500">Student ID#</label>
                                    <input type="text" wire:model="trainee_ID" class="w-full border-2 border-gray-200 p-2.5 rounded outline-none focus:border-purple-500">
                                    @error('trainee_ID') <span class="error text-red-600">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block mb-1 font-bold text-gray-500">Date of Birth</label>
                                    <input type="date" wire:model="DOB" class="w-full border-2 border-gray-200 p-2.5 rounded outline-none focus:border-purple-500">
                                    @error('DOB') <span class="error text-red-600">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block mb-1 font-bold text-gray-500">Telephone Number</label>
                                    <input type="text" wire:model="telephone" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                    @error('telephone') <span class="error text-red-600">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block mb-1 font-bold text-gray-500">Gender</label>
                                    <select wire:model="gender" id="gender" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                        <option value="">Select a Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    @error('gender') <span class="error text-red-600">{{ "Select You Gender" }}</span> @enderror

                                </div>
                                <div>
                                    <label class="block mb-1 font-bold text-gray-500">Dorm Room</label>
                                    <select wire:model="room" id="" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                        <option>Select a Room</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="A4">A4</option>
                                        <option value="A5">A5</option>
                                        <option value="A6">A6</option>
                                        <option value="A7">A7</option>
                                        <option value="A8">A8</option>
                                        <option value="A9">A9</option>
                                        <option value="A10">A10</option>
                                        <option value="A11">A11</option>
                                        <option value="A12">A12</option>
                                        <option value="B14">B14</option>
                                        <option value="B15">B15</option>
                                        <option value="B16">B16</option>
                                        <option value="B17">B17</option>
                                        <option value="B18">B18</option>
                                        <option value="B19">B19</option>
                                        <option value="B20">B20</option>
                                        <option value="B21">B21</option>
                                        <option value="B22">B22</option>
                                        <option value="B23">B23</option>
                                        <option value="B24">B24</option>
                                        <option value="C27">C27</option>
                                        <option value="C28">C28</option>
                                        <option value="C29">C29</option>
                                        <option value="C30">C30</option>
                                    </select>
                                    @error('room') <span class="error text-red-600">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block mb-1 font-bold text-gray-500">Course</label>
                                    <select wire:model="course"  class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                        <option >Select a Program</option>
                                        <option value="ES">Executive Secretary (ES)</option>
                                        <option value="AA">Administrator Assistant (AA)</option>
                                        <option value="NS">Network Support (NS)</option>
                                        <option value="Amber">Amber Group</option>
                                        <option value="F&B">Food & Beverage (F&B)</option>
                                        <option value="GA">General Account (GA)</option>
                                    </select>
                                    @error('course') <span class="error text-red-600">{{ 'The Course field is required' }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block mb-1 font-bold text-gray-500">Email</label>
                                    <input type="email" wire:model="email" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                    @error('email') <span class="error text-red-600">{{ $message }}</span> @enderror
                                </div>

                                {{--                    <div>--}}
                                {{--                        <label class="block mb-1 font-bold text-gray-500">Password</label>--}}
                                {{--                        <input type="text" wire:model="password" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">--}}
                                {{--                        @error('password') <span class="error text-red-600">{{ $message }}</span> @enderror--}}
                                {{--                    </div>--}}

                            </div>

                            <div class="flex justify-end mt-6 space-x-1">
                                <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500
                                   rounded-md hover:bg-green-600 focus:outline-none focus:bg-gray-600">
                                    Save
                                </button>
{{--                                <a class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-red-500--}}
{{--                            rounded-md hover:bg-red-600 focus:outline-none focus:bg-gray-600" href="{{ url('dashboard.blade.php') }}">back</a>--}}
                            </div>
                        </form>

                    </div>

                </div>
            </section>
        </div>
    </div>
</div>
