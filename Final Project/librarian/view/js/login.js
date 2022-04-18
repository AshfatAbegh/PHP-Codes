
    function isValid(){
     
      
      var username=document.forms["mForm"]["username"].value;
      
      var password=document.forms["mForm"]["password"].value;
     

 
      if((username==="")||(password===""))
      {

         alert("All field are required");
    return false;
      }
      
    }

    
     