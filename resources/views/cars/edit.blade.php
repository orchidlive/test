@extends('master')

@section('content')
    <div class="flex flex-col">
        <div class="basis-full">
            <h1 class="mb-2 text-2xl font-bold">Create Car</h1>
        </div>

        <form class="w-full max-w-lg" action="{{ route('owner.cars.update', [$owner, $car]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="flex flex-wrap -mx-3 mb-6 content-center">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 md:items-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="make">
                        Make
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight" id="make" name="make" type="text" placeholder="Mini" value="{{ $car->make }}">
                    @error('make')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="model">
                        Model
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight" id="model" name="model" type="text" placeholder="Cooper" value="{{ $car->model }}">
                    @error('model')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="color">
                        Color
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight" id="colour" name="color" type="text" placeholder="Orange" value="{{ $car->color }}">
                    @error('email')
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
