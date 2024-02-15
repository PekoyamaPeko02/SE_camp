<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Noto Sans', sans-serif;
            background: linear-gradient(to right, #ffcc00, #ff6666);
            color: #fff;
        }

        #container {
            text-align: center;
            background-color: #333;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #ffcc00;
            margin-bottom: 20px;
        }

        input {
            padding: 10px;
            margin: 10px 0;
            width: 200px;
            border: 2px solid #ffcc00;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            color: #333;
            background-color: #fff;
            outline: none;
        }

        button {
            background-color: #ffcc00;
            color: #333;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff9900;
        }

        #output {
            margin-top: 30px;
            color: #fff;
            font-size: 16px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin: 12px 0;
            color: #ddd;
            font-size: 16px;
        }
    </style>

</head>

<body>

    <div id="container">
        <h1>Multiplication Table</h1>
        <input type="number" id="numberInput" placeholder="Enter a number">
        <button id="generateBtn">Generate Table</button>
        <div id="output"></div>
    </div>

    <script>
        $(document).ready(function () {
            $('#generateBtn').click(function () {
                var num = $('#numberInput').val();
                if (!isNaN(num) && num !== "") {
                    $('#output').empty();
                    var table = '<h2>Multiplication Table for ' + num + '</h2><ul>';
                    for (var i = 1; i <= 10; i++) {
                        table += '<li>' + num + ' x ' + i + ' = ' + (num * i) + '</li>';
                    }
                    table += '</ul>';
                    $('#output').append(table);
                } else {
                    alert("Please enter a valid number.");
                }
            });
        });
    </script>
</body>

</html>
