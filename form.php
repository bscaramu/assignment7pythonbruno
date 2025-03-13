<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Input Form</title>
    <style>
        body {
            background-color:rgb(75, 72, 72); 
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color:rgb(255, 255, 255); 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            color:rgb(251, 255, 15); 
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 2px solid rgb(56, 28, 43); 
            border-radius: 5px;
        }
        button {
            background-color:rgba(240, 214, 70, 0.83); 
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color:rgba(128, 33, 33, 0.77); 
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="process.php" method="post">
            <label for="integers">Enter integers separated by commas:</label>
            <input type="text" name="integers" id="integers">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>