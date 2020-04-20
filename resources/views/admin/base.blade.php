<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    html{
      background-color: #e6e6e6;
      font-family: "Nexa-Regular";
    }
    .btn-logout{
          color: black;
          font-size: 24px;
          text-decoration: none;
          float: right;
    }
    .adddata{
      color: white;
      text-decoration: none;
      background: rgba(0,0,0,0.5);
      text-align: center;
      padding: 50px;
    }
    .adddata:hover{
      background: rgba(0,0,0,0.4);

    }

    @font-face {
      font-family: 'Nexa-Bold';
      src: url('../../resources/fonts/Nexa-Bold.otf');
    }
    @font-face {
      font-family: 'Nexa-Regular';
      src: url('../../resources/fonts/Nexa-Light.otf');
    }
    .table{
      width: 100%;
      text-align: center;
      margin-top: 10px;
     border-color: rgba(0,0,0,0.5);
     border-style: solid;
    }
    </style>
    <!-- Fonts -->

</head>
<body>
<main class="py-4">
    @yield('content')
</main>

</body>
</html>
