<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2>Add Company</h2>
                    <br>
                    <form action="{{route('companies.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group p-6 text-gray-900">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group p-6 text-gray-900">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group p-6 text-gray-900">
                            <label for="logo">Logo:</label>
                            <input type="file" id="logo" name="logo">
                        </div>
                        <div class="form-group p-6 text-gray-900">
                            <label for="website">Website:</label>
                            <input type="url" id="website" name="website">
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
