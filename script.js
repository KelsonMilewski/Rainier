function showHideNav() {
    if (document.getElementById("dropdown").style.display === "none") {
        document.getElementById("dropdown").style.display = "flex";
    } else {
        document.getElementById("dropdown").style.display = "none";
        document.getElementById("sub-dropdown").style.display = "none";
    }
}
function showHideSubNav() {
    if (document.getElementById("sub-dropdown").style.display === "none") {
        document.getElementById("sub-dropdown").style.display = "initial";
    } else {
        document.getElementById("sub-dropdown").style.display = "none";
    }
}