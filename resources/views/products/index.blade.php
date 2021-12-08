@extends('layouts.app')

@section('title', 'Admin')

@section('content')
<nav class="h-16 flex justify-end py-4 px-16"></nav>
    <a href="{{route('products.index')}}" class="border border-indigo-500 
    rounded px-4 pt-1 h-10 bg-white text-indigo-500 font-semibold mx-2">Products</a>

    <a href="{{route('products.create')}}" class="text-white rounded px-4 pt-1 h-10 bg-indigo-500 font-semibold mx-2
    hover:bg-blue-600">Create</a>

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-4 mx-2">

    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-indigo-500 text-white">
          <th class="w-20 py-4 ...">ID</th>
          <th class="w-1/10 py-4 ...">Title</th>
          <th class="w-1/8 py-4 ...">Subject</th>
          <th class="w-1/8 py-4 ...">Delivery</th>
          <th class="w-28 py-4 ...">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $row)

        <tr>
          <td class="py-3 px-6">{{$row->id}}</td>
          <td class="p-3 text-center">{{$row->title}}</td>
          <td class="p-3 text-center">{{$row->subject}}</td>
          <td class="p-3 text-center">{{$row->delivery}}</td>
          <td class="p-3 flex justify center">

              <form method="POST" action="{{ url('/products/'. $row->id) }}">
              @csrf
              @method('delete')
              <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
              <i class="fas fa-trash"></i></button>
            </form>
              <a href="{{ url('/products/'. $row->id) }}" 
              class="bg-green-500 text-white px-3 py-1 rounded-sm">
            <i class="fas fa-pen"></i></a>
          </td>
        </tr>
        
        @endforeach

      </tbody>
    </table>
</div>

@endsection