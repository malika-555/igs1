
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

// получаем массив всех вкладок
const tabs = document.querySelectorAll(".tab");
// получаем массив всех блоков с содержимым вкладок
const contents = document.querySelectorAll(".service");
const titles = document.querySelectorAll(".title");


// запускаем цикл для каждой вкладки и добавляем на неё событие
for (let i = 0; i < tabs.length; i++) {
  tabs[i].addEventListener("click", (event) => {

    // сначала нам нужно удалить активный класс именно с вкладок
    for (let t = 0; t < tabs.length; t++) {
      tabs[t].classList.remove("tab--active");
    }
    // добавляем активный класс
    tabs[i].classList.add("tab--active");

    // теперь нужно удалить активный класс с блоков содержимого вкладок

    for (let c = 0; c < contents.length; c++) {
      contents[c].classList.remove("service--active");
    }
    // добавляем активный класс
    contents[i].classList.add("service--active");

    // теперь нужно удалить активный класс с блоков содержимого вкладок

    for (let c = 0; c < titles.length; c++) {
      titles[c].classList.remove("title--active");
    }
    // добавляем активный класс
    titles[i].classList.add("title--active");

  });
}