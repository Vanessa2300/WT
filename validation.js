function validate(){

    var prodId = document.getElementById("pid").value.trim();
    var descrip = document.getElementById("desc").value.trim();
    var cred = document.getElementById("ccn").value.trim();
    var email = document.getElementById("eid").value.trim();

    if (prodId==""){
        alert("Enter A valid Product ID");
        document.f1.pid.value="";
        document.getElementById("pid").focus();
        return true;
    }
    
    else if (descrip==""){
        alert("Enter A valid Description");
        document.f1.desc.value="";
        document.getElementById("desc").focus();
        return true;
    }
    
    else if (!/^\d{16}$/.test(cred)){
        alert("Enter A valid Credit Card Number");
        document.f1.ccn.value="";
        document.getElementById("ccn").focus();
        return true;
    }
    
    else if (!/^\S+@\S+\.\S+$/.test(email)){
        alert("Enter A valid Email ID");
        document.f1.eid.value="";
        document.getElementById("eid").focus();
        return true;
    }
    
    else{
        alert("Order placed successfully!");
        return true;
    }
    

}

function clearFields() {
    document.f1.pid.value="";
    document.f1.desc.value="";
    document.f1.ccn.value="";
    document.f1.eid.value="";
 }