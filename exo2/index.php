<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>AJAX</title>
</head>
<body>
    <div id="name"></div>
    <div id="age"></div>
    <button>json</button>

    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script>
        $('button').click(function(){
            // $.getJSON('test.json', function(data) {
            //     $('#name').html(data.name);
            //     $('#age').html(data.age);
            // });
            $.ajax({
                type: 'GET',
                url: 'test.json',
                dataType: 'json',
                timeout: 4000,
                success: function(data){
                    $('#name').html(data.name);
                    $('#age').html(data.age);
                }
            })
        });
    </script>
</body>
</html>