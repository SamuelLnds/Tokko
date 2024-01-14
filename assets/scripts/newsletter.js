document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form[action="/Tokko/"]');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        var email = form.querySelector('input[type="email"]').value;

        if (validateEmail(email)) {
            alert(`L'adresse ${email} a bien été inscrite à la newsletter de Tokko !`);
            form.reset();
        } else {
            alert("Veuillez entrer une adresse email valide.");
        }
    });
});

function validateEmail(email) {
    var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return regex.test(email);
}
