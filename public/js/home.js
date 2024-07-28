/******animation */
let moon = document.getElementById("sun");
let rigth = document.getElementById("rigth");
let left = document.getElementById("left");
let bgc1 = document.getElementById("bgc1");

/*********variable */
let value;
window.addEventListener("scroll",scroll);
function scroll(){
    value = parseInt(window.scrollY);
    let rot = value * 0.2;
    if(rot <= 70)
    {
        moon.style.rotate = rot + 'deg';
    }
    bgc1.style.top = value * 0.5 + 'px';
    rigth.style.right = value * -1.5 + 'px';
    left.style.left = value * -1.5 + 'px';
}
