const accountMenuDrop = document.querySelector(".account-menu-container");
const menuListContainer = document.querySelector(".menu-list-container");
const vendorImageContainer = document.querySelector(".vendor-image");
// const container = document.querySelector(".container");

accountMenuDrop.addEventListener("click", () => {
  if (menuListContainer.classList.contains("menu-list-container-open")) {
    menuListContainer.classList.remove("menu-list-container-open");
    vendorImageContainer.classList.remove("vendor-image-active");
  } else {
    menuListContainer.classList.add("menu-list-container-open");
    vendorImageContainer.classList.add("vendor-image-active");
  }
});

// menuListContainer.addEventListener("click", () => {
//   if (menuListContainer.classList.contains("menu-list-container-open")) {
//     menuListContainer.classList.remove("menu-list-container-open");
//   }
// });

// // container.addEventListener("click", () => {
// //   if (sideNavbar.classList.contains("active")) {
// //     sideNavbar.classList.remove("active");
// //     sidebarOpenBtn.classList.remove("active");
// //   }
// // });

// window.addEventListener("scroll", () => {
//   if (sideNavbar.classList.contains("active")) {
//     sideNavbar.classList.remove("active");
//     sidebarOpenBtn.classList.remove("active");
//   }
// });

// sidebarCloseBtn.addEventListener("click", () => {
//   if (sideNavbar.classList.contains("active")) {
//     sideNavbar.classList.remove("active");
//     sidebarOpenBtn.classList.remove("active");
//   }
// });
