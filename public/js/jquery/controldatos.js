$(document).ready(function(){

    function validarnomape(value){

        var nomapeRexp = /^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/g;
        var str = value.toString().toUpperCase();

        if (!nomapeRexp.test(str)){
            document.getElementById("nombreapellidos").style.color = "red";

            document.getElementById("guardar").disabled = true;
            document.getElementById("nombreapellidos").style.border = "1px solid red";
           
        } else {
            document.getElementById("nombreapellidos").style.color = "green";  

            document.getElementById("guardar").disabled = false; 
            document.getElementById("nombreapellidos").style.border = "1px solid green";
        }
    };

    $("#nombreapellidos").focusout(function(){                            
        validarnomape($('#nombreapellidos').val());                                
    });

    function validardni(value){

        var dniRexp = /^[0-9]{8}[A-Z]$/i;
        var str = value.toString().toUpperCase();

        if (!dniRexp.test(str)){
            document.getElementById("dni").style.color = "red";
            
            document.getElementById("guardar").disabled = true;
            document.getElementById("dni").style.border = "1px solid red";
        } else {
            document.getElementById("dni").style.color = "green";  
           
            document.getElementById("guardar").disabled = false;  
            document.getElementById("dni").style.border = "1px solid green";
        }
    };

    $("#dni").focusout(function(){                            
        validardni($('#dni').val());                                
    });

    function validaremail(value){

        var emailRexp = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/i;
        var str = value.toString().toUpperCase();

        if (!emailRexp.test(str)){
            document.getElementById("email").style.color = "red";
            document.getElementById("guardar").disabled = true;
            document.getElementById("email").style.border = "1px solid red";
        } else {
            document.getElementById("email").style.color = "green";  
            document.getElementById("guardar").disabled = false;   
            document.getElementById("email").style.border = "1px solid green";
        }
    };

    $("#email").focusout(function(){                            
        validaremail($('#email').val());                                
    });

    function validartlf(value){

        var tlfRexp = /^((\+?34([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2})$/;
        var str = value.toString().toUpperCase();

        if (!tlfRexp.test(str)){
            document.getElementById("telefono").style.color = "red";
            document.getElementById("guardar").disabled = true;
            document.getElementById("telefono").style.border = "1px solid red";
        } else {
            document.getElementById("telefono").style.color = "green";  
            document.getElementById("guardar").disabled = false;   
            document.getElementById("telefono").style.border = "1px solid green";
        }
    };

    $("#telefono").focusout(function(){                            
        validartlf($('#telefono').val());                                
    });

    function validarpass(value){

        var passRexp = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{6,16}$/;
        var str = value.toString();

        if (!passRexp.test(str)){
            document.getElementById("password").style.color = "red";
            document.getElementById("guardar").disabled = true;
            document.getElementById("password").style.border = "1px solid red";
        } else {
            document.getElementById("password").style.color = "green";  
            document.getElementById("guardar").disabled = false;   
            document.getElementById("password").style.border = "1px solid green";
        }
    };

    $("#password").focusout(function(){                            
        validarpass($('#password').val());                                
    });

//----------------------- CREAR ALUMNO ----------------------------------------------------------------------


});