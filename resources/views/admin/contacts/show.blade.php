@extends('admin.contacts.layouts.app')
@section('title', "{$contact->name}")

@section('contact')
<h1>Details of Contact <b>{{$contact->name}}</b></h1>
<div class="card">

<div class="card-body">

<table class="table table-stripped">
    <tr>
       <thead>
           <th> <b>Name</b>
             {{$contact->name}}</th>
        <th><b>Email</b>
             {{$contact->email}}</th>
        <th>    <b>Number </b>
             {{$contact->contact }}</th>
        <th>  </th>
    </tr>
</thead>
<tbody>
    <td> <a href="{{route('contacts.edit',$contact->id)}}">
        <button type="submit" class="btn btn-info">Edit  </button></a>
    </td>
    <td>
        <form action="{{route('contacts.destroy',$contact->id)}}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete  </button>
                   </form>
    </td>
</tbody>
</table>









</div>
</div>





@endsection
