<script>
    scrollBg = document.getElementById('scroll-bg');

    window.addEventListener('scroll', ()=> {
        const scrollPosition = window.scrollY;
        if(scrollPosition > 10){
            scrollBg.style.backgroundColor = '#00000070';
        }
        else
        {
            scrollBg.style.backgroundColor = 'transparent'; 
        }
    });
</script>
