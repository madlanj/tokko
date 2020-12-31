@extends('layouts.app')
@section('content')
   <div class="flex flex-wrap">

    <div class="w-full md:w-2/12 sr-only md:not-sr-only">
        <div class="bg-white mt-2 px-8 py-6">
            <h1 class="font-bold border-b text-xl">
                Kategori
            </h1>
            @foreach ($categories as $category)
                <a wire:click="selectCategory({{ $category->id}})" class="my-2 flex text-gray-700 hover:text-pink-600">{{ $category->name }} (0)</a>
            @endforeach
        </div>
    </div>

    <div class="w-full md:w-10/12">
        <div class="flex flex-wrap">
            <input type="text" wire:model="search" class="focus:outline-none focus:shadow-outline border border-gray500 rounded-md py-2 px-4 block w-full mt-2 mb-2 mx-2" placeholder="cari produk...">
            @foreach ($products as $product)
                <div class="w-1/2 md:w-1/3 lg:w-1/4 p-2">
                    <a href="{{ route('product.detail', $product)}}">
                        <div class="flex justify-center flex-col bg-white shadow-md p-4 rounded-md hover:bg-pink-200">
                            <div class="flex justify-center">
                                <img src="{{ $product->getImage() }}" alt="{{ $product->name }}" class="h-32 w-32 md:h-48 md:w-48">
                            </div>

                            <div class="text-left">
                                <span class="font-bold">{{ $product->name }}</span>
                                <p>{{ $product->description }}</p>
                                <p class="text-red-400">{{ $product->price }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        {{$products->links('vendor.pagination.tailwind')}}
    </div>

</div> 
@endsection

