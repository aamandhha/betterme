document.addEventListener('DOMContentLoaded', function() 
{
    var form = document.getElementById('editForm');
    var urlInput = document.getElementById('info_pic_input');

    form.addEventListener('submit', function(event) {
        clearErrors();

        if (!validateUrl()) { event.preventDefault(); }
    });

    function validateUrl() {
        var url = urlInput.value.trim();
        var urlRegex = /^(https?:\/\/)[\w\-]+(\.[\w\-]+)+[/#?]?.*$/;
        var extensionRegex = /\.(png|jpeg)$/;
        var errorSpan = document.querySelector('.error');

        if (!urlRegex.test(url) || !extensionRegex.test(url)) {
            errorSpan.textContent = 'Please enter a valid URL containing .png or .jpeg extension.';
            return false;
        }

        return true;
    }

    function clearErrors() {
        var errorSpan = document.querySelector('.error');
        errorSpan.textContent = '';
    }
});
