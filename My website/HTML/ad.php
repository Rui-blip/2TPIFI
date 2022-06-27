<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../CSS/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../CSS/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div>Here</div>
    <i class="fa fa-address-book"></i>
    <div>Here</div>

    <script>
        window.onload = function() {
            var span = document.createElement('span');

            span.className = 'fa';
            span.style.display = 'none';
            document.body.insertBefore(span, document.body.firstChild);

            alert(window.getComputedStyle(span, null).getPropertyValue('font-family'));

            document.body.removeChild(span);
        };
    </script>
</body>

</html>