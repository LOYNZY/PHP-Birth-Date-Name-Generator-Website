<!DOCTYPE html>
<html>
<head>
    <title>PHP Website with Text Boxes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to my PHP website</h1>
    
    <form method="POST">
        <label for="name">My name is:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="birthdate">I was born on:</label>
        <input type="date" name="birthdate" id="birthdate" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
    
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $birthdate = $_POST['birthdate'];
            
            // Calculate age based on birthdate
            $currentDate = new DateTime();
            $birthDate = new DateTime($birthdate);
            $age = $currentDate->diff($birthDate)->y;
            
            echo "<p>Hi $name!</p>";
            echo "<p>You are $age years old.</p>";
        }
    ?>
</body>
</html>