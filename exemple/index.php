<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>AJAX</title>
    <style>
        #view{
            background: #FFD2D2;
            width:60%;
            margin:auto;
            height:10em;
            padding:2em;
            font-size:1.2em;
        }
    </style>
</head>
<body>
    
    <button>Charger le contenu de la pager test.php</button>
    <div id="view"></div>
    
    <script>

        var button = document.querySelector('button');

        button.addEventListener('click', function(){

            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'test.php');
            xhr.send(null);
            xhr.addEventListener('readystatechange', function(){

                if(xhr.readyState === XMLHttpRequest.DONE){

                    if(xhr.status === 200){
                        document.querySelector('#view').textContent = xhr.responseText;
                    } else {
                        document.querySelector('#view').textContent = 'Erreur de récupération : '+xhr.status;
                    }

                }

            });

        });

    </script>
</body>
</html>