function validateForm() {
    var inputdate = document.myForm["date"].value;
    var compdate = /^\d{1}[./-]\d{3}[./-]\d{2}$/;
    
    if(inputdate.match(compdate))  {  
        return true; 
    }
    else  {  
        alert("Please inpute date e.g. 1-Oct-03");  
        return false;  
    } 
    
}

var form = document.getElementById("myForm");
form.onsubmit = validateForm;