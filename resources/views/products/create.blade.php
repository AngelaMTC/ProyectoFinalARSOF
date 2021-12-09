@extends('layouts.app')

@section('title', 'Create')

@section('content')

<nav class="h-16 flex justify-end py-4 px-16"></nav>
    <a href="{{route('products.index')}}" class="border border-indigo-500 
    rounded px-4 pt-1 h-10 bg-white text-indigo-500 font-semibold mx-2">Products</a>

    <a href="{{route('products.create')}}" class="text-white rounded px-4 pt-1 h-10 bg-indigo-500 font-semibold mx-2
    hover:bg-blue-600">Create</a>

<form action="{{route('products.store')}}" method="POST" class="bg-white w-full p-4 border-gray-100 shadow-xl rounded-lg">
@csrf

<h2 class="text-2xl text-center py-4 mb-4 font-semibold">Create products</h2>

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Title" name="title">
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Subject" name="subject">
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Delivery" name="delivery">

<button type="submit" class="my-3 w-full bg-indigo-500 p-2 font-semibold rounded text-white hover:bg-indigo-500">Create</button>

</form>

@endsection