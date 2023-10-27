@extends('layouts.master')
@section('title','Redis Home')
@section('content')
<table class="mt-4 table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Total({{count($customers)}})</th>
        <th scope="col">Name</th>
        <th scope="col">Description One</th>
        <th scope="col">Description Two</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($customers as $key=>$customer)
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$customer['name']}}</td>
            <td>{{$customer['description']}}</td>
            <td>{{$customer['content']}}</td>
          </tr>
        @endforeach


    </tbody>
  </table>
@endsection
