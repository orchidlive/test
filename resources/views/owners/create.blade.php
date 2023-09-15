@extends('master')

@section('content')
    <div class="flex flex-col">
        <div class="basis-full">
            <h1 class="mb-2 text-2xl font-bold">Create Owner</h1>
        </div>

        <form class="w-full max-w-lg" action="{{ route('owner.store') }}" method="post">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6 content-center">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 md:items-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="forename">
                        Forename
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight" id="forename" name="forename" type="text" placeholder="Jane">
                    @error('forename')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="surname">
                        Surname
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight" id="surname" name="surname" type="text" placeholder="Doe">
                    @error('surname')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight" id="email" name="email" type="text" placeholder="jane.doe@email.com">
                    @error('email')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                        Phone
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight" id="phone" name="phone" type="text" placeholder="0123456789">
                    @error('phone')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                        Save
                    </button>
                </div>
            </div>

        </form>
    </div>

@endsection
