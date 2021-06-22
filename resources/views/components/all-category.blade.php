<div>
    <ul class="font-bold bg-white">
        @foreach($categories as $category)
            <li class="cursor-pointer flex items-center space-y-4 justify-start">
                <div class="pt-3 pl-3">
                    <img src="{{asset('icons/gauge.png')}}" class="w-7 h-6">
                </div>
                <div class="text pl-6">
                    {{$category->category_name}}
                </div>
            </li>
        @endforeach
    </ul>
</div>
