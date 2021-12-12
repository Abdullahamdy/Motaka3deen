// ============  Navbar responsive  ============= //
const bars = document.querySelector('.nav__bars');
const sideBar = document.querySelector('.side__bar');
const closeSideBar = document.querySelector('.close__sidebar');
showSidebar = () => sideBar.classList.add('nav__active');
hideSidebar = () => sideBar.classList.remove('nav__active');

bars.addEventListener('click' , showSidebar )
closeSideBar.addEventListener('click' , hideSidebar )


// ============  About Model  ============= //
const myAboutModel = document.querySelector('.about__container-model');
const openModel = document.querySelector('.play__video-model');
const closeModelAbout = document.querySelector('#close-model-about');

openModel.addEventListener("click" , () => {
    // myAboutModel.style.transform = "scale(1 , 1)";
    myAboutModel.style.display = "flex";
});

closeModelAbout.addEventListener('click' , () => {
    // myAboutModel.style.transform = "scale(0 , 0)";
    myAboutModel.style.display = "none";
})

//============= owl carousel =============// 
var owl = $('.owl-carousel');
owl.owlCarousel({
    loop : true,
    nav : true,
    margin : 10,
    responsive : {
        0:{
            items:1
        },
        600:{
            items:3
        },            
        960:{
            items:5
        },
        1200:{
            items:4
        }
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});


/*==================== Gallary TABS ====================*/
const tabs = document.querySelectorAll('[data-target]');
const tabContents = document.querySelectorAll('[data-content]');

tabs.forEach( tab => {
    tab.addEventListener('click' , () => {
        const target = document.querySelector(tab.dataset.target)
        tabContents.forEach(tabContent => {
            tabContent.classList.remove('gallary__active')
        })
        target.classList.add('gallary__active')
        tabs.forEach( tab => {
            tab.classList.remove('gallary__active')
        })
        tab.classList.add('gallary__active')
    })
})
/*==================== Gallary TABS ====================*/


//============= Accordion =============//
const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}
items.forEach(item => item.addEventListener('click', toggleAccordion));