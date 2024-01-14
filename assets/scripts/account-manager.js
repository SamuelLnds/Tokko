document.addEventListener('DOMContentLoaded', (event) => {
    const loginButton = document.getElementById('loginButton');

    loginButton.addEventListener('click', function() {
        // Requête AJAX pour charger le formulaire de connexion
        fetch('fragments/login-form.php')
            .then(response => response.text())
            .then(html => {
                document.querySelector('.center-elt').innerHTML = html;
            })
            .catch(error => {
                console.error('Erreur lors du chargement du formulaire de connexion:', error);
            });
    });

    document.body.addEventListener('submit', function(event) {
        if (event.target.matches('.login-form')) {
            event.preventDefault(); 

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (email === 'frederica.patochette@tokko.com' && password === 'mdpAdmin') {
                document.querySelector('.center-elt').style.display = 'none';
                document.querySelector('.cards').style.display = 'block';
            } else {
                console.log(email + password);
                alert('Le compte n\'existe pas.');
            }
        }
    });
});
