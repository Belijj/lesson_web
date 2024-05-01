<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <link rel="stylesheet" href="./index.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./index.js"></script>
</head>
<body>
    <h1>Php lesson</h1>
    <form action="./request.php" method="post" class="form" id="productForm">
        <input type="text" id="login" name="login" class="form-control" placeholder="Login"><br>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name"><br>
        <input type="text" id="password" name="price" class="form-control" placeholder="Password"><br>
        <div class="buttons">
            <button type="submit" class="btn btn-success" id="add">Register</button>
        </div>
    </form>
</body>
</html>
