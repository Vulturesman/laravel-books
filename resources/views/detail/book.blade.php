<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Details</title>
    @vite('resources/css/app.scss')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>
    <body>

        <a href="/">Home</a>
        <h1>Title</h1>
        <h3>Written by:</h3>


        <h2>Write Your Review!</h2>
        <form action="/book/{book_id}/review" method="POST">
            <label for="review">Let's write:</label>
            <input type="text" name="review" id="review">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>