@extends('layouts.app')
@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 px-3 sm:m-auto w-full lg:w-4/5 block text-center">
                <h1 class="sm:text-white text-3xl lg:text-4xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>  
    
    <div class="sm:grid grid-cols-2 gap-20 w-full lg:w-4/5 mx-auto px-5 py-15 border-b border-gray-200">
        <div class="flex items-center">
            <img src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg" width="500" alt="">
        </div>

        <div class="sm:m-auto mt-5 text-left w-full md:w-4/5 block">
            <h3 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better web developer?
            </h3>
            <p class="py-8 text-gray-500 text-s">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vero mollitia!.
            </p>
            <p class="font-extrabold text-gray-600 text-l pb-9">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam odio incidunt labore, repellat blanditiis reiciendis non, dicta sequi possimus autem necessitatibus aliquam! Nam, adipisci exercitationem commodi quas saepe earum accusantium?
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>
        <span class="block font-extrabold lg:text-4xl text-3xl py-1">
            Ux Design
        </span>
        <span class="block font-extrabold lg:text-4xl text-3xl py-1">
            Project Management
        </span>
        <span class="block font-extrabold lg:text-4xl text-3xl py-1">
            Digital Strategy
        </span>
        <span class="block font-extrabold lg:text-4xl text-3xl py-1">
            Backend Development 
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt amet libero optio recusandae at delectus assumenda harum.
        </p>
    </div>
    <div class="sm:grid grid-cols-2 w-full mx-auto lg:w-4/5">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-lg md:text-xl font-bold py-10">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos cum illo, architecto ratione esse, labore excepturi voluptatem corrupti illum et provident molestias maxime doloremque hic eligendi voluptate earum, harum quas.
                </h3>
                <a href="" class="uppercase bg-transparent text-gray-100 border-2 border-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Fidn Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg" width="500" alt="">
        </div>
    </div>
@endsection