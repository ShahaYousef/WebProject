const menuIcon = document.getElementById("menuIcon");
const slideoutMenu = document.getElementById("slideoutMenu");
const searchIcon = document.getElementById("searchIcon");
const searchBox = document.getElementById("searchBox");

// لإظهار السيرتش بوكس عند الضغط على الايكون
searchIcon.addEventListener('click', function(){ // when search icon is clicked this fun will executed
  if (searchBox.style.top == '72px') {
    searchBox.style.top = '24px';
    searchBox.style.pointerEvents = 'none';
  } else { // لإخفاء السيرتش بوكس عند الضغط على الايكون مره اخرى
    searchBox.style.top = '72px';
    searchBox.style.pointerEvents = 'auto';
  }
});
// عند الضغط على الايكون Slideout Menu (Phone Navigation)لإظهار الـ
menuIcon.addEventListener('click', function(){
  if(slideoutMenu.style.opacity == "1"){
    slideoutMenu.style.opacity = '0';
    slideoutMenu.style.pointerEvents = 'none';
  } else { // لإيقاف عمل الكود إذا كانت الايكون غير مرئية
    slideoutMenu.style.opacity = '1';
    slideoutMenu.style.pointerEvents = 'auto';
  }
});

$(document).ready(function(){ /*click mark in contact us*/
         $(".btn").click(function(){
               $(".input, .area").val("");
            });
         });
