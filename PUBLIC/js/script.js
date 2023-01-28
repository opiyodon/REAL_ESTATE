/* ====================================================================================================================
  ================================   LIGHT | DARK MODE   ==============================================================
  ==================================================================================================================== */

/*============================== Light|Dark Mode Toggle =====================================*/
const LightDarkToggle = document.querySelector(".DL_ICON");
const DAY_NIGHT = document.querySelector(".DAY_NIGHT");

var DARK_MODE;

if(localStorage.getItem('DARK_MODE')){
    DARK_MODE = localStorage.getItem('DARK_MODE');
}
else
{
    DARK_MODE = 'LIGHT';
}

localStorage.setItem('DARK_MODE', DARK_MODE);

if(localStorage.getItem('DARK_MODE') == 'DARK')
{
    document.body.classList.add("DARK")

    DAY_NIGHT.querySelector("i").classList.remove("fa-moon");
        
    DAY_NIGHT.querySelector("i").classList.add("fa-sun");
}


LightDarkToggle.addEventListener("click", () => {
    document.querySelector("body").classList.toggle("DARK");
    if(document.body.classList.contains("DARK"))
    {
        DAY_NIGHT.querySelector("i").classList.remove("fa-moon");
        
        DAY_NIGHT.querySelector("i").classList.add("fa-sun");

        localStorage.setItem('DARK_MODE','DARK');
    }
    else
    {
        DAY_NIGHT.querySelector("i").classList.remove("fa-sun");
        
        DAY_NIGHT.querySelector("i").classList.add("fa-moon");

        localStorage.setItem('DARK_MODE','LIGHT');
    }
})
/* ====================================================================================================================
  ================================   SWITCH PICTURES   ==============================================================
  ==================================================================================================================== */

/*============================== Pictures Toggle in selected_property.php =====================================*/
//
/* ====================================================================================================================
  ================================   REVIEW TOGGLER   ==============================================================
  ==================================================================================================================== */

/*============================== Review Toggle in selected_property.php =====================================*/
const R_TOGGLER = document.querySelector(".R_TOGGLER");
const R_CONTAINER = document.querySelector(".R_CONTAINER");

R_TOGGLER.addEventListener("click", () => {
    R_CONTAINER.classList.toggle("ACTIVE_REVIEW");
    if(R_CONTAINER.classList.contains("ACTIVE_REVIEW"))
    {
        R_TOGGLER.innerHTML.setItem('View All >>','View Less >>');
    }
    else
    {
        R_TOGGLER.innerHTML.setItem('View Less >>','View All >>');
    }
})