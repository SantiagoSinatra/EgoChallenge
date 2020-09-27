// Nav Controls
$("#button-nav").on("click", () => {
  $(".container-nav").toggleClass("show-nav");
  $(".container-main-content").toggle();
});

$("#button-nav-desk").on("click", () => {
  $(".container-nav").toggleClass("show-nav");
  $(".container-main-content").toggle();
});

$("#button-cross-nav").on("click", () => {
  $(".container-nav").toggleClass("show-nav");
  $(".container-main-content").toggle();
});

// Tabs behavior
let pageFlag = $("#p-flag").text();
if (pageFlag == "home") {
  $("#models-tab").addClass("selected")
  $("#file-tab").removeClass("selected")
} else {
  $("#file-tab").addClass("selected")
  $("#models-tab").removeClass("selected")
}