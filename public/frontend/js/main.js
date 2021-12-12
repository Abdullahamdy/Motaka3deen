// ==============  Register member tabs  =============//
const nextBtnTab1 = document.querySelector('.next__tab-1');
const nextBtnTab2 = document.querySelector('.next__tab-2');
const tab1 = document.querySelector('.tab-1');
const tab2 = document.querySelector('.tab-2');
const tab3 = document.querySelector('.tab-3');
const tab4 = document.querySelector('.tab-4');
const registerTab = document.querySelector('.register__tab-successed');
const navTabs = document.getElementById('tab');
const navTabsDis = document.getElementById('dis');
const navTabsAsd = document.getElementById('asd');

nextBtnTab1.addEventListener('click' , () => {
    tab1.classList.remove('tab__content-active')
    tab2.classList.add('tab__content-active')
    navTabs.classList.remove('active__tab')
    navTabsDis.classList.remove('disabled')
    navTabsDis.classList.add('active__tab')
})
nextBtnTab2.addEventListener('click' , () => {
    tab2.classList.remove('tab__content-active')
    tab3.classList.add('tab__content-active')
    navTabsDis.classList.remove('active__tab')
    navTabsDis.classList.remove('disabled')
    navTabsAsd.classList.remove('disabled')
    navTabsAsd.classList.add('active__tab')
})
registerTab.addEventListener('click' , () => {
    tab3.classList.remove('tab__content-active')
    tab4.classList.add('tab__content-active')
    navTabsAsd.classList.remove('active__tab')
})


//=======  Toggle between tabs   =======//
const allTabs = document.querySelectorAll('[data-target]');
const allTabContents = document.querySelectorAll('[data-content]');

allTabs.forEach( tab => {
    tab.addEventListener('click' , () => {
        const target = document.querySelector(tab.dataset.target);
        console.log(tab);
        console.log(tab.dataset);
        console.log(target);
        allTabContents.forEach(tabCont => {
            tabCont.classList.remove('tab__content-active')
        })
        target.classList.add('tab__content-active')

        allTabs.forEach( tab => {
            tab.classList.remove('active__tab')
        })
        tab.classList.add('active__tab')

    })
})
