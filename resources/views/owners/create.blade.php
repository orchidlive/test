@extends('master')

@section('content')
    <div class="flex flex-col">
        <div class="basis-full">
            <h1 class="mb-2 text-2xl font-bold">Create Owner</h1>
        </div>

        <form class="w-full max-w-sm" method="POST" action="{{ route('owner.store') }}">
            @csrf
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="forename">
                        {{ __('Forename') }}
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input class="@error('forename') text-red-900 placeholder-red-700 border border-red-500 @enderror bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                           name="forename"
                           type="text"
                           placeholder="Jane"
                           required
                           autofocus
                           value="{{ old('forename')}}"
                    >
                    @error('forename')
                        <span class="text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="surname">
                        {{ __('Surname') }}
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input class="@error('surname') text-red-900 placeholder-red-700 border border-red-500 @enderror bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                           name="surname"
                           type="text"
                           placeholder="Doe"
                           required
                           value="{{ old('surname')}}"
                    >
                    @error('surname')
                        <span class="text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="email">
                        {{ __('Email') }}
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input class="@error('email') text-red-900 placeholder-red-700 border border-red-500 @enderror bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                           name="email"
                           type="email"
                           placeholder="jane@doe.com"
                           required
                           value="{{ old('email')}}"
                    >
                    @error('email')
                        <span class="text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="phone">
                        {{ __('Phone') }}
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input class="@error('phone') text-red-900 placeholder-red-700 border border-red-500 @enderror bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                           name="phone"
                           type="text"
                           placeholder="+441234 567890"
                           value="{{ old('phone')}}"
                    >
                    @error('phone')
                        <span class="text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                        Create Owner
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
