// ナビゲーションのトグルの初回起動時に表示状態にする
console.log("custom.js loaded!");
document.addEventListener("DOMContentLoaded", function () {
  var nav = document.querySelector(".main-navigation");
  if (nav && !nav.classList.contains("toggled")) {
    nav.classList.add("toggled");
  }
});
