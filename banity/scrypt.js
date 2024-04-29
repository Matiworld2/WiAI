const element = document.getElementById("uul");
const ul = document.getElementById("calc");

element.addEventListener("mouseover", function () {
  ul.style.display = "block";
});

element.addEventListener("mouseout", function () {
  ul.style.display = "none";
});
