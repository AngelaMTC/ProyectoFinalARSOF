@extends('layouts.app')

@section('title', 'Delivery')

@section('content')


<form action="{{route('products.update', $product->id)}}" 
    method="POST" class="bg-white w-full p-4 border-gray-100 shadow-xl rounded-lg">
@csrf
@method('put')

<h2 class="text-2xl text-center py-4 mb-4 font-semibold">Deliver: {{$product->title}}</h2>

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Title" name="title" value="{{$product->title}}" disabled>
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Subject" name="subject" value="{{$product->subject}}" disabled>
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Delivery" name="delivery" value="{{$product->delivery}}" disabled>
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-black-900" placeholder="Status" name="status" value="{{$product->status}}">

<button type="submit" class="my-3 w-full bg-yellow-500 p-2 font-semibold rounded text-white hover:bg-indigo-500">Submit</button>

</form>

@endsection