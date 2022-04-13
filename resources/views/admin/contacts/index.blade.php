
@extends('admin.contacts.layouts.app')



@section('Index', 'Show all contacts')

@section('contact')


<div class="card">


        <div class="card-header">

            @if (auth()->check())
            <div class="mr-2">
                <p>Create a <a href="{{route('contacts.create')}}" class="btn btn-dark">New</a> </p>

            </div>
            @else
                <p>You need to be logged in to add a new contact
                  <a href="{{route('login')}}">Login here</a>

                </p>
            @endif
            @include('admin.includes.alert')
            <form action="" method="post" class="form form-inline">
                @csrf
                <input type="text" name="filter"  class="form-control" placeholder="Name" value ="">
                 <button type="submit" class="btn btn-warning">search</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>

                            <th>Name</th>

                            <th width="300">Actions</th>

                    </tr>
                </thead>

            <tbody>
                @foreach ($contacts as $contact)
         <tr>
                    <td>
                        {{$contact->name}}
                    </td>
                    @if (auth()->check())
                    <td style="width=10px;" >
                        {{-- <a href="{{ route('details.contact.index', $contact->url )}}" class="btn btn-info">Detalhes</a> --}}
                        <a href="{{ route('contacts.edit', $contact->id )}}" class="btn btn-success">edit</a>
                        <a href="{{ route('contacts.show', $contact->id )}}" class="btn btn-warning">Details</a>


                    </td>
                    @else
                <td>

                    <p>You must to be logged in to see this resources</p>
                    <a href="{{route('login')}}">Login here</a>

                </td>



            </tbody>
            @endif
        </tr>
            @endforeach
            </table>
        </div>

        <div class="card-footer">

        </div>
    </div>


@endsection
