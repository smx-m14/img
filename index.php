<!doctype html>

<html>

<head>
    <title>Image Loader</title>
    <meta charset="utf-8">

</head>
<body>
  <img id="imatge" src=""/>


    <script>
        var path = window.location.hash;
        
        var imatge = document.getElementById('imatge');
        imatge.setAttribute('src', path.substring(1));
    </script>
    <style>
        body {
            text-align: center;
            background-image: url(bg.png);
            margin-top: 20px;
        }
    </style>
</body>

</html>