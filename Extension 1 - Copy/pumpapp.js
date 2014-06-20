var kittenGenerator = {

  saveURL: function() {
    var req = new XMLHttpRequest();
    req.open("GET", data.txt, true);
    req.send(string chrome.extension.getURL(string path));
  }



};

// Run our kitten generation script as soon as the document's DOM is ready.
document.addEventListener('DOMContentLoaded', function () {
  kittenGenerator.saveURL();
});


// string chrome.extension.getURL(string path)