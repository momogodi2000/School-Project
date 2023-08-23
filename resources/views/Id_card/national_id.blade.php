<!DOCTYPE html>
<html>
<head>
    <title>National ID Card Form</title>
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
        .form-group select {
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
    </style>
</head>
<body>
    <h1>National ID Card Form</h1>

    <form id="idCardForm" method="POST" action="{{ url('storeIdCard') }}">
        @csrf
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="full_name" required>

        <label for="dateOfBirth">Date of Birth:</label>
        <input type="text" id="dateOfBirth" name="date_of_birth" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>

        <button type="submit">Submit</button>
    </form>

    <div id="qrCodeContainer"></div>

    <script src="https://cdn.jsdelivr.net/npm/qrious"></script>
    <script>
        // JavaScript animation for form submission
        const form = document.getElementById('idCardForm');
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            form.classList.add('submitted');
            setTimeout(() => {
                form.submit();
            }, 1000);
        });

        // Generate QR code on form submission
        form.addEventListener('submit', (event) => {
            event.preventDefault();

            const formData = new FormData(form);
            const qrCodeData = {};
            for (const [key, value] of formData.entries()) {
                qrCodeData[key] = value;
            }

            const qrCodeText = JSON.stringify(qrCodeData);
            const qrCodeContainer = document.getElementById('qrCodeContainer');
            qrCodeContainer.innerHTML = '';

            const qr = new QRious({
                element: qrCodeContainer,
                value: qrCodeText,
                size: 200
            });
        });
    </script>
</body>
</html>