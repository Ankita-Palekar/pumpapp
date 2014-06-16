function sendCurrentURL(url) {
    var req = new XMLHttpRequest();
    req.addEventListener("readystatechange", function(evt) {
        if (req.readyState == 4) {
            if (req.status == 200) {
                alert("Saved !");
            } else {
                alert("ERROR: status " + req.status);
            }
        }
    });
    req.open("POST", "http://localhost/Extension 1/save.php", true);
    req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    req.send("url=" + encodeURIComponent(url));
}

chrome.browserAction.onClicked.addListener(function(tab) {
     sendCurrentURL(tab.url);
});