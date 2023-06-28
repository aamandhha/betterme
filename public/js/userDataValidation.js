
// Izveidojam klausītāju, kas gaida, kad ievades forma tiks nosūtīta.
document.addEventListener('DOMContentLoaded', function() 
{
    // Savācam nepieciešamos DOM elementus darbam.
    var form = document.getElementById('editForm');
    var fullnameInput = document.getElementById('info_name_input');
    var usernameInput = document.getElementById('info_username_input');

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
        errorElement.innerText = 'Full name can contain only letters and must have a whitespace.';
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

    // Notīra kļūdas paziņojumus, tad kad viss ir kārtībā.
    function clearErrors() 
    {
      var errorElements = document.querySelectorAll('.error');

      errorElements.forEach(function(element) { element.innerText = ''; });
    }
});
