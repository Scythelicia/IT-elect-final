<?php
session_start();

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true;

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | F & K Apparell</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to bottom, #ffffff, #eaeaea);
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .navbar {
            background-color: #333;
        }

        .navbar-brand {
            font-size: 1.75rem;
            font-weight: bold;
            color: white;
        }

        .nav-link {
            font-size: 1.1rem;
            font-weight: 500;
            color: white;
        }

        .main-container {
            padding: 100px 15px;
            text-align: center;
        }

        .main-container h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 30px;
            letter-spacing: 2px;
        }

        .main-container p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .img-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .img-card {
            text-align: center;
            margin: 10px;
            width: calc(20% - 20px);
            border-radius: 8px;
            overflow: hidden;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            transition: transform 0.3s ease-in-out;
        }

        .img-card img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease-in-out;
        }

        .img-card:hover {
            transform: scale(1.05);
        }

        .img-card h5 {
            font-size: 1.1rem;
            margin: 10px 0;
            font-weight: bold;
        }

        .img-card p {
            font-size: 1rem;
            font-weight: bold;
            margin: 5px 0;
        }

        .img-card .original-price {
            text-decoration: line-through;
            color: #a1a1a1;
            font-size: 0.9rem;
        }

        .img-card .discounted-price {
            color: #e63946;
            font-size: 1.1rem;
            font-weight: bold;
        }

        .coming-soon {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            font-size: 1.1rem;
            padding: 5px 15px;
            border-radius: 25px;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            padding: 15px 30px;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 50px;
            transition: transform 0.2s, background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #218838;
            transform: scale(1.05);
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            font-size: 0.9rem;
        }

        .footer p {
            margin: 0;
        }

        @media (max-width: 768px) {
            .main-container h1 {
                font-size: 2.5rem;
            }

            .main-container p {
                font-size: 1rem;
            }

            .btn-primary {
                font-size: 1rem;
            }

            .img-card {
                width: calc(50% - 20px);
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">F & K Apparell</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-container">
        <h1>Welcome to F & K Apparell</h1>
        <p>Easily manage your wishlist and future purchases with a seamless dashboard experience. Organize, track,
            and prioritize your desired products, ensuring you're always prepared for your next shopping spree.</p>

        <!-- Image Grid -->
        <div class="img-container">
            <div class="img-card">
                <img src="{{ asset('images/JORDAN+TATUM+3+PF.png') }}" alt="Jordan Tatum 3 PF">
                <div class="coming-soon">Coming Soon</div>
                <h5>Jordan Tatum 3 PF</h5>
                <p>
                    <span class="original-price">$130.00</span>
                    <span class="discounted-price">$91.00</span>
                </p>
            </div>
            <div class="img-card">
                <img src="{{ asset('images/JORDAN+LUKA+3+PF.png') }}" alt="Jordan Luka 3 PF">
                <div class="coming-soon">Coming Soon</div>
                <h5>Jordan Luka 3 PF</h5>
                <p>
                    <span class="original-price">$120.00</span>
                    <span class="discounted-price">$84.00</span>
                </p>
            </div>
            <div class="img-card">
                <img src="{{ asset('images/JORDAN+ZION+3+(GS).png') }}" alt="Jordan Zion 3 (GS)">
                <div class="coming-soon">Coming Soon</div>
                <h5>Jordan Zion 3 (GS)</h5>
                <p>
                    <span class="original-price">$100.00</span>
                    <span class="discounted-price">$70.00</span>
                </p>
            </div>
            <div class="img-card">
                <img src="{{ asset('images/GIANNIS+IMMORTALITY+4+EP.png') }}" alt="Giannis Immortality 4 EP">
                <h5>Giannis Immortality 4 EP</h5>
                <p>
                    <span class="original-price">$110.00</span>
                    <span class="discounted-price">$77.00</span>
                </p>
            </div>
            <div class="img-card">
                <img src="{{ asset('images/NIKE+PRECISION+VII.png') }}" alt="Nike Precision VII">
                <h5>Nike Precision VII</h5>
                <p>
                    <span class="original-price">$90.00</span>
                    <span class="discounted-price">$63.00</span>
                </p>
            </div>
        </div>

        <div class="mt-4">
            <a href="/products" class="btn btn-primary">Order Now</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Scythelicia. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
