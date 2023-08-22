<!DOCTYPE html>
<html>
<head>
    <title>Birth Certificate Form</title>
</head>
<body>
    <h2>Birth Certificate Application Form</h2>
    <form method="POST" action="process_form.php">
        <label for="child_name">Child's Full Name:</label><br>
        <input type="text" id="child_name" name="child_name" required><br><br>

        <label for="date_of_birth">Date of Birth:</label><br>
        <input type="date" id="date_of_birth" name="date_of_birth" required><br><br>

        <label for="place_of_birth">Place of Birth:</label><br>
        <input type="text" id="place_of_birth" name="place_of_birth" required><br><br>

        <label for="mother_name">Mother's Full Name:</label><br>
        <input type="text" id="mother_name" name="mother_name" required><br><br>

        <label for="father_name">Father's Full Name:</label><br>
        <input type="text" id="father_name" name="father_name" required><br><br>

        <label for="contact_number">Contact Number:</label><br>
        <input type="tel" id="contact_number" name="contact_number" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>