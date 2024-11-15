function check(){
    var cust_id=document.form.CUST_ID.value;
    var cust_username=document.form.CUST_USERNAME.value;
    var cust_pass=document.form.CUST_PASS.value;
    var cust_name=document.form.CUST_NAME.value;
    var cust_email=document.form.CUST_EMAIL.value;
     var cust_phone=document.form.CUST_PHONE.value;
   

    if(cust_id==""){
        alert("input id number");
        document.form.CUST_ID.focus();
        return false;
    }
    else if(isNaN(cust_id)){
        alert("ID in number only");
        document.form.CUST_ID.focus();
        return false;
    }
    else if(cust_username==""){
        alert("input username");
        document.form.CUST_USERNAME.focus();
        return false;
    }
    else if(cust_pass==""){
        alert("input password");
        document.form.CUST_PASS.focus();
        return false;
    }
    else if(cust_name==""){
        alert("input name");
        document.form.CUST_NAME.focus();
        return false;
    }
    else if(cust_email==""){
        alert("input email");
        document.form.CUST_EMAIL.focus();
        return false;
    }

     else if(cust_phone==""){
        alert("input phone");
        document.form.CUST_PHONE.focus();
        return false;
    }
}