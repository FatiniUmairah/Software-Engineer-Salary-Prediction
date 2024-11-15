function check(){


	var CUST_USERNAME=document.form.CUST_USERNAME.value;
    var CUST_PASS=document.form.CUST_PASS.value;

    if(CUST_USERNAME==""){
        alert("Input username");
        document.form.CUST_USERNAME.focus();
        return false;
    }
    else if(CUST_PASS==""){
        alert("input password");
        document.form.CUST_PASSS.focus();
        return false;
    }
}