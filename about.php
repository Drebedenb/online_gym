<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
    <div class="wrapper container">
        <?php require "modules/header.php" ?>
        <h3>Form</h3>
        <div>
            <form action="check.php" method="post">
                <input type="email" name="email" class="form-control" placeholder="e-mail">
                <textarea name="message" class="form-control" placeholder="Message"></textarea>
                <button type="submit" class="btn btn-success">Send</button>
            </form>
        </div>
        <?php require "modules/footer.php" ?>
    </div>
</div>
</body>
</html>