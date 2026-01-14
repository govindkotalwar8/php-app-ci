<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body {
            background: linear-gradient(to right, #74ebd5, #9face6);
            font-family: Arial, sans-serif;
        }

        .container {
            width: 400px;
            margin: 60px auto;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            color: #4a148c;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin: 8px 0 15px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4a148c;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #6a1b9a;
        }

        .success {
            text-align: center;
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Student Registration</h2>

    <form method="post">
        <label>Student Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Age</label>
        <input type="number" name="age" required>

        <label>Course</label>
        <select name="course" required>
            <option value="">Select Course</option>
            <option>Computer Science</option>
            <option>Information Technology</option>
            <option>Electronics</option>
            <option>Mechanical</option>
        </select>

        <input type="submit" name="submit" value="Register">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $course = $_POST['course'];

        echo "<p class='success'>Student Registered Successfully!</p>";
        echo "<p><b>Name:</b> $name</p>";
        echo "<p><b>Email:</b> $email</p>";
        echo "<p><b>Age:</b> $age</p>";
        echo "<p><b>Course:</b> $course</p>";
    }
    ?>
</div>

</body>
</html>
