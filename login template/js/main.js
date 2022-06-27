// Menu
let Menuopen = document.querySelector(".open");
let Menuclose = document.querySelector(".close");
let nav_Menu = document.querySelector(".nav_Menu");

if (Menuopen) {
  Menuopen.addEventListener("click", () => {
    nav_Menu.classList.add("show_Menu");
  });
}
if (Menuclose) {
  Menuclose.addEventListener("click", function () {
    nav_Menu.classList.remove("show_Menu");
  });
}

let AllLinks = document.querySelectorAll(".nav_item");
AllLinks.forEach(function (el) {
  el.addEventListener("click", () => {
    nav_Menu.classList.remove("show_Menu");
  });
});
// Kinds plant
// tabs =========================================
let linkOne = document.querySelector(".link_one");
let linkTwo = document.querySelector(".link_two");
let linkThree = document.querySelector(".link_three");

let contantOne = document.querySelector(".one");
let contantTwo = document.querySelector(".two");
let contantThree = document.querySelector(".three");

linkOne.addEventListener("click", function (eo) {
  linkOne.classList.add("active");
  linkTwo.classList.remove("active");
  linkThree.classList.remove("active");
  contantOne.style.display = "grid";
  contantTwo.style.display = "none";
  contantThree.style.display = "none";
  eo.preventDefault();
});
linkTwo.addEventListener("click", function (eo) {
  linkTwo.classList.add("active");
  linkOne.classList.remove("active");
  linkThree.classList.remove("active");
  contantOne.style.display = "none";
  contantTwo.style.display = "grid";
  contantThree.style.display = "none";
  eo.preventDefault();
});
linkThree.addEventListener("click", function (eo) {
  linkThree.classList.add("active");
  linkOne.classList.remove("active");
  linkTwo.classList.remove("active");
  contantOne.style.display = "none";
  contantTwo.style.display = "none";
  contantThree.style.display = "grid";
  eo.preventDefault();
});
/*=============== QUESTIONS ACCORDION ===============*/
const accordionItems = document.querySelectorAll(".questions__item");

accordionItems.forEach((item) => {
  const accordionHeader = item.querySelector(".questions__header");

  accordionHeader.addEventListener("click", () => {
    const openItem = document.querySelector(".accordion-open");

    toggleItem(item);

    if (openItem && openItem !== item) {
      toggleItem(openItem);
    }
  });
});

const toggleItem = (item) => {
  const accordionContent = item.querySelector(".questions__content");

  if (item.classList.contains("accordion-open")) {
    accordionContent.removeAttribute("style");
    item.classList.remove("accordion-open");
  } else {
    accordionContent.style.height = accordionContent.scrollHeight + "px";
    item.classList.add("accordion-open");
  }
};
// top
let btn = document.querySelector(".up");

window.onscroll = function () {
  if (window.scrollY >= 50) {
    // btn.style.right = "20px";
    btn.style.cssText = "right:20px;";
  } else {
    btn.style.cssText = "right:-100%;  ";
  }
};
btn.onclick = function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};
