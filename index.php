<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubuntu Server-PHP Deployment</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom styles for better spacing -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            padding: 30px;
        }

        .form-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .form-container h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="form-container">
            <h2>Ubuntu Server-PHP Deployment - Lovely Vanessa</h2>
            
            <form action="/submit" method="POST">
                <!-- First Name -->
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                </div>

                <!-- Middle Name -->
                <div class="form-group">
                    <label for="mname">Middle Name:</label>
                    <input type="text" class="form-control" id="mname" name="mname" required>
                </div>

                <!-- Last Name -->
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>

                <!-- Age -->
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" id="age" name="age" required>
                </div>

                <!-- Address -->
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <!-- Course & Section -->
                <div class="form-group">
                    <label for="course">Course & Section:</label>
                    <input type="text" class="form-control" id="course" name="course" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
