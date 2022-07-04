
// burger

const iconMenu = document.querySelector(".icon__menu");
if (iconMenu) {
  const menuBody = document.querySelector(".menu__body");
  iconMenu.addEventListener("click", function (e) {
    document.body.classList.toggle("_lock");
    iconMenu.classList.toggle("_active");
    menuBody.classList.toggle("_active");
    
      
});
}

// tabs

const tabsBtn = document.querySelectorAll('.menu-law__icon');
const tabsItems = document.querySelectorAll('.service');
// const tabsTitle = document.querySelectorAll('.title');

tabsBtn.forEach(onTabClick);


function onTabClick(item) {
  item.addEventListener("click", function() {
    let currentBtn = item;
    let tabId = currentBtn.getAttribute("data-tab");
    let currentTab = document.querySelector(tabId);

    if ( ! currentBtn.classList.contains('active')){
      tabsBtn.forEach(function(item){
      item.classList.remove('active');
    });

    tabsItems.forEach(function(item){
      item.classList.remove('active');
    });

    // tabsTitle.forEach(function(item){
    //   item.classList.remove('active');
    // });

    currentBtn.classList.add('active');
    currentTab.classList.add('active');
    // currentTitle.classList.add('active');
    }
    
  });
}

document.querySelector('.menu-law__icon').click();