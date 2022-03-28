<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
            height: 50px;
            background-color: teal;
        }
        ul {
            display: flex;
            
        }
        li {
            margin: 15px 10px;
            color: white;
            display: inline-block;
            font-size: 1em;
            font-weight: 600;
            padding: 0 5px;
            justify-content: space-around;
        }
        a {
            text-decoration: none;
            color: white;
        }
        main {
            width: 80%;
            margin: auto;
        }
    </style>
    
    <title>Home</title>
</head>
<body>
    <header>
        <ul>
            <li><a href=home>Home</a></li>
            <li><a href=spotify>Spotify</a></li>
            <li><a href=another>Another One</a></li>
            <li><a href=this>This One</a></li>
            <li><a href=faq>FAQ</a></li>
        </ul>
    </header>
        <main>
            <h1>{{$data ?? ''}}</h1>
        </main>
</body>
</html>