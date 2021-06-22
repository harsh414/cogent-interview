@extends('layouts.app')
@section('content')
    <div class="flex flex-col sm:flex-col md:flex-row ml-4 mb-8">
        <div class="md:w-1/4 md:mb-6 md:mb-0">
          <x-all-category/>
        </div>
        <div class="w-full flex-col">
            <div class="flex">
                <div class="w-1/2">
                    <img src="{{asset('images/mask.png')}}" class="w-full" alt="">
                </div>
                <div class="w-1/2">
                    <img src="{{asset('images/mask2.png')}}" class="w-full" alt="">
                </div>
            </div>
            <div>
                <img src="{{asset('images/mask3.png')}}" class="w-full" alt="">
            </div>
            <div> <!--products -->
                @foreach($categories as $category)
                    @if($category->products()->count() >0)
                        <x-product-component :category="$category"/>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-12 pt-20 w-full text-white text-4xl h-64 text-center" style="background-color: #1D446E">
        FOOTER WILL GO HERE
    </div>
@endsection
