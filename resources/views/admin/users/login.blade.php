@extends('admin.contacts.layouts.app')



@section('Index', 'Show all contacts')

@section('contact')

<div class="card text-center">
    <div class="card-body">
        <h1>Login to start a new session</h1>
        @include('admin.includes.alert')
        <form action="{{route('login.make')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">
                    <input type="text" class="form-control" name="email"  id="" value="">
                </label>
            </div>
            <div class="form-group">
                <label for="password">
                    <input type="password" class="form-control" name="password" id="" value="">
                </label>
            </div>

            <button class="btn btn-info">Submit</button>
        </form>

    </div>

</div>


@endsection
