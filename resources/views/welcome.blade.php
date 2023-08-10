@extends('master')

@section('content')
    <div class="flex flex-col">
        <div class="basis-full">
            <h1 class="mb-2 text-2xl font-bold">Car Owners</h1>
        </div>
        <div class="basis-full">
            <table class="table-auto border-collapse border border-slate-500 shadow-lg">
                <thead>
                    <tr>
                        <th class="bg-blue-100 border text-left px-8 py-4">Forename</th>
                        <th class="bg-blue-100 border text-left px-8 py-4">Surname</th>
                        <th class="bg-blue-100 border text-left px-8 py-4">Email</th>
                        <th class="bg-blue-100 border text-left px-8 py-4">Phone</th>
                        <th class="bg-blue-100 border text-left px-8 py-4"></th>
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
                                <div>
                                    <a class="text-blue-600 hover:underline" href="{{ route('owner.show', $owner->id) }}">Show</a>
                                </div>
                                <div>
                                    <form action="{{ route('owner.destroy', $owner->id) }}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        @csrf
                                        <button type="submit" onclick="return confirm('Are you sure?')" class="text-blue-600 hover:underline">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4 flex flex-row">
        <a href="{{route('owner.create')}}" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
            Create Owner
        </a>
    </div>

    <div class="flex flex-row">
        <div class="mt-5">
            <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>

    </div>

@endsection
