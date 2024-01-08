<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: gainsboro;
        }

        header {
            background-color: #333;
            padding: 0px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        section {
            text-align: center;
            padding: 30px 150px; /* top right bottom left */
        }

        .product-card {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .product-card img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <!--Nav-->
        <nav id="header" class="w-full z-30 top-0 py-1/16 pt-1/32 pb-1/32">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-3 py-0">
        <label for="menu-toggle" class="cursor-pointer md:hidden block">
            <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
            <nav>
                <ul class="md:flex items-center justify-between text-xs text-gray-700 pt-1 md:pt-0">
                    <li><a class="inline-block no-underline hover:text-black hover:underline py-1 px-1 md:px-2 text-base" href="#">Shop</a></li>
                    <li><a class="inline-block no-underline hover:text-black hover:underline py-1 px-1 md:px-2 text-base" href="#">About</a></li>
                </ul>
            </nav>
        </div>

        <div class="order-1 md:order-2">
            <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-white-800 text-sm " href="#">
                <svg class="fill-current text-white-800 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                </svg>
                UDesign
            </a>
        </div>

        <div class="order-2 md:order-3 flex items-center" id="nav-content">
            @if (Route::has('login'))
            <div class="sm:top-0 sm:right-0 p-1 md:p-3 text-right z-10">
                @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <circle fill="none" cx="12" cy="7" r="3" />
                        <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                    </svg>
                </a>
                @else
                <a href="{{ route('login') }}" class="font-semibold text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-1 md:ml-2 font-semibold text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
                @endauth
            </div>
            @endif

            <a class="pl-1 md:pl-2 inline-block no-underline hover:text-black" href="#">
                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                    <circle cx="10.5" cy="18.5" r="1.5" />
                    <circle cx="17.5" cy="18.5" r="1.5" />
                </svg>
            </a>
        </div>
    </div>
</nav>





<!-- end of nav bar -->
    </header>

    <section style="position: relative; padding: 0px; height: 550px;">
    <img src="{{ asset('images/home.jpg') }}" alt="Description Image" style="width: 100%; height: 100%; filter: blur(0px);">
    <p style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 50%; padding: 10px; box-sizing: border-box; margin: 0; font-size: 40px; font-family: 'Your Chosen Font', sans-serif; font-style: italic; color: #fff;"> Elevate Your Wardrobe,<br> One Design at a Time</p>

    </section>

    



    <section >
    <h2 class="text-4xl font-bold text-black text-left ml-0">Store</h2><br>


    <!-- BLOG SECTION -->
<section class="text-gray-600 body-font p-0">
    <div class="container p-0 mx-auto">
        <div class="flex flex-wrap -m-2">
            <!-- Individual Blog Posts -->
            <div class="p-2 md:w-1/2 lg:w-1/3">
                <div class="h-300px border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden p-3 bg-white">
                <img style="height: 50%;" class="w-full object-cover object-center hover:scale-110 transition-transform transform origin-center" src="{{ asset('images/tshirt.jpeg') }}" alt="Product 1">

                    <div class="p-0">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">T-Shirts</h2>
                        <h1 class="title-font text-md font-medium text-gray-900 mb-2">Folder Crew Neck Tee - Black White</h1>
                        <p class="leading-relaxed mb-2">Rs 999</p>
                        <div class="flex items-center flex-wrap">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                <svg class="w-3 h-3 ml-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span class="text-gray-400 mr-2 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-xs pr-2 py-1 border-r-2 border-gray-200">
                                <svg class="w-3 h-3 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-xs">
                                <svg class="w-3 h-3 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>6
                            </span>
                        </div>
                    </div>
                </div>
            </div>
<!-- End of Blog Post 1 -->


 <!-- Individual Blog Post 2 -->

 <!-- Individual Blog Posts -->
 <div class="p-2 md:w-1/2 lg:w-1/3">
                <div class="h-300px border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden p-3 bg-white">
                <img style="height: 50%;" class="w-full object-cover object-center hover:scale-110 transition-transform transform origin-center" src="{{ asset('images/short.jpg') }}" alt="Product 1">
                    <div class="p-0">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Shorts</h2>
                        <h1 class="title-font text-md font-medium text-gray-900 mb-2">Essential Training Short</h1>
                        <p class="leading-relaxed mb-2">Rs 999</p>
                        <div class="flex items-center flex-wrap">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                <svg class="w-3 h-3 ml-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span class="text-gray-400 mr-2 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-xs pr-2 py-1 border-r-2 border-gray-200">
                                <svg class="w-3 h-3 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-xs">
                                <svg class="w-3 h-3 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>6
                            </span>
                        </div>
                    </div>
                </div>
            </div>

      <!-- End of Blog Post 2 -->

      <!-- Individual Blog Posts -->
      <div class="p-2 md:w-1/2 lg:w-1/3">
                <div class="h-300px border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden p-3 bg-white">
                <img style="height: 50%;" class="w-full object-cover object-center hover:scale-110 transition-transform transform origin-center" src="{{ asset('images/hoodie.jpg') }}" alt="Product 1">
                    <div class="p-0">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Hoodies and Jackets </h2>
                        <h1 class="title-font text-md font-medium text-gray-900 mb-2">Lounge Hoodie</h1>
                        <p class="leading-relaxed mb-2">Rs 999</p>
                        <div class="flex items-center flex-wrap">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                <svg class="w-3 h-3 ml-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span class="text-gray-400 mr-2 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-xs pr-2 py-1 border-r-2 border-gray-200">
                                <svg class="w-3 h-3 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-xs">
                                <svg class="w-3 h-3 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>6
                            </span>
                        </div>
                    </div>
                </div>
            </div>

    <!-- End of Blog Post 3 -->

    <!-- Individual Blog Posts -->
    <div class="p-2 md:w-1/2 lg:w-1/3">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden p-3 bg-white">
                <img style="height: 300px;" class="w-full object-cover object-center hover:scale-110 transition-transform transform origin-center" src="{{ asset('images/jug2.jpg') }}" alt="Product 1">
                    <div class="p-0">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Bottles And Tumblers</h2>
                        <h1 class="title-font text-md font-medium text-gray-900 mb-2">Hydrator Jug</h1>
                        <p class="leading-relaxed mb-2">Rs 999</p>
                        <div class="flex items-center flex-wrap">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                <svg class="w-3 h-3 ml-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span class="text-gray-400 mr-2 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-xs pr-2 py-1 border-r-2 border-gray-200">
                                <svg class="w-3 h-3 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-xs">
                                <svg class="w-3 h-3 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>6
                            </span>
                        </div>
                    </div>
                </div>
            </div>

    <!-- End of Blog Post 4 -->

    <!-- Individual Blog Post 5 -->
    
    <div class="p-2 md:w-1/2 lg:w-1/3">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden p-3 bg-white" >
                <img style="height: 300px;" class="w-full object-cover object-center hover:scale-110 transition-transform transform origin-center" src="{{ asset('images/hat.jpg') }}" alt="Product 1">
                    <div class="p-0">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Hats And Caps</h2>
                        <h1 class="title-font text-md font-medium text-gray-900 mb-2">Better Club Baseball Hat</h1>
                        <p class="leading-relaxed mb-2">Rs 999</p>
                        <div class="flex items-center flex-wrap">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                <svg class="w-3 h-3 ml-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span class="text-gray-400 mr-2 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-xs pr-2 py-1 border-r-2 border-gray-200">
                                <svg class="w-3 h-3 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-xs">
                                <svg class="w-3 h-3 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>6
                            </span>
                        </div>
                    </div>
                </div>
            </div>
    <!-- End of Blog Post 5 -->

    <!-- Individual Blog Posts 6 -->
    <div class="p-2 md:w-1/2 lg:w-1/3">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden p-3 bg-white">
                <img style="height: 300px;" class="w-full object-cover object-center hover:scale-110 transition-transform transform origin-center" src="{{ asset('images/bag4.jpg') }}" alt="Product 1">
                    <div class="p-0">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Bags</h2>
                        <h1 class="title-font text-md font-medium text-gray-900 mb-2">Hybrid Duffel Bag</h1>
                        <p class="leading-relaxed mb-2">Rs 999</p>
                        <div class="flex items-center flex-wrap">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                <svg class="w-3 h-3 ml-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span class="text-gray-400 mr-2 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-xs pr-2 py-1 border-r-2 border-gray-200">
                                <svg class="w-3 h-3 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-xs">
                                <svg class="w-3 h-3 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>6
                            </span>
                        </div>
                    </div>
                </div>
            </div>

    <!-- End of Blog Post 6 -->



</div>
</div>
</section>
<!-- End of BLOG SECTION -->


</section>

    <footer>
        <p>&copy; 2024 Your Website. All Rights Reserved.</p>
    </footer>

</body>

</html>
