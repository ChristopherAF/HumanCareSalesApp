function show(content) {
    if (document.getElementById(content).style.display == "none") {
        document.getElementById(content).style.display = "block";
    } else {
        document.getElementById(content).style.display = "none";
    }
}