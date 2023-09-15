@extends('master')

@section('content')
    <div class="flex flex-col">
        <div class="basis-full">
            <h1 class="mb-2 text-2xl font-bold">Car Owners</h1>
        </div>

        <div class="mb-2 col-end-1">
            <form action="{{ route('owner.create') }}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Add Owner</button>
            </form>
        </div>
        <div class="basis-full">
            <table class="table-auto border-collapse border border-slate-500 shadow-lg">
                <thead>
                    <tr>
                        <th class="bg-blue-100 border text-left px-8 py-4">Forename</th>
                        <th class="bg-blue-100 border text-left px-8 py-4">Surname</th>
                        <th class="bg-blue-100 border text-left px-8 py-4">Email</th>
                        <th class="bg-blue-100 border text-left px-8 py-4">Phone</th>
                        <th class="bg-blue-100 border text-left px-8 py-6">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($owners as $owner)
                        <tr>
                            <td class="border px-8 py-4">{{ $owner->forename }}</td>
                            <td class="border px-8 py-4">{{ $owner->surname }}</td>
                            <td class="border px-8 py-4">{{ $owner->email }}</td>
                            <td class="border px-8 py-4">{{ $owner->phone }}</td>
                            <td class="border px-8 py-4">
                                <a class="text-blue-600 hover:underline" href="{{ route('owner.show', $owner->id) }}">Show</a> |
                                <a class="text-blue-600 hover:underline" href="{{ route('owner.edit', $owner) }}">Edit</a> |
                                <form action="{{route('owner.destroy', $owner->id)}}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn text-blue-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="flex flex-row">
        <div class="mt-5">
            <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>

    </div>

@endsection
