var height_i = document.getElementById('height');
var width_w = document.getElementById('width');
var imgEle = document.getElementById("img");


height_i.addEventListener('input', changeSize);
width_w.addEventListener('input', changeSize);

function changeSize(){
    let new_height = height_i.value+"px";
    let new_width = width_w.value +"px";


    imgEle.style.height = new_height;
    imgEle.style.width = new_width;
 }

