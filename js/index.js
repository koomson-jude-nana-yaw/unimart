const sidebarOpenBtn = document.querySelector(".sidebar-open-btn");
const sidebarCloseBtn = document.querySelector(".sidebar-close-btn");
const sideNavbar = document.querySelector(".side-navbar");
// const container = document.querySelector(".container");

sidebarOpenBtn.addEventListener("click", () => {
  sidebarOpenBtn.classList.toggle("active");
  sideNavbar.classList.toggle("active");
});

// container.addEventListener("click", () => {
//   if (sideNavbar.classList.contains("active")) {
//     sideNavbar.classList.remove("active");
//     sidebarOpenBtn.classList.remove("active");
//   }
// });

window.addEventListener("scroll", () => {
  if (sideNavbar.classList.contains("active")) {
    sideNavbar.classList.remove("active");
    sidebarOpenBtn.classList.remove("active");
  }
});

sidebarCloseBtn.addEventListener("click", () => {
  if (sideNavbar.classList.contains("active")) {
    sideNavbar.classList.remove("active");
    sidebarOpenBtn.classList.remove("active");
  }
});


// handle product scrolling
const prevBtn = document.querySelector('.left-btn');
const nextBtn = document.querySelector('.right-btn');
const productsContainer = document.querySelector('.products');

const scrollAmount = 300;

prevBtn.addEventListener('click', () =>{
  productsContainer.scrollTo({
    left: productsContainer.scrollLeft - scrollAmount,
    behavior: "smooth"
  })
})
nextBtn.addEventListener('click', () =>{
  productsContainer.scrollTo({
    left: productsContainer.scrollLeft + scrollAmount,
    behavior: "smooth"
  })
})