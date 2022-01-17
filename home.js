
//tao scroll to top, slide down a bar on scroll page
        window.onscroll = function(){
            scrolltoTop();
        }
            
        function scrolltoTop(){
            if(document.body.scrollTop > 300 || document.documentElement.scrollTop >300)
            {
                document.getElementById("totopBtn").style.display = "block";
                document.getElementById("slideDown").style.top = 0;
            }
            else{
                document.getElementById("totopBtn").style.display = "none";
                document.getElementById("slideDown").style.top = "-100px";
            }
        }
            document.getElementById("totopBtn").addEventListener("click", function()
            {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            });

//--------------------------------------------------------------------------------------------------------






