<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        video{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center;
    object-position: center;
}

.texts{
    height: 94vh;
    display: flex;
    background-color: #000;
    color: #fff;
    font-weight: 900;
    font-size: 100px;
    font-family: sans-serif;
    mix-blend-mode: exclusion;
    user-select: none;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 20px double white;

}
    </style>
</head>
<body>

<div class="container">
    <video class="bg-video" autoplay loop muted>
        <source src="img/web/Flamingo404.webm" type="video/webm">
    </video>
    <div class="texts">

    <div>404</div>
        <div>Page Introuvable...</div>
    <div style="font-size: 20px" onclick="location.href=/Labo_02-VME_EAM_WEB/">Retourner</div>

    </div>
</div>

</body>
</html>