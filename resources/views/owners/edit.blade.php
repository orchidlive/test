@extends('master')

@section('content')
    <div class="flex flex-col">
        <div class="basis-full">
            <h1 class="mb-2 text-2xl font-bold">Edit Owner</h1>
        </div>
        @include('owners.form', ['type' => 'edit', 'route' =>  route('owner.update', $owner->id), 'owner' => $owner]);
    </div>
@endsection
