<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  
    <title>Student Profile With BMI Calculator</title>
</head>

<body>
    <form method="POST">
        <div class="profile-container">
            <h2>STUDENT PROFILE</h2>
            <label>Name:</label>
            <input type="text" id="name" required="" name="name">
            <label>Age:</label>
            <input type="text" id="age" required="" name="age">
            <label>Address:</label>
            <input type="text" id="address" required="" name="address">
            <label>Contact Number:</label>
            <input type="tel" id="contactnumber" required="" name="contactnumber">
            <label>Birthdate:</label>
            <input type="date" id="birthdate" required="" name="birthdate">
            <label>Gender:</label>
            <select id="gender" name="gender">
                <option value="male" required="">Male</option>
                <option value="female" required="">Female</option>
            </select>
            <label>Blood Type:</label>
            <input type="text" id="bloodtype" required="" name="bloodtype">
            <label>Height (in meters):</label>
            <input type="number" step="0.01" id="height" name="height" required>
            <label>Weight (in kilograms):</label>
            <input type="number" id="weight" name="weight" required>
            <button type="submit" name="submit">CALCULATE BMI</button>
            <p id="bmi-result" name="bmi"></p>
        </div>
    </form>

    <?php
    include "connection1.php";

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $contact = $_POST['contactnumber'];
        $birthday = $_POST['birthdate'];
        $gender = $_POST['gender'];
        $blood = $_POST['bloodtype'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];

        $BMI = $weight / ($height * $height);

        $sql = "INSERT INTO `information_tb` (`name`, `age`, `address`, `contact`, `birthday`, `gender`, `blood`, `bmi`)
                VALUES ('$name', '$age', '$address', '$contact', '$birthday', '$gender', '$blood', '$BMI')";
        
        if (mysqli_query($conn, $sql)) {
            echo " ";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>
</body>

</html>