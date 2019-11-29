function customNavBar() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
function SUBMIT() {
  document.getElementById("Form1").innerHTML = "<h3>Bedankt voor het aanvragen van informatie.</h3>";
}