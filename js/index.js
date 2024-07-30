const sidebarOpenBtn = document.querySelector(".sidebar-open-btn");
const sidebarCloseBtn = document.querySelector(".sidebar-close-btn");
const sideNavbar = document.querySelector(".side-navbar");
// const container = document.querySelector(".container");

console.log(sidebarOpenBtn);

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
