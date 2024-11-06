function toggleFullscreen(element) {
    element.classList.toggle('fullscreen');
    if (element.classList.contains('fullscreen')) {
        var closeButton = document.createElement('div');
        closeButton.innerHTML = 'X';
        closeButton.classList.add('close-button');
        closeButton.onclick = function() {
            toggleFullscreen(element);
        };
        document.body.appendChild(closeButton);
    } else {
        var closeButton = document.querySelector('.close-button');
        if (closeButton) {
            closeButton.remove();
        }
    }
}
