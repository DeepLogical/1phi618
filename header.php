<!DOCTYPE html>
<html>
<head>
	<title>1phi618</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="English" />
    <meta name="allow-search" content="yes" />
	<meta charset="utf-8">
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<?php wp_head(); ?>
    <?php include('includes/loader.php') ?>
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<nav id="header" class="bg-white py-2 px-6 w-full z-50 shadow-md" @click.away="mobile = false" x-data="{ mobile: false }">
		<div class="flex justify-between">
			<div class="flex lg:w-5/12">
				<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="Logo" class="max-w-4 logo"></a>
			</div>
			<div class="hidden md:flex justify-between w-full" style="">
				<a href="/" class=" hover:text-action text-xs text-md uppercase flex items-center h-full px-2 font-semibold">Home</a>
				<a href="/about" class=" hover:text-action text-xs text-md uppercase flex text-right items-center h-full px-2 font-semibold">About Us</a>
				<a href="/services" class=" hover:text-action text-xs text-md uppercase flex text-right items-center h-full px-2 font-semibold">Services</a>
				<div @click.away="open = false" class=" hover:text-action relative" x-data="{ open: false }">
				<button @click="open = !open" class=" hover:text-action text-xs text-md flex items-center h-full px-2 font-semibold">
				<span class="uppercase">Our Associations</span>
				<div class="flex flex-col justify-center items-center h-full">

				</div>
				<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-200 transform"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
				</button>
				<div x-cloak x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-50">
					<div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800 z-50">
						<a href="parteners" class="text-xs text-md block px-1 py-2 mt-2 font-semibold text-left hover:bg-action hover:text-white rounded transition duration-500 ease-in-out whitespace-nowrap">OUR PARTENERS</a>
						<a href="/clients" class="text-xs text-md block px-1 py-2 mt-2 font-semibold text-left hover:bg-action hover:text-white rounded transition duration-500 ease-in-out whitespace-nowrap">OUR CLIENTS</a>
					</div>
				</div>
			</div>
                <a href="/case-studies" class=" hover:text-action text-xs text-md uppercase flex items-center h-full px-2 font-semibold">case studies</a>
                <a href="/news" class=" hover:text-action text-xs text-md uppercase flex items-center h-full px-2 font-semibold">news</a>
                <a href="/career" class=" hover:text-action text-xs text-md uppercase flex items-center h-full px-2 font-semibold">career</a>
				<a href="/contact" class="hover:text-action text-xs text-md uppercase flex text-right items-center h-full px-2 font-semibold">Contact Us</a>			
			</div>
			<div class="md:hidden flex">
				<button class="outline-none mobile-menu-button"><svg class=" w-6 h-6 text-gray-500 hover:text-primary mx-auto"  
				@click="mobile = !mobile"
				fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" ><path d="M4 6h16M4 12h16M4 18h16"></path></svg></button>
			</div>
		</div>
		<div x-cloak class="mobile-menu" :class="{ 'hidden' : !mobile}">
			<a href="/" class="text-xs md:text-lg xl:text-xl uppercase flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">Home</a>
			<a href="/about" class="text-xs md:text-lg xl:text-xl uppercase flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">About Us</a>
			<a href="/services" class="text-xs md:text-lg xl:text-xl uppercase flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">Services</a>
			<!-- <a href="/about-us" class="text-xs md:text-lg xl:text-xl flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">Our Associations</a> -->
			<div @click.away="open = false" class="relative" x-data="{ open: false }">
				<button @click="open = !open" class="text-xs md:text-lg xl:text-xl flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3">
				<span class="uppercase">Our Associations</span>
				<div class="flex flex-col justify-center items-center h-full">
					<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-200 transform"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
				</div>
				</button>
				<div x-cloak x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-50">
					<div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800 z-50">
						<a class="text-xs md:text-lg xl:text-xl block px-1 py-2 mt-2 text-gray-500 text-left hover:bg-action hover:text-white rounded transition duration-500 ease-in-out whitespace-nowrap" href="/parteners">OUR PARTENERS</a>
						<a class="text-xs md:text-lg xl:text-xl block px-1 py-2 mt-2 text-gray-500 text-left hover:bg-action hover:text-white rounded transition duration-500 ease-in-out whitespace-nowrap" href="/clients">OUR CLIENTS</a>
					</div>
				</div>
			</div>
			<a href="/case-studies" class="text-xs md:text-lg xl:text-xl uppercase flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">Case studies</a>
			<a href="/news" class="text-xs md:text-lg xl:text-xl uppercase flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">News</a>
			<a href="/career" class="text-xs md:text-lg xl:text-xl uppercase flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">career</a>
			<a href="/contact" class="text-xs md:text-lg xl:text-xl uppercase flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">contact us</a>
		</div>
	</nav>
</head>
<body>

