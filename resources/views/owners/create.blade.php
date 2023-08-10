@extends('master')

@section('content')
    <div class="flex flex-col">
        <div class="basis-full">
            <h1 class="mb-2 text-2xl font-bold">Create Owner</h1>
        </div>
        @include('owners.form', ['type' => 'create', 'route' =>  route('owner.store')]);
    </div>
@endsection
