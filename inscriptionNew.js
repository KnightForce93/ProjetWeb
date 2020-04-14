function validform() {

        var civilite = document.forms["my-form"]["civilite"].value;
        var name = document.forms["my-form"]["full-name"].value;
        var email = document.forms["my-form"]["email-address"].value;
        var pseudo = document.forms["my-form"]["username"].value;
        var adress = document.forms["my-form"]["address"].value;

        if (civilite=="--")
        {
            alert("Veuillez entrer votre civilité");
            return false;
        }else if (name==null || name=="")
        {
            alert("Veuillez entrer votre nom complet");
            return false;
        }else if (email==null || email=="")
        {
            alert("Veuillez entrer votre adresse e-mail");
            return false;
        }else if (pseudo==null || pseudo=="")
        {
            alert("Veuillez entrer votre pseudo");
            return false;
        }else if (adress==null || adress=="")
        {
            alert("Veuillez entrer votre adresse");
            return false;
        }
    }