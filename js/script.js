// JavaScript code voor de log-in pagina

// Wacht tot de pagina volledig is geladen
document.addEventListener("DOMContentLoaded", function() {

    // Zoek de formulier elementen op
    var loginForm = document.getElementById("login-form");
    var emailInput = document.getElementById("email");
    var passwordInput = document.getElementById("password");
  
    // Voeg een 'submit' eventlistener toe aan het formulier
    loginForm.addEventListener("submit", function(event) {
      event.preventDefault(); // Voorkom dat het formulier wordt verzonden
  
      // Valideer de invoer
      if (emailInput.value.trim() === "") {
        alert("Vul uw e-mailadres in.");
        return;
      }
  
      if (passwordInput.value.trim() === "") {
        alert("Vul uw wachtwoord in.");
        return;
      }
  
      // Verstuur het formulier
      loginForm.submit();
    });
  });
  