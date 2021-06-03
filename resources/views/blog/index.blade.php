@extends('layouts.app')
@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-4xl md:text-5xl lg:text-6xl">Blog Posts</h1>
        </div>
    </div>
@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl px-3 py-4">
            {{session()->get('message')}}
        </p>
    </div>
    
@endif
@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
        href="/blog/create"
        class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Create Post</a>
    </div>
    
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-full px-5 lg:w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="flex items-center">
            <img src="{{ asset('images/'.$post->image_path) }}" width="500" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 mt-5 font-bold text-3xl lg:text-4xl pb-4">{{$post->title}}</h2>
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{$post->user->name}}</span>
                , Created on {{date('jS M Y',strtotime($post->updated_at))}}
            </span>
            <p class="text-lg lg:text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{$post->description}}
            </p>
            <a href="/blog/{{$post->slug}}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading</a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a 
                        href="/blog/{{$post->slug}}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit
                    </a>
                </span>

                <span class="float-right">
                    <form 
                        action="/blog/{{$post->slug}}" 
                        method="post">
                        @csrf
                        @method('delete')
                        <button 
                            type="submit"
                            class="text-red-700 pr-3">
                            Delete
                        </button>
                    </form>
                </span>
                
            @endif
        </div>
    </div>
    
@endforeach
    
@endsection