document.addEventListener("DOMContentLoaded", function () {
    var submitButton = document.getElementById("submitButton");
    var dealerCodeInput = document.getElementById("dealerCode3");
    var myForm = document.getElementById("myForm");

    submitButton.addEventListener("click", function (e) {
        event.preventDefault(); // annuler la soummetion de formulaire
        var dealerCodeValue = dealerCodeInput.value.trim(); // nettoyer les espaces
        // Vérification si le champ "dealerCode3" est vide
        if (dealerCodeValue === "") {
            errorSpan.textContent = "Le champ 'Dealer Code 3' ne peut pas être vide.";
        } else {
            errorSpan.textContent = ""; // Efface le message d'erreur s'il est valide dans le span
            var test1 = true ; // continuer la soummetion de formulaire  // Si le formulaire est valide, vous pouvez soumettre le formulaire ici
        }



        if (dealerCodeValue.length < 3) {
            errorSpan.textContent = "Le champ 'Dealer Code 3' doit avoir au moins 3 caractères.";
        } else {
            errorSpan.textContent = ""; // Efface le message d'erreur s'il est valide
            var test2 = true ;// Si le formulaire est valide, vous pouvez soumettre le formulaire ici
            
        }

        if(test1 && test2){
            myForm.submit();
        }



    });





});






