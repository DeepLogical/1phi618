<?php include('includes/config.php'); ?>
<section class="bg-blue	">
	<div class="row container py-10">
		<div class="col-span-12 md:col-span-7 flex flex-col justify-center items-center md:items-start py-2 md:py-0">
			<p class="text-white subHeading">Want to know more ?</p>
		</div>
		<div class="col-span-12 md:col-span-5  flex flex-col justify-center items-center md:items-end py-2 md:py-0">
			<a href="/contact">
                <button class="uppercase bg-blue py-2 px-5 border-2 hover:bg-action border-action text white text-white ease-in-out duration-300 flex group text-base">get started <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/rightarrow.svg" alt="get in" class="w-6 mx-1 hidden group-hover:block"> <img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/orangearrow.svg" alt="get in" class="w-6 mx-1 block group-hover:hidden"></button>
            </a>
		</div>
	</div>
	<footer class="footer py-5 border-t-2 border-[#363ee396]">
		<div class="container mobilecontainer">
			<div class="row">
				<div class="col-span-12 md:col-span-4 py-2">
					<h3 class="paragraph font-bold text-white mb-2">IMPORTANT LINKS</h3>
					<div class="">
						<ul class=" ">
							<li class="text-white text-left hover:text-action py-1 text-sm"><a href="/">Home</a></li>
							<li class="text-white text-left hover:text-action py-1 text-sm"><a href="/about">About Us</a></li>
							<li class="text-white text-left hover:text-action py-1 text-sm"><a href="/parteners">Our Partners</a></li>
							<li class="text-white text-left hover:text-action py-1 text-sm"><a href="/clients">Our Clients</a></li>
							<li class="text-white text-left hover:text-action py-1 text-sm"><a href="/case-studies">Case Studies</a></li>
							<li class="text-white text-left hover:text-action py-1 text-sm"><a href="/news">News</a></li>
							<li class="text-white text-left hover:text-action py-1 text-sm"><a href="/services">Services</a></li>
							<li class="text-white text-left hover:text-action py-1 text-sm"><a href="/career">Career</a></li>
							<li class="text-white text-left hover:text-action py-1 text-sm"><a href="/contact">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-span-12 md:col-span-4 py-2">
					<h3 class="paragraph font-bold text-center text-white mb-2">GET IN TOUCH</h3>
					<ul class="flex justify-center">
						<div>
							<li class="text-white  flex justify-start hover:text-action py-1 text-sm">
							<div class="flex flex-col justify-start">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/location.svg" alt="" class="w-6 mr-2">
							</div>
							1phi618 GmbH, Chamerstrasse 79,<br/>6300 Zug, Switzerland</li>
							<div>
								<li class="text-white  flex justify-start hover:text-action py-1 text-sm"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/static/message.svg" alt="" class="w-6 mr-2">info@1phi618.com</li>
							</div>
						</div>
					</ul>
				</div>
				<div class="col-span-12 md:col-span-4 py-2">
					<h3 class="paragraph font-bold text-center text-white mb-2">SOCIAL NETWORK</h3>
					<ul class="text-center md:text-left">
						<li class=" flex justify-center py-2">
							<a href="/https://www.linkedin.com/company/1phi618" class="w-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/social/linkedin.svg" alt="" class="w-10"></a>
						</li>
					</ul>
					<h3 class="paragraph font-bold text-white text-center mb-2">SIGN UP FOR EMAIL ALERTS</h3>
					<div class="flex justify-center text-center mx-auto bg-slate-600 w-fit">
						<label for="email"><i class="fa fa-envelope-o" aria-hidden="true"></i></label>
						<input id="email" class="bg-transparent px-5 h-10 focus:outline-none text-white" type="email" name="email" placeholder="Enter Your E-mail" required>
						<div class="right-0 flex justify-center items-center bg-orange-600 p-2 h-10 w-10">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" class="size-5">
								<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<div class="md:flex items-center justify-center py-3 px-5">
		<p class="text-white text-xs md:text-sm text-center">© <?php echo date('Y') ?> | All Rights Reserved</p>
	</div>
</section>

	<?php wp_footer(); ?>
	<script>
		$(".booknow").click(function(){
			$('#myModal').removeClass("hidden")
		})
		$(".close").click(function(){
			$('#myModal').addClass("hidden") 
		})
	</script>
	<script>
		window.addEventListener('scroll', function() {
			// var navbar = document.getElementById('navbar');
			if ($(this).scrollTop() > 50) {
				$('#navbar').css({
					'background': '#1e1e1e',
					'width': '100%',
					'min-height': '100px',
					'display': 'block',
					'position': 'fixed',
					'top': 0,
					'z-index': 999999999,
				});
			} 
			else {
				$('#navbar').css({
					'background': 'transparent',
					'width': '100%',
					// 'min-height': '100px',
					'display': 'block',
					'position': 'fixed',
					'top': 0,
					'z-index': 999999999999,
				});
			}
		});
	</script>
	<script>AOS.init();</script>

	<script>
		$(document).ready(function() {
			$('.logo a').css({
				'transform': 'scale(1.3)',
				'transition': '1s all ease'
			});

			setTimeout(function() {
				$('.logo').css({
					// 'transform': 'translateY(0)',
					'top': '50px',
					'transition': '1s all ease'
				});
				$('.logo a').css({
					'transform': 'scale(1)',
					'transition': '1s all ease'
				});

				$('.header_menu_bg').fadeOut(3000);

				if ($(window).width() > 768) {
					$('.menu').fadeIn(3000);
				};

				if ($(window).width() <= 768) {
					$('.menu').fadeIn(8000);
					$('.logo').css({
						// 'transform': 'translateY(0)',
						'top': '50px',
						'transition': '2s all ease',
						// 'visibility': 'hidden'
					});
					$('.logo a').css({
						// 'transform': 'scale(0)',
						// 'transition': '2s all ease'
					});
				}
			}, 2000)
			window.scrollTo(0, 0);
		});
	</script>

	<script>
		const header = document.getElementById("header");
		const headerOffset = header.offsetTop;
		function handleScroll() {
			if (window.pageYOffset > headerOffset) {
				header.classList.add("fixed");
			} else {
				header.classList.remove("fixed");
			}
		}
		window.addEventListener("scroll", handleScroll);
	</script>
	</body>
</html>