<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Job IT</title>
<link rel='stylesheet' href='{{asset("css/woocommerce-layout.css")}}' type='text/css' media='all'/>
<link rel='stylesheet' href='{{asset("css/woocommerce-smallscreen.css")}}' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='{{asset("css/woocommerce.css")}}' type='text/css' media='all'/>
<link rel='stylesheet' href='{{asset("css/font-awesome.min.css")}}' type='text/css' media='all'/>
<link rel='stylesheet' href='{{asset("css/style.css")}}'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}" defer></script>
@livewireStyles
</head>

@yield('head')
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
@if (Auth::check())

@livewire('navigation-menu')

@else
<x-jet-nav-link href="{{ route('create') }}">
    {{ __('Add new offer') }}
</x-jet-nav-link>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-jet-nav-link href="{{ route('login') }}" :active="request()->routeIs('dashboard')" style="position: absolute; right:150px;">
            {{ __('Login') }}
        </x-jet-nav-link>
        <x-jet-nav-link href="{{ route('register') }}" :active="request()->routeIs('dashboard')" style="position: absolute; right:50px;">
            {{ __('Register') }}
        </x-jet-nav-link>
    </div>
@endif




</div>
<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="{{ route('welcome') }}" rel="home">Job IT</a></h1>
			<h2 class="site-description">Job offers for IT </h2>
		</div>
		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle">Menu</button>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">

                @foreach ($tags as $tag)
                    <li><a href="/job/related/{{ $tag->tag_name }}">{{ $tag->tag_name }}</a></li>
                @endforeach

			</ul>
		</div>
		</nav>
		</header>

        @yield('body')
		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">
				<div class="grid portfoliogrid">



				</div>
				<!-- .grid -->


				<br/>

				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->
	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<h1 style="color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">Job IT</h1>
			 <a target="blank" href="{{ route('welcome')}} ">Job offers from all around the world</a>
		</div>
	</div>
	</footer>
	<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>
<!-- #page -->
<script src='{{asset("js/jquery.js")}}'></script>
<script src='{{asset("js/plugins.js")}}'></script>
<script src='{{asset("js/scripts.js")}}'></script>
<script src='{{asset("js/masonry.pkgd.min.js")}}'></script>
@livewireScripts
</body>
</html>
