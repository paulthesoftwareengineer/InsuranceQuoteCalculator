<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Insurance Quote Calculator</title>
</head>
<body>
    <h1>Insurance Quote Calculator</h1>
    <form action="calculate.php" method="post">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="male" required> Male
        <input type="radio" name="gender" value="female" required> Female<br><br>

        <label for="coverage">Coverage Amount:</label>
        <input type="number" name="coverage" id="coverage" required><br><br>

        <label for="insurance_type">Insurance Type:</label>
        <select name="insurance_type" required>
            <option value="life">Life Insurance</option>
            <option value="health">Health Insurance</option>
            <option value="car">Car Insurance</option>
        </select><br><br>

        <input type="submit" value="Calculate Quote">
    </form>
</body>
</html>
