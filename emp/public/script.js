function validate(){
    var fn=document.getElementById('fn').value;
    var ln=document.getElementById('ln').value;
    var salary=document.getElementById('salary').value;
    var age=document.getElementById('age').value;
    var email=document.getElementById('email').value;
    if(fn==''){
        alert('first name is required !');
        document.getElementById('fn').focus();
        return false;
    }
    else if(ln==''){
        alert('last name is required !');
        document.getElementById('ln').focus();
        return false;
    }
    else if(salary==''){
        alert('salary is required !');
        document.getElementById('salary').focus();
        return false;
    }
    else if(age==''){
        alert('age is required !');
        document.getElementById('age').focus();
        return false;
    }
    else if(email==''){
        alert('email is required !');
        document.getElementById('email').focus();
        return false;
    }
}