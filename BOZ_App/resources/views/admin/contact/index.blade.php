@extends('layouts.admin.app')

@section('title')
{{__('ContactMessages')}}
@endsection

@section('content')
<div class="container p-2 bg-white rounded-sm shadow">
   <table class="table table-hover table-responsive-sm">
       <thead class="thead-default thead-dark">
           <tr>
               <th>{{__('NameLabel')}}</th>
               <th>{{__('Email')}}</th>
               <th>{{__('Date')}}</th>
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
   <div class="flex-row-reverse d-flex">
       {{$contacts->links('vendor.pagination.bootstrap-4')}}
   </div>
</div>
<x-context-hulp message="{{__('IndexContactHulp')}}" />



@endsection
