
// Izveidojam klausītāju, kas gaida, kad ievades forma tiks nosūtīta.
document.addEventListener('DOMContentLoaded', function() 
{
    // Savācam nepieciešamos DOM elementus darbam.
    var form = document.querySelector('form');
    var fullnameInput = document.getElementById('fullname');
    var usernameInput = document.getElementById('username');
    var passwordInput = document.getElementById('psw');
    var repeatPasswordInput = document.getElementById('psw_repeat');

    // Atiestatam noklusēto validāciju, lai varētu veidot savu.
    form.addEventListener('submit', function(event) 
    {
      clearErrors();

      if (!validateFullname()) { event.preventDefault(); }

      if (!validateUsername()) { event.preventDefault(); }

      if (!validatePasswords()) { event.preventDefault(); }
    });

    // Pārbauda vai vārds ir garuma robežās un satur tikai burtus un vienu tukšumu.
    function validateFullname() 
    {
      var fullname = fullnameInput.value.trim();
      var fullnameRegex = /^[A-Za-z]+\s[A-Za-z]+$/;
      var errorElement = fullnameInput.nextElementSibling;

      if (fullname.length < 7 || fullname.length > 45 || !fullnameRegex.test(fullname)) 
      {
        errorElement.innerText = 'Full name can contain only letters and a single whitespace.';
        return false;
      }

      return true;
    }

    // Pārbauda vai lietotājvārds ir garuma robežās un satur tikai burtus un/vai ciparus.
    function validateUsername() 
    {
      var username = usernameInput.value.trim();
      var usernameRegex = /^[A-Za-z0-9]+$/;
      var errorElement = usernameInput.nextElementSibling;

      if (username.length < 6 || username.length > 20 || !usernameRegex.test(username)) 
      {
        errorElement.innerText = 'Username can contain only letters and numbers.';
        return false;
      }

      return true;
    }

    // Pārbauda vai parole sakrīt ar drošības prasībām un atkārtoti ievadīto paroli.
    function validatePasswords() 
    {
      var password = passwordInput.value;
      var repeatPassword = repeatPasswordInput.value;
      var passwordErrorElement = passwordInput.nextElementSibling;
      var repeatPasswordErrorElement = repeatPasswordInput.nextElementSibling;

      if (password.length < 8 || repeatPassword.length < 8) 
      {
        passwordErrorElement.innerText = 'Passwords must be at least 8 characters long.';
        repeatPasswordErrorElement.innerText = 'Passwords must be at least 8 characters long.';
        return false;
      }

      if (password !== repeatPassword) 
      {
        repeatPasswordErrorElement.innerText = 'Passwords do not match.';
        return false;
      }

      return true;
    }

    // Notīra kļūdas paziņojumus, tad kad viss ir kārtībā.
    function clearErrors() 
    {
      var errorElements = document.querySelectorAll('.error');

      errorElements.forEach(function(element) { element.innerText = ''; });
    }
});
