

<!DOCTYPE html>
<html lang="en">
<head>
    <title>URL SHORTNER </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="margin-top: 50px">
    <h2>URL SHORTNER</h2>

    <h3 style="margin-top: 25px;margin-bottom:25px;color:#f56961;font-size: 18px">
        1. Enter any url it will create shorten url with host Zyla <br>
        2. If you type shorten url and then submit then it will redirect to original url format </h3>

    <form action="urlshortner.php" class="needs-validation" method="GET">
        <div class="form-group">
            <label for="uname">ENTER URL :</label>



            <input type="text" class="form-control" id="url" placeholder="Enter URL to short" name="url" required>
        </div>
        <input type="submit" name="submit" class="btn btn-primary"/>
    </form>


</div>


</body>
</html>
