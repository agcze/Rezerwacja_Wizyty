function smoothScroll(element)
{
    document.querySelector(element).scrollIntoView({
        behaviour: 'smooth'
    });
}


function rezerwuj(usluga) //opcja z select name

{
    var select=document.getElementById('usluga');
    var option_selected= select.querySelectorAll ('option[selected]');
    option_selected.forEach(function(option)
    {
        option.removeAttribute("selected");
    });
    var option=select.querySelector ('option[value="'+usluga+'"]');
    option.setAttribute("selected","selected");
    smoothScroll ('#reservation');

    
}
   
 


