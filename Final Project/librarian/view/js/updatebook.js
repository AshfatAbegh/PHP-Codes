
    function isValid(){
     
      
      var bookname=document.forms["mForm"]["bookname"].value;
      
      var authorname=document.forms["mForm"]["authorname"].value;
       var publishdate=document.forms["mForm"]["publishdate"].value;
     

 
      if((bookname==="")||(authorname==="")||(publishdate===""))
      {
         alert("All field are required");
    return false;
      }
      
    }

    
     