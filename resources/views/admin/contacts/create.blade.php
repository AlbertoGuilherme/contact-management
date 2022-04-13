@extends('admin.contacts.layouts.app')



@section('Create', 'Create Contact')

@section('contact')
@if (auth()->check())
<h1>Create a new contact</h1>
<div class="card">
    <div class="card-body">
        <form action="{{route('contacts.store')}}" method="post">
            @csrf
            @include('admin.contacts._partials.form')
            <button class="btn btn-warning">create</button>
        </form>
    </div>
</div>
@else
<p>You must to be logged in to see this resources
   <a href="{{route('login')}}">Login here</a>
</p>
@endif


@endsection
