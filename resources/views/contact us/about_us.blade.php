<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <style>
        /* CSS styles for About Us page */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .image-container {
            width: 200px;
            height: 200px;
            margin: 0 auto;
            position: relative;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        .image-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .image-overlay:hover {
            opacity: 1;
        }

        .image-overlay p {
            color: #fff;
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>About Us</h1>

        <div class="image-container">
            <img src="cameroon-symbol.PNG" alt="Cameroon Symbol">

            <div class="image-overlay">
                <p>This is the official page of the birth certificate and national ID card of our country.</p>
            </div>
        </div>
    </div>

    <script>
        // JavaScript for image animation
        var imageContainer = document.querySelector('.image-container');
        var imageOverlay = document.querySelector('.image-overlay');

        imageContainer.addEventListener('mouseover', function() {
            imageOverlay.style.opacity = '1';
        });

        imageContainer.addEventListener('mouseout', function() {
            imageOverlay.style.opacity = '0';
        });
    </script>
</body>
</html>