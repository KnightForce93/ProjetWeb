function validform() {

        var nom = document.forms["my-form"]["nom"].value;
        var prenom = document.forms["my-form"]["prenom"].value;
        var statusRadios = document.forms["my-form"]["statusRadios"].value;
        
        var mail = document.forms["my-form"]["email"].value;
        var mdp = document.forms["my-form"]["mdp"].value;

        var pphoto = document.forms["my-form"]["pphoto"].value;
        var bphoto = document.forms["my-form"]["bphoto"].value;

        var adresse = document.forms["my-form"]["adresse"].value;
        var ville = document.forms["my-form"]["ville"].value;
        var cp = document.forms["my-form"]["cp"].value;
        var pays = document.forms["my-form"]["pays"].value;
        var tel = document.forms["my-form"]["tel"].value;

        if (nom==null || nom=="")
        {
            alert("Veuillez entrer votre nom");
            return false;
        }
        else if (prenom==null || prenom=="")
        {
            alert("Veuillez entrer votre prénom");
            return false;
        } 
        else if (mail==null || mail=="")
        {
            alert("Veuillez entrer votre email");
            return false;
        }
        else if (mdp==null || mdp=="")
        {
            alert("Veuillez entrer votre mot de passe");
            return false;
        }
        else if (statusRadios==null || statusRadios=="")
        {
            alert("Veuillez entrer votre statut");
            return false;
        }
        if(statusRadios=="vendeur")
        {
             if (pphoto==0)
            {
                alert("Veuillez insérer une photo de profil");
                return false;
            }
            else if (bphoto==0)
            {
                alert("Veuillez insérer une photo de couverture");
                return false;
            }
        }
        else if(statusRadios=="acheteur")
        {

             if (adresse==null || adresse=="")
            {
                alert("Veuillez entrer une adresse");
                return false;
            }
            else if (ville==null || ville=="")
            {
                alert("Veuillez entrer une ville");
                return false;
            }
            else if (cp==null || cp=="")
            {
                alert("Veuillez entrer un code postal");
                return false;
            }
            else if (pays==null || pays=="")
            {
                alert("Veuillez entrer un pays");
                return false;
            }
            else if (tel==null || tel=="")
            {
                alert("Veuillez entrer un téléphone");
                return false;
            }   
        }  
    }