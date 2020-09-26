$("#filter").on("click", () => {
  flipImage("#filter-img");
  displayDropdown("#dropdown-filter-left");
});

$("#order").on("click", () => {
  flipImage("#order-img");
  displayDropdown("#dropdown-filter-right");
});

function flipImage(id) {
  $(id).toggleClass('invert');
}

function displayDropdown(id) {
  $(id).toggleClass('display');
}