<!-- resources/views/form.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Submit Form') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-6">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="post" action="{{ url('/form') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="title" class="block text-gray-600 text-sm font-semibold mb-2">Title</label>
                        <input type="text" name="title" id="title" class="form-input w-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-gray-600 text-sm font-semibold mb-2">Description</label>
                        <textarea name="description" id="description" class="form-input w-full" rows="4" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="category" class="block text-gray-600 text-sm font-semibold mb-2">Category</label>
                        <input type="text" name="category" id="category" class="form-input w-full" required>
                    </div>

                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-app-layout>
