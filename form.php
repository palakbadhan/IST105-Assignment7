<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitwise Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }
        form {
            background: white;
            padding: 20px;
            display: inline-block;
            box-shadow: 0px 0px 10px #aaa;
            border-radius: 10px;
        }
        input {
            padding: 10px;
            width: 80%;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background: #218838;
        }
        h2 {
            text-decoration : underline;
        }
    </style>
</head>
<body>

    <h2>Bitwise Operations</h2>
    <!-- Here i underlined h2, in order to practice branch merging. -->
    <form action="process.php" method="GET">
        <input type="text" name="numbers" placeholder="Enter numbers, e.g., 3,5,7,9" required>
        <input type="number" name="threshold" placeholder="Enter threshold" required>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
