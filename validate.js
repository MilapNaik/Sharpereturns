function validateForm() {
    var inputdate = document.myForm["date"].value;
    var compdate = /^\(?([0-9]{2})\)?[-. ]?([0-9]{2})[-. ]?([0-9]{4})$/;  
    
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