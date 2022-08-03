<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <h2>Hi Hello </h2>

    <input type="button" value="Press this Button" class="btn btn-primary" onclick="init()" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function init() {
            console.log("apel fct din buton")
            $.ajax({
            type: "POST",
            url: 'http://127.0.0.1:8000/cerere',
            data: { },
            success: function(response)
            {
                console.log("cerere post facuta cu succes");
                console.log(response);
        }
        });
    }
       $(document).ready(function() {
    console.log("cerere jquerry");

});
    </script>
</body>


</html>