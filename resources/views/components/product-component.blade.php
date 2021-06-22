<div class="mt-20">
    <div class="flex items-center justify-between">
        <div class="text-gray-900 font-extrabold text-2xl" style="color: #1D446E">{{$category->category_name}}</div>
        <div><a href="" class="px-2 py-1 bg-blue-600">View all</a></div>
    </div>
    <div class="grid grid-cols-1 mt-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3">
        @foreach($category->products()->get() as $product)
            <div>
                <div>
                    <img src="{{asset('images/image32.png')}}" class="w-full h-64" alt="">
                </div>
                <div class="text-left text-lg text-gray-900 font-bold pt-1">
                    {{$product->product_name}}
                </div>
                <div class="line-through text-red-200 text-sm">
                    Rs.{{$product->mrp}}
                </div>
                <div class="text-xl font-extrabold" style="color: #1D446E">
                    Rs.{{$product->price}}
                </div>
            </div>
        @endforeach
    </div>
</div>
