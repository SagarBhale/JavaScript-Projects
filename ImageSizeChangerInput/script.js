var input1 = document.getElementById('inp1');
var input2 = document.getElementById('inp2');
var btn = document.getElementById('btn');

btn.addEventListener("click", function(){
   let height = input1.value;
   let width = input2.value;
   var imgEle = document.getElementById("img");
   imgEle.style.height = height +"px";
   imgEle.style.width = width +"px";
});
