<nav class="border-b lg:z-40 mb-4" style="width: 100vw;background-color: #1D446E">
    <div class="container px-4 mx-auto px-4 py-3">
        <ul class="text-white flex flex-col lg:flex-row space-y-5 lg:space-y-0 justify-around items-center">
            <li>
                <a href="" class="text-lg">
                    LOGO HERE
                </a>
            </li>
            <li>
                <div class="flex" x-data="{allCategory:false}">
                    <div  @click="allCategory=!allCategory" id="category" class="cursor-pointer pl-2 bg-white pt-2 border-none w-32 md:w-44 h-10 font-bold" style="color:#F05538">
                        All Categories
                    </div>
                        <div x-show="allCategory"> <!--modal for categories -->
                            <div class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto">
                                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                    <div class="bg-gray-200 rounded">
                                        <div class="flex justify-end pr-4 pt-2">
                                            <button @click="allCategory=false" class="bg-black text-3xl leading-none hover:text-gray-300">&times;
                                            </button>
                                        </div>
                                        <div class="modal-body px-8 py-8">
                                            <div class="" >
                                                <div class="grid grid-cols-2 text-gray-900 mt-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                                    @foreach($category as $c)
                                                        <div class="border text-center border-gray-400 w-48 h-12 text-sm rounded-xl">
                                                        {{$c->category_name}}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <input type="text" class="w-40 md:w-64 h-10 pl-4 text-gray-900 bg-white pr-8">
                    <div style="background-color: #F05538" class="pt-1 w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </li>
            <li class="mt-3 md:mt-0">
                <div class="flex text-xs" x-data="{showAuth:false}">
                    <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" class="w-10 h-10 rounded-full" alt="">
                    <div class="pl-2 pt-1 cursor-pointer">
                        @if (Route::has('login'))
                            <div class="px-3 pt-3 sm:block">
                                @auth
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a href="{{route('logout')}}"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" @click.prevent="showAuth=!showAuth" class="text-sm text-white underline">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                    <div x-show="showAuth">
                        <div class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto">
                            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                <div class="bg-white rounded">
                                    <div class="flex justify-end pr-4 pt-2">
                                        <button
                                            @click="showAuth = false"
                                            class="text-3xl bg-gray-900 leading-none hover:text-gray-300">&times;
                                        </button>
                                    </div>
                                    <div class="modal-body flex justify-between items-center px-8 py-8">
                                        <div class="w-1/2 h-80" style="background-color: #1D446E">
                                            <div class="text-center mt-5 text-white text-3xl" style="background-color: #1D446E">
                                                Welcome User
                                            </div>
                                        </div>
                                        <div class="w-1/2"> <!--signIn -->
                                            <div class="w-full max-w-xs">
                                                <div class="text-black mb-2 ml-6 text-lg text-left text-4xl font-semibold">Sign In</div>
                                                <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                                    @csrf
                                                    <div class="mb-4 text-black">
                                                        <label class="block text-black text-sm font-bold mb-2" for="username">
                                                            Email
                                                        </label>
                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="mb-6 text-black">
                                                        <label for="password" class="block text-black text-sm font-bold mb-2">{{ __('Password') }}</label>
                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" required autocomplete="current-password">

                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="flex-col text-black items-center justify-between">
                                                        <button class="w-full hover:bg-blue-700 text-white font-white font-extrabold py-2 px-4 rounded focus:outline-none focus:shadow-outline" style="background-color: #F05538" type="submit">
                                                            {{ __('Login') }}
                                                        </button>
                                                        <a class="inline-block align-baseline font-bold text-sm hover:text-blue-800" href="{{ route('password.request') }}" style="color: #F05538">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="mt-3 md:mt-0">
                <div class="flex text-xs">
                    <img src="https://image.flaticon.com/icons/png/128/484/484167.png" class="w-8 h-8 rounded-full" alt="">
                    <div class="pl-2 pt-1">
                        <div>
                            Track
                        </div>
                        <div>
                            Order
                        </div>
                    </div>
                </div>
            </li>
            <li class="mt-3 md:mt-0">
                <div class="flex items-center text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <div class="pl-4">
                        Your Order
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
