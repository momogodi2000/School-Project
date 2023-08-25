<!DOCTYPE html>
<html>
<head>
    <title>Contact Us Form</title>
    <style>
        /* CSS styles for form */
        .form-container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-submit {
            text-align: center;
        }

        .form-submit button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Contact Us</h2>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <span id="nameError" class="error"></span>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <span id="emailError" class="error"></span>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <span id="messageError" class="error"></span>
            </div>

            <div class="form-submit">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;

            document.getElementById("nameError").textContent = "";
            document.getElementById("emailError").textContent = "";
            document.getElementById("messageError").textContent = "";

            var isValid = true;

            if (name === "") {
                document.getElementById("nameError").textContent = "Name is required";
                isValid = false;
            }

            if (email === "") {
                document.getElementById("emailError").textContent = "Email is required";
                isValid = false;
            } else if (!isValidEmail(email)) {
                document.getElementById("emailError").textContent = "Invalid email format";
                isValid = false;
            }

            if (message === "") {
                document.getElementById("messageError").textContent = "Message is required";
                isValid = false;
            }

            return isValid;
        }

        function isValidEmail(email) {
            var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }
    </script>
</body>
</html>