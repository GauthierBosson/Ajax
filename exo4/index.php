<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 4</title>
</head>
<body>
<h2>Formulaire de connexions</h2>
<div id="login">
    <form action="#" method="post" id="connexion">
        <label for="email" id="labelE"> Email :
            <input type="email" name="email" placeholder="Email" id="email"></label> <br>
        <label for="password" id="labelP"> Mot de passe :
            <input type="password" name="password" placeholder="Mot de passe" id="password"></label> <br>
        <button type="submit" id="envoi">Envoyer </button>
    </form>
</div>
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script>
    /*$('#envoi').click(function (e) {
        var email = $('#email').val();
        var password = $('#password').val();

        e.preventDefault();
        if ($('#email').val() == ''){
            setError('.error');
            //msgAppend('#labelE', '<div class="error">Veuillez remplir ce champs</div>');
            inputError('#email','border','1px solid red');
        }else{
            $('.error').remove();

            inputSuccess('#email','border','1px solid green');
        }
        if ($('#password').val() == ''){
            setError('.errorP');
            //msgAppend('#labelP', '<div class="errorP">Veuillez remplir ce champs</div>');
            inputError('#password','border','1px solid red');

        }else{
            setError('.errorP');

            inputSuccess('#password','border','1px solid green');
        }
        $.ajax({
            type: 'POST',
            url: 'login.php',
            dataType: 'json',
            data: {email: email , password: password},
            timeout: 4000,
            success: function (data) {
                console.log(data);
                if (data.success){
                    $('#login').hide();
                    msgAppend('body', '<div><h2>Vous etes bien connecté </h2></div>');
                    setError('.errorI')

                }else {
                    if (data.errors.incorrectEmail || $('#email').val() == ''){
                        inputError('#email','border','1px solid red');
                        msgAppend('#labelE', '<div class="error">Votre adresse e-mail est erronée</div>');



                    }
                    if (data.errors.incorrectPassword){
                        inputError('#password','border','1px solid red');
                        msgAppend('#labelP', '<div class="error">Votre mot de passe est erronée</div>');

                    }

                }


            }
        })
    })
    function setError(input) {
        $(input).remove();

    }

    function inputError(input, css, valeur) {
        $(input).css(css,valeur)
    }

    function inputSuccess(input, css, valeur) {
        $(input).css(css,valeur)
    }

    function msgAppend(input, msg) {
        $(input).append(msg)
    }*/



    $('#envoi').click(function (e) {
        var email = $('#email').val();
        var password = $('#password').val();

        e.preventDefault();
        if ($('#email').val().length == '') {
            setError('.error');
            msgAppend('#labelE', '<div class="error">Veuillez remplir ce champs</div>');
            inputError('#email', 'border', '1px solid red');
        } else if ($('#password').val().length == '') {
            $('.error').remove();
            setError('.errorP');
            msgAppend('#labelP', '<div class="error">Veuillez remplir ce champs</div>');
            inputError('#password', 'border', '1px solid red');


        } else {
            setError('.errorP');
            inputSuccess('#email', 'border', '1px solid green');
            inputSuccess('#password', 'border', '1px solid green');
            $.ajax({
                type: 'POST',
                url: 'login.php',
                dataType: 'json',
                data: {email: email, password: password},
                timeout: 4000,
                success: function (data) {
                    console.log(data);
                    if (data.success) {
                        $('#login').hide();
                        msgAppend('body', '<div><h2>Vous etes bien connecté </h2></div>');
                        setError('.errorI')

                    } else {
                        if (data.errors.incorrectEmail === true) {
                            setError('.error');

                            inputError('#email', 'border', '1px solid red');
                            msgAppend('#labelE', '<div class="error">Votre adresse e-mail est erronée</div>');


                        }
                        if (data.errors.incorrectPassword) {
                            setError('.error');
                            inputError('#password', 'border', '1px solid red');
                            msgAppend('#labelP', '<div class="error">Votre mot de passe est erronée</div>');

                        }

                    }


                }
            })
        }
    })

    function setError(input) {
        $(input).remove();

    }

    function inputError(input, css, valeur) {
        $(input).css(css,valeur)
    }

    function inputSuccess(input, css, valeur) {
        $(input).css(css,valeur)
    }

    function msgAppend(input, msg) {
        $(input).append(msg)
    }



</script>
</body>
</html>