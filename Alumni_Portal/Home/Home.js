var box = [document.getElementById("graduate"),document.getElementById("connect_us"),document.getElementById("slider"),document.getElementById("survey_box"),document.getElementById("cv"),document.getElementById("div_search_job"),document.getElementById("high_achievers"),document.getElementById("workshop"),document.getElementById("the_line"),document.getAnimations("news_ticker")];
var box1 = document.getElementById("graduate");
var box2 = document.getElementById("connect_us");
var box3 = document.getElementById("slider");
var box4 = document.getElementById("survey_box");
var box5 = document.getElementById("cv");
var box6 = document.getElementById("div_search_job");
var box7 = document.getElementById("high_achievers");
var box8 = document.getElementById("workshop");
var box9 =  document.getElementById("the_line");
var box10 =  document.getElementById("news_ticker");



document.getElementById("rb1").addEventListener("click", function(){


   if(box1.style.display=="none")
   {  var n = 0;
      while(n < 9)
      {  
         box[n].style.display = "none";
         n++;
      }
      box1.style.display="block";
   }

   else
      box1.style.display="none";


})

document.getElementById("co_us").addEventListener("click", function(){


   if(box2.style.display=="none")
   {  var n = 0;
      while(n < 9)
      {  
         box[n].style.display = "none";
         n++;
      }
      box2.style.display="block";
   }

   else
   box2.style.display="none";


})




document.getElementById("rb2").addEventListener("click", function(){


   if(box3.style.display=="none" && box10.style.display=="none")
   {  var n = 0;
      while(n < 9)
      {  
         box[n].style.display = "none";
         n++;
      }
      box3.style.display="block";
      box10.style.display="block";
   }

   else
   {
   box10.style.display="none";
   box3.style.display="none";
   }

})

document.getElementById("rb4").addEventListener("click", function(){


   if(box4.style.display=="none")
   {  var n = 0;
      while(n < 9)
      {  
         box[n].style.display = "none";
         n++;
      }
      box4.style.display="block";
   }

   else
   box4.style.display="none";


})

document.getElementById("rb5").addEventListener("click", function(){


   if(box5.style.display=="none")
   {  var n = 0;
      while(n < 9)
      {  
         box[n].style.display = "none";
         n++;
      }
      box5.style.display="block";
   }

   else
   box5.style.display="none";


})

document.getElementById("rb6").addEventListener("click", function(){


   if(box6.style.display=="none")
   {  var n = 0;
      while(n < 9)
      {  
         box[n].style.display = "none";
         n++;
      }
      box6.style.display="block";
   }

   else
   box6.style.display="none";


})


document.getElementById("link_high_achievers").addEventListener("click", function(){


   if(box7.style.display=="none")
   {  var n = 0;
      while(n < 9)
      {  
         box[n].style.display = "none";
         n++;
      }
      box7.style.display="block";
   }

   else 
   {
      box7.style.display="none";




   }

})

document.getElementById("link_workshop").addEventListener("click", function(){


   if(box8.style.display=="none")
   {  var n = 0;
      while(n < 9)
      {  
         box[n].style.display = "none";
         n++;
      }
      box8.style.display="block";
   }

   else 
   {
      box8.style.display="none";




   }

})



document.getElementById("link_the_line").addEventListener("click", function(){


   if(box9.style.display=="none")
   {  var n = 0;
      while(n < 9)
      {  
         box[n].style.display = "none";
         n++;
      }
      box9.style.display="block";
   }

   else 
   {
      box9.style.display="none";




   }

})