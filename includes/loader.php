<div id="loader" class="fixed inset-0 flex justify-center items-center bg-grey" style="z-index: 10001">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="Logo" class="w-52">
</div>
<script>
    window.addEventListener('load', function() {
        var loadingDiv = document.getElementById('loader');
        loadingDiv.style.display = 'none';
    });
</script>