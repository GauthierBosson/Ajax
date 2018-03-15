

$('#envoi').click(function (e) {
    var email = $('#email').val();
    var password = $('#password').val();

    e.preventDefault();
    if ($('#email').val() == '') {
        setError('.error');
        //msgAppend('#labelE', '<div class="error">Veuillez remplir ce champs</div>');
        inputError('#email', 'border', '1px solid red');
    } else if ($('#password').val() == '') {
        $('.error').remove();
        setError('.errorP');
        //msgAppend('#labelP', '<div class="errorP">Veuillez remplir ce champs</div>');
        inputError('#password', 'border', '1px solid red');

        inputSuccess('#email', 'border', '1px solid green');
    } else {
        setError('.errorP');

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
                    if (data.errors.incorrectEmail || $('#email').val() == '') {
                        inputError('#email', 'border', '1px solid red');
                        msgAppend('#labelE', '<div class="error">Votre adresse e-mail est erronée</div>');


                    }
                    if (data.errors.incorrectPassword) {
                        inputError('#password', 'border', '1px solid red');
                        msgAppend('#labelP', '<div class="error">Votre mot de passe est erronée</div>');

                    }

                }


            }
        })
    }
}

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