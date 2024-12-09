<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
        }

        .welcome-container {
            text-align: center;
        }

        .welcome-container h1 {
            font-size: 4em;
            margin: 0;
        }

        .welcome-container p {
            font-size: 1.5em;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="welcome-container">
        <h1>Welcome to <?php echo $_ENV['APP_NAME'] ?>!</h1>
        <p>We're glad to have you here.</p>
    </div>
</body>

</html>