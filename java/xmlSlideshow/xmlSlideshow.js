function loadXMLDoc() {
  var xhttps = new XMLHttpRequest();
  xhttps.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttps.open("GET", "http://test.competa.com/js-movies-test/data/movies-json.php", true);
  xhttps.send();
}