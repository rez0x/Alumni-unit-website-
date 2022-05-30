var box = [document.getElementById("connect_us"),document.getElementById("survey_1"),document.getElementById("survey_2"),document.getElementById("profile"),document.getElementById("job_opportunity"),document.getElementById("search_alumni"),document.getElementById("form_select_year_graduated"),document.getElementById("high_achievers"),document.getElementById("workshop"),document.getElementById("the_line"),document.getElementById("form_select_major_graduated")];
var box1 = document.getElementById("connect_us");
var box2 = document.getElementById("survey_1");
var box3 = document.getElementById("survey_2");
var box4 = document.getElementById("profile");
var box5 = document.getElementById("job_opportunity");
var box6 = document.getElementById("search_alumni");
var box7 = document.getElementById("form_select_year_graduated");
var box9 = document.getElementById("high_achievers");
var box10 = document.getElementById("workshop");
var box11 = document.getElementById("the_line");
var box12 = document.getElementById("form_select_major_graduated");










document.getElementById("co_us").addEventListener("click", function(){


   if(box1.style.display=="none")
   {  var n = 0;
      while(n < 11)
      {  
         box[n].style.display = "none";
         n++;
      }
      box1.style.display="block";
   }

   else
      box1.style.display="none";


})




document.getElementById("rb3").addEventListener("click", function(){


   if(box2.style.display=="none")
   {  var n = 0;
      while(n < 11)
      {  
         box[n].style.display = "none";
         n++;
      }
      box2.style.display="block";
   }

   else
   box2.style.display="none";


})


document.getElementById("rb4").addEventListener("click", function(){


   if(box3.style.display=="none")
   {  var n = 0;
      while(n < 11)
      {  
         box[n].style.display = "none";
         n++;
      }
      box3.style.display="block";
   }

   else
   box3.style.display="none";


})



document.getElementById("rb1").addEventListener("click", function(){


   if(box4.style.display=="none")
   {  var n = 0;
      while(n < 11)
      {  
         box[n].style.display = "none";
         n++;
      }
      box4.style.display="block";
   }

   else
   box4.style.display="none";


})




document.getElementById("rb6").addEventListener("click", function(){


   if(box5.style.display=="none")
   {  var n = 0;
      while(n < 11)
      {  
         box[n].style.display = "none";
         n++;
      }
      box5.style.display="block";
   }

   else
   box5.style.display="none";


})

document.getElementById("rb5").addEventListener("click", function(){


   if(box6.style.display=="none")
   {  var n = 0;
      while(n < 11)
      {  
         box[n].style.display = "none";
         n++;
      }
      box6.style.display="block";
   }

   else
   box6.style.display="none";


})



document.getElementById("btn1").addEventListener("click", function(){


   if(box7.style.display=="none")
   {  var n = 0;
      while(n < 11)
      {  
         box[n].style.display = "none";
         n++;
      }
      box7.style.display="block";
   }

   else
   box7.style.display="none";


})






document.getElementById("link_high_achievers").addEventListener("click", function(){


   if(box9.style.display=="none")
   {  var n = 0;
      while(n < 11)
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

document.getElementById("link_workshop").addEventListener("click", function(){


   if(box10.style.display=="none")
   {  var n = 0;
      while(n < 11)
      {  
         box[n].style.display = "none";
         n++;
      }
      box10.style.display="block";
   }

   else 
   {
      box10.style.display="none";




   }

})



document.getElementById("link_the_line").addEventListener("click", function(){


   if(box11.style.display=="none")
   {  var n = 0;
      while(n < 11)
      {  
         box[n].style.display = "none";
         n++;
      }
      box11.style.display="block";
   }

   else 
   {
      box11.style.display="none";




   }

})


document.getElementById("btn2").addEventListener("click", function(){


   if(box12.style.display=="none")
   {  var n = 0;
      while(n < 11)
      {  
         box[n].style.display = "none";
         n++;
      }
      box12.style.display="block";
   }

   else 
   {
      box12.style.display="none";




   }

})

