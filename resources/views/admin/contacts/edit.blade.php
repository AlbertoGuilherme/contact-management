@extends('admin.contacts.layouts.app')
@section('title', 'Edit Contact')

@section('contact')
<h1>Edit Contact {{$contact->name}}</h1>

<div class="card">
        <div class="card-body">
                <form action="{{route('contacts.update', $contact->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        @include('admin.contacts._partials.form')
                        <div class="form-group">
                            <button type="submit"  class="btn btn-outline-dark">Update</button>
                        </div>
                    </form>

                </div>
 </div>

@endsection
