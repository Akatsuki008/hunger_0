// dropdown
function drop(){
    document.getElementById("dropdown").classList.toggle("show");
}

window.onclick = function(event)
{
    if(!event.target.matches('.drop-btn'))
    {
        var dd = document.getElementsByClassName("drop-items");
        var i;
        for(i=0; i<dd.length; i++)
        {
            var opendd = dd[i];
            if(opendd.classList.contains('show'))
            {
                opendd.classList.remove('show');
            }
        }
    }
}


//food
document.addEventListener('DOMContentLoaded', () => {
    "use strict";
    const glightbox = GLightbox({
      selector: '.glightbox'
    });
    function aos_init() {
      AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      });
    }
    window.addEventListener('load', () => {
      aos_init();
    });

});