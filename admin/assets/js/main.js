const navbarItems = document.querySelectorAll("a.list-group-item");
if (navbarItems) {
  [...navbarItems].forEach((item) => {
    item.addEventListener("click", function () {
      item.classList.add("active");
    });
  });
}
