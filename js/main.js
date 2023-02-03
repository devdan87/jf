



//Menu

$("#btnAdmin").click(function() {
    $("#btnAdmin").css("display","none");
    $("#memb").css("display","block");
    $("#com").css("display","block");
    $("#addChap").css("display","block");
    $("#li1").css("display","none");
    $("#li2").css("display","none");
    $("#li3").css("display","none");
  })

 

//carousel

  var tabImages = [
    "img/img1.jpg",
    "img/img2.jpg",
    "img/image3.jpg",
    "img/img4.jpg"
  ];

  var tabTxt = [
    "Bienvenu sur le site web dédié au nouveau roman de <br> Jean FORTEROCHE",
    "Vous pouvez accèder librement aux différents chapitres du livre",
    "Vous devez au préalable vous inscrire puis vous connecter si vous souhaiter laisser un commentaire",
    "Bonne lecture ou plutot bon voyage"
  ];


  let position = 0;

let lastImg = tabImages.length - 1;

let txt = document.getElementById("txt");

txt.innerHTML = tabTxt[position];

//on récupère dans l'élément image l'attribut src à travers lequel on và lire les images du tableau
document.querySelector("#image").src = tabImages[position];


$("#next").click(function(){
  if (position > lastImg ) {
    position=0;
  }
  document.querySelector("#image").src = tabImages[position];
  txt.innerHTML = tabTxt[position];
  position++;

})

$("#back").click(function(){
  if (position < 0 ) {
    position=lastImg;
  }
  document.querySelector("#image").src = tabImages[position];
  txt.innerHTML = tabTxt[position];
  position--;

}) 




var defilement = setInterval(function() {
 
  if (position > lastImg ) {
    position=0;
  }

  document.querySelector("#image").src = tabImages[position];
  txt.innerHTML = tabTxt[position];
  position++;

}, 4000);


$("#stop").click(function(){
 clearInterval(defilement);
})


$("#play").click(function(){
  var slide = setInterval(function() {
 
    if (position > lastImg ) {
      position=0;
    }
  
    document.querySelector("#image").src = tabImages[position];
    txt.innerHTML = tabTxt[position];
    position++;
  
  }, 4000);
  
})





//MAP

var myMap = L.map('map').setView([61.217381, -149.863129], 4);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 9, //zoom max
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors' //les info sur la carte
}).addTo(myMap);


var myItems = [
  [ "Anchorage", 61.217381, -149.863129],
  ["Tongass forest", 56.011894, -132.828325],
];





for (var i = 0; i < myItems.length; i++) {
  var item = myItems[i];
  marker = new L.marker([item[1], item[2]])
    .bindPopup(item[0])
    .addTo(myMap);
}


console.log(myItems.length);



