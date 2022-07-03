
const menuLinksBtn = document.querySelector(`.navMenu`);
const menuLinks = document.querySelector(`.menu-links`);
const userNavButton = document.querySelector(`.active-login`);
const userNav = document.querySelector(`.userNav`);



const navMenuToggle = () => {
    menuLinksBtn.addEventListener(`click`, () =>{
        menuLinks.classList.toggle(`active-menu-links`);
        console.log(`gg`);
    });
}

navMenuToggle();


const userNavToggle = () => {
    userNavButton.addEventListener(`click`, ()=>{
        userNav.classList.toggle(`inactive-div`);
        console.log(`gg`)
    });
}
userNavToggle();