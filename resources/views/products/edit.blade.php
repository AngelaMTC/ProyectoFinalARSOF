@extends('layouts.app')

@section('title', 'Edit')

@section('content')


<form action="{{route('products.update', $product->id)}}" 
    method="POST" class="bg-white w-full p-4 border-gray-100 shadow-xl rounded-lg">
@csrf
@method('put')

<h2 class="text-2xl text-center py-4 mb-4 font-semibold">Edit product: {{$product->title}}</h2>

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Title" name="title" value="{{$product->title}}">
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Subject" name="subject" value="{{$product->subject}}">
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Delivery" name="delivery" value="{{$product->delivery}}">

<button type="submit" class="my-3 w-full bg-yellow-500 p-2 font-semibold rounded text-white hover:bg-indigo-500">Edit</button>

</form>

@endsection