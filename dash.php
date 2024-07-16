<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16th</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Optional custom styles */
        body {
            font-family: Arial, sans-serif;
            align-items: center;
            min-height: 100vh;
            background-color: pink !important;
            overflow: hidden; /* Prevents hearts from being visible outside the body */
            position: relative; /* Necessary for absolute positioning of hearts */
            overflow-y: auto; /* Enable vertical scrolling */
        }
        .card-text {
            min-height: 100px; /* Ensure consistent card height */
        }
        .footer {
            background-color: #343a40; /* Dark background color */
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        /* Heart animation */
        .heart {
            position: absolute;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23FF0000"><path d="M12 21.35l-1.45-1.32C5.4 16.05 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 7.55-8.55 11.54L12 21.35z"/></svg>');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            width: 30px;
            height: 30px;
            animation: float 5s infinite ease-in-out;
        }
        @keyframes float {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            50% {
                transform: translateY(-50px);
                opacity: 0.5;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>

<div class="container mt-3">
    <h1 class="text-center mb-4">Happy 16th to the best GF EVEEER!!</h1>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col mb-4">
            <div class="card h-100">
                <img src="images/img1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Genshin Date</h5>
                    <h3 class="card-text">To more Genshin and games date with you!! Looking forward haat pag farm and build characters</h3>
                    
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col mb-4">
            <div class="card h-100">
                <img src="images/img2.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">My pretty GF</h5>
                    <p class="card-text">Stay pretty and healthy din. Do not forget to take your medicine and adi lako ma remind pirme.</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col mb-4">
            <div class="card h-100">
                <img src="images/img3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ArKateTech</h5>
                    <p class="card-text">Never give up on your dreams. Ma wait it im dream course and job haim like me :D</p>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col mb-4">
            <div class="card h-100">
                <img src="images/img4.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KatJan</h5>
                    <h2 class="card-text">To spending forever with you!!</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <p>Happy 16th, Kate!!<br> We've been together already for the past 1,765 days and I just wanna say thank you for never failing in making me feel loved.<br>
        I will always remind you to take your medicine kay ma live longer pa kita together and I'm really looking forward to our next na pagkikita. <br>
        Kanina an pag open han site may flower na gif didto haak pag uli tuod na ito. I love you soo much and Happy 16th!! 
        </p>
    </div>

    <!-- Floating hearts -->
    <script>
        // Function to create a heart element
        function createHeart() {
            const heart = document.createElement('div');
            heart.classList.add('heart');
            heart.style.left = `${Math.random() * 100}vw`; // Random horizontal position
            heart.style.animationDuration = `${Math.random() * 2 + 1}s`; // Random animation duration
            document.body.appendChild(heart);

            // Remove the heart from the DOM after animation ends
            heart.addEventListener('animationend', () => {
                heart.remove();
            });
        }

        // Create hearts periodically
        setInterval(createHeart, 500); // Adjust timing as needed
    </script>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJy4KgJzV25HE0UuPv3fjBsqQZ4OjY5gmyJCOAY/C" crossorigin="anonymous"></script>
</body>
</html>
