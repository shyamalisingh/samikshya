var imageIndx=0;
function changeImage(url){
    document.getElementById("homeImage").src=url;
}
function changeImageIndex(){
    i=imageIndx%3+1;
    url = "images/homePage"+i+".jpg";
    document.getElementById("homeImage").src=url;
    imageIndx++;
}