var isStatus=document.querySelector("h2")
var addFriend=document.querySelector("#add")

var removeFriend = document.querySelector("#rmv")
addFriend.addEventListener("click", function(){
    isStatus.innerHTML = "Friends"
    isStatus.style.color="green"
})

removeFriend.addEventListener("click",function(){
    isStatus.innerHTML = "Stranger"
    isStatus.style.color = "Red"
})