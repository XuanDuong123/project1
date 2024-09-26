const preserve = document.querySelector(".preserve")
const detail = document.querySelector(".detail")
const trademark = document.querySelector(".trademark")
if(preserve) {
    preserve.addEventListener("click",function(){
        document.querySelector(".product-content-right-bottom-body-detail").style.display = "none"
        document.querySelector(".product-content-right-bottom-body-brand").style.display = "none"
        document.querySelector(".product-content-right-bottom-brand").style.display = "block"
    })
}
if(detail) {
    detail.addEventListener("click",function(){
        document.querySelector(".product-content-right-bottom-body-detail").style.display = "block"
        document.querySelector(".product-content-right-bottom-body-brand").style.display = "none"
        document.querySelector(".product-content-right-bottom-brand").style.display = "none"
    })
}
if(trademark) {
    trademark.addEventListener("click",function(){
        document.querySelector(".product-content-right-bottom-body-detail").style.display = "none"
        document.querySelector(".product-content-right-bottom-body-brand").style.display = "block"
        document.querySelector(".product-content-right-bottom-brand").style.display = "none"
    })
}
// Product
const bigImg = document.querySelector(".product-content-left-big-img img")
const smalImg = document.querySelectorAll(".product-content-left-smail-img img")
smalImg.forEach(function(imgItem,X){
    imgItem.addEventListener("click",function(){
        bigImg.src = imgItem.src
    })
})
