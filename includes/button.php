<a href="<?php echo $href; ?>">
    <div style="min-width:200px; width: <?php echo $button_width='200px'; ?>;" class="relative hover:cursor-pointer inline-flex items-center justify-center border-action hover:border-white p-4 px-6 py-3 overflow-hidden font-medium transition duration-300 ease-out border-2 rounded-full shadow-md group">
        <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-action group-hover:translate-x-0 ease">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </span>
        <span class="absolute flex items-center justify-center w-full h-full bg-white transition-all duration-300 transform group-hover:translate-x-full ease font-semibold line-h"><?php echo $button_text; ?></span>
        <span class="relative invisible">Button</span>
    </div>
</a>