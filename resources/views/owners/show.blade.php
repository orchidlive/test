@extends('master')

@section('content')
<div class="flex flex-col gap-2 text-lg">
    <div class="flex flex-row gap-4">
        <div><h2 class="font-bold">Name:</h2></div>
        <div >{{ $owner->forename . ' ' . $owner->surname }}</div>
    </div>

    <div class="flex flex-row gap-4">
        <div><h2 class="font-bold">Email:</h2></div>
        <div>{{ $owner->email }}</div>
    </div>

    <div class="flex flex-row gap-4">
        <div><h2 class="font-bold">Phone:</h2></div>
        <div>{{ $owner->phone }}</div>
    </div>

    <div class="flex flex-row gap-4">
        <div><h2 class="font-bold">Cars owned:</h2></div>
        <div>{{ count($owner->cars) }}</div>
    </div>
    <hr/>

    @if($count = count($owner->cars))
        <h1 class="py-1 font-bold">Car Details:</h1>

        @foreach($owner->cars as $car)
            <div class="flex flex-col gap-2 ml-8">
                <div class="flex flex-row gap-4 place-content-baseline">
                    <div><h2 class="font-bold">Make:</h2></div>
                    <div>{{ $car->make }}</div>
                </div>

                <div class="flex flex-row gap-4">
                    <div><h2 class="font-bold">Model:</h2></div>
                    <div>{{ $car->model }}</div>
                </div>

                <div class="flex flex-row gap-4">
                    <div><h2 class="font-bold">Colour:</h2></div>
                    <div>{{ $car->color }}</div>
                </div>
            </div>

            <hr/>

        @endforeach

    @endif



</div>
@endsection
