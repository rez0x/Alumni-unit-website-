var box = [document.getElementById("connect_us"),document.getElementById("search_alumni")
,document.getElementById("employers"),document.getElementById("job_opportunity"),document.getElementById("surveys"),document.getElementById("survey_graduates"),document.getElementById("survey_employers")];


var box1 = document.getElementById("connect_us");
var box2 = document.getElementById("search_alumni");
var box3 = document.getElementById("employers");
var box4 = document.getElementById("job_opportunity");
var box5 = document.getElementById("surveys");
var box6 = document.getElementById("survey_graduates");
var box7 = document.getElementById("survey_employers");







document.getElementById("co_us").addEventListener("click", function(){


if(box1.style.display=="none")
    {  var n = 0;
    while(n < 7)
    {  
        box[n].style.display = "none";
        n++;
    }
    box1.style.display="block";
    }

else
    box1.style.display="none";


})


document.getElementById("rb1").addEventListener("click", function(){


    if(box2.style.display=="none")
        {  var n = 0;
        while(n < 7)
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


        if(box3.style.display=="none")
            {  var n = 0;
            while(n < 7)
            {  
                box[n].style.display = "none";
                n++;
            }
            box3.style.display="block";
            }
        
        else
            box3.style.display="none";
        
        
        })


        document.getElementById("rb3").addEventListener("click", function(){


            if(box4.style.display=="none")
                {  var n = 0;
                while(n < 7)
                {  
                    box[n].style.display = "none";
                    n++;
                }
                box4.style.display="block";
                }
            
            else
                box4.style.display="none";
            
            
            })



document.getElementById("rb4").addEventListener("click", function(){


    if(box5.style.display=="none")
        {  var n = 0;
        while(n < 7)
            {  
                box[n].style.display = "none";
                n++;
                }
                box5.style.display="block";
                }
                
    else
        box5.style.display="none";
                
    })


    document.getElementById("btn1").addEventListener("click", function(){


        if(box6.style.display=="none")
            {  var n = 0;
            while(n < 7)
                {  
                    box[n].style.display = "none";
                    n++;
                    }
                    box6.style.display="block";
                    }
                    
        else
            box6.style.display="none";
        })

        document.getElementById("btn2").addEventListener("click", function(){


            if(box7.style.display=="none")
                {  var n = 0;
                while(n < 7)
                    {  
                        box[n].style.display = "none";
                        n++;
                        }
                        box7.style.display="block";
                        }
                        
            else
                box7.style.display="none";
            })
    