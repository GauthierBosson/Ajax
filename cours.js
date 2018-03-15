// load
$('selecteur').load('page.php', function(){
    // Fonction de retour executée
    // uniquement après le chargement complet AJAX
});
//Le contenu de la page 'page.php' sera inséré dans l'élément 'selecteur'

// get
$.get('page.php', {name : 'jean'}, function(data){
    // data contiendra le code source de 'page.php'
}).fail(function(){
    // Fonction executée uniquement si la requête échoue
}).always(function(){
    // Fonction executée dans tous les cas de figure (echec ou réussite de la requête)
});

// post
$.post('page.php', {name : 'jean'}, function(data){
    // data contiendra le code source de 'page.php'
}).fail(function(){
    // Fonction executée uniquement si la requête échoue
}).always(function(){
    // Fonction executée dans tous les cas de figure (echec ou réussite de la requête)
});

// getscript = charge et execute automatiquement un fichier javascript
$.getScript('test.js', function(){
    // Function de retour de requête réusi
});

//getJSON = récupère le JSON de 'page.php', le parse et l'intègre dans data
$.getJSON('page.json', function(data){
    // Fonction de retour
});

// $.ajax = permet de faire une requête ajax personnalisée
$.ajax({
    type: 'GET', // GET, POST, PUT...
    url: 'exemple.php',
    dataType: 'html', // html, json, text, xml, script
    data: { name: 'jean' }, // Données envoyées au serveur
    timeout: 4000, // temps en ms avant que la requête soit considérée commé échouée
    success: function(data){
        // fonction lue en cas de succès
        // data contiendra code source récupéré
    },
    error: function(){
        // fonction executée en cas d'erreur
    },
    beforeSend: function(){
        // Fonction executée dans tous les cas avant l'envoi de la requête
    },
    complete: function(){
        // fonction executée dans tous les cas après la requête
    },
    statusCode: {
        404: function(){
            // fonction executée en cas d'erreur 404
        },
        403: function(){
            // Fonction executee en cas d'erreur 403
        }
    }
});



