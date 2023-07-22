<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empployee List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2>Edit Employee</h2>
                    <br>
                    <form action="{{route('employees.update', $employee->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group p-6 text-gray-900">
                            <label for="first_name">First Name:</label>
                            <input type="text" id="first_name" name="first_name" value="{{$employee->first_name}}" required>
                        </div>
                        <div class="form-group p-6 text-gray-900">
                            <label for="last_name">Last Name:</label>
                            <input type="text" id="last_name" name="last_name" value="{{$employee->last_name}}" required>
                        </div>
                        <div class="form-group p-6 text-gray-900">
                            <label for="company">Company:</label>
                            <select name="company" id="company">
                                @foreach($companies as $key => $company)
                                <option value="{{$key}}">{{$company}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group p-6 text-gray-900">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="{{$employee->email}}">
                        </div>
                        <div class="form-group p-6 text-gray-900">
                            <label for="phone">Phone:</label>
                            <input type="phone" id="phone" name="phone" value="{{$employee->phone}}">
                        </div>
                        <div class="form-group p-6 text-gray-900">
                            <button type="submit" style="background-color: #0c136c; color: white; padding: 10px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
