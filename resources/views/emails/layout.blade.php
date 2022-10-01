<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html {
            height: 100%;
        }
        body {
            background: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            font-family:'Helvetica', sans-serif;
            font-size:16px
        }

        h1 {
            font-size: 1.8rem;
        }

        #particles-js {
            position: absolute;
            height: 100vh;
            z-index: -1;
            width: 100%;
        }
        .thank-you-container {
            margin: 0 auto;
            max-width: 500px;
            padding: 0 4em;
        }
        .thank-you-box {
            background: #B6FFCD;
            color: #000;
            padding: 1em 0.5em;
            border-radius: 5px;
            text-align: center;
        }
        .return-black {
            margin: 20px 0;
            text-align: center;
            width: 100%;
            float: left;
            color: #FFFFFF;
            font-family: "JetBrains Mono ExtraBold", sans-serif;
        }
    </style>
</head>
<body>
@yield('content')
</body>
</html>
