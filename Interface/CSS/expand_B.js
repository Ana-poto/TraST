
    var acc = document.getElementsByClassName("subcategorie");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var articol_content = this.nextElementSibling;
    if (articol_content.style.display === "block") {
        articol_content.style.display = "none";
    } else {
        articol_content.style.display = "block";
    }
  });

}