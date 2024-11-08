document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        const loaderWrapper = document.querySelector('.loader-wrapper');
        const content = document.querySelector('.content');
        
        loaderWrapper.classList.add('fade-out');
        
        content.classList.add('visible');
        
        setTimeout(function() {
            loaderWrapper.style.display = 'none';
        }, 500);
    }, 1000);
});