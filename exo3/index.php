<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>AJAX</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<input type="text" name="ville" id="ville">
<button name="envoi">Envoyer</button> <br><br>
<div class="result">Resultat : </div>
<div id="resultat">
    <table>

    </table>
   <!-- <table>
        <tr>
            <th>Nom</th>
            <th>Codes postaux</th>
            <th>Population</th>
            <th>Départements</th>
        </tr>
        <tr>
           <td></td>
        </tr>
    </table> -->
</div>
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
</script>
<script>


    $('button').click(function(){

        var ville = document.getElementById("ville").value;
        $.ajax({
            type: 'GET',
            url: 'https://geo.api.gouv.fr/communes/',
            dataType: 'json',
            data: {
                nom : ville
            },
            timeout: 4000,
            success: function(data){
                $('table').append(
                    '<tr><th>Nom</th> ' +
                    '<th>Codes Postaux</th>' +
                    '<th>Population</th>' +
                    '<th>Département</th></tr>');
                $('.result').append(data.length);
                for (var i=0; i<data.length; i++){

                    $('table').append('<tr> <td>' + data[i].nom + '</td> <td>'+ data[i].codesPostaux + '</td><td>' + data[i].population + '</td><td>' + data[i].codeDepartement + '</td></tr> ');
                };



                /* "<table> <tr> <th>Nom</th>  <th> Codes postaux</th>  <th>Population</th>  <th>Département</th></tr>"
                 + "<tr><td>" + + "</td> <td>"+ + "</td> <td>"+ +  "</td></tr>"
                 "</table>";*/
            },
            error: function () {
                alert('Erreur')
            }
        })
    });
</script>
</body>
</html>