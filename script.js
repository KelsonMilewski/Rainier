//mobile nav show and hide functions

function showHideNav() {
    if (document.getElementById('dropdown').style.display === 'none') {
        document.getElementById('dropdown').style.display = 'flex';
    } else {
        document.getElementById('dropdown').style.display = 'none';
        document.getElementById('sub-dropdown').style.display = 'none';
    }
}
function showHideSubNav() {
    if (document.getElementById('sub-dropdown').style.display === 'none') {
        document.getElementById('sub-dropdown').style.display = 'initial';
    } else {
        document.getElementById('sub-dropdown').style.display = 'none';
    }
}

//gallery functions
function focusImg1() {
    //document.getElementById('body').style.position = 'fixed'; 
    document.getElementById('gallery-focus').style.display = 'initial';
    document.getElementById('gallery-img1').style.position = 'absolute';
    document.getElementById('gallery-img1').style.width = '80%';
    document.getElementById('gallery-img1').style.top = '20vh';
    document.getElementById('gallery-img1').style.zIndex = '2';
}