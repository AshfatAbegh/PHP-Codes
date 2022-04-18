
    function isValid(){
     
      var name=document.forms["mForm"]["name"].value;
      var username=document.forms["mForm"]["username"].value;
      var email=document.forms["mForm"]["email"].value;
      var password=document.forms["mForm"]["password"].value;
      var cpass=document.forms["mForm"]["cpass"].value;
      

 
      if((name==="")||(username==="")||(email==="")||(password==="")||(cpass===""))
      {
         alert("All field are required");
    return false;
      }
      
    }

    
     
 