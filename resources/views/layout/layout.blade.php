<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>{{$title}}</title>
</head>
<body>
    <div class="header">
        
    <center><h3>header</h3></center>
    </div>
    <center><div class="link">
        <h3>
            <a href="/">Home</a> ||
            <a href="about">About</a> ||
            <a href="blog">Blog Post</a>
         </h3>     
    </div>
    </center>
    <br><br>
    @yield('container')
    <br><br>
    <div class="footer">
    <center><h3>Footer</h3></center>
    </div>
</body>
</html>