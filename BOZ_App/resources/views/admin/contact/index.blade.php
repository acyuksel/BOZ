@extends('layouts.admin.app')

@section('title')
Contact berichten
@endsection

@section('content')
<div class="container bg-white rounded-sm p-2 shadow">
   <table class="table table-hover table-responsive-sm">
       <thead class="thead-default thead-dark">
           <tr>
               <th>{{__('Naam')}}</th>
               <th>{{__('email')}}</th>
               <th>{{__('datum')}}</th>
               <th></th>
           </tr>
           </thead>
           <tbody>
            @foreach ($contacts as $contact)
                <tr >
                    <td>{{$contact->fullname}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->created_at}}</td>
                    <td class="text-right"><a class="btn btn-primary" href="{{route('contact.show',['contact' => $contact->id])}}" role="button">{{__('Lees bericht')}}</a></td>
                </tr>
            @endforeach
           </tbody>
   </table>
   <div class="d-flex flex-row-reverse">
       {{$contacts->links('vendor.pagination.bootstrap-4')}}
   </div>
</div>



@endsection
