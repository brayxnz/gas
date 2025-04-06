<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ola</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap');

        body {
            font-family: 'Rubik', sans-serif;
            font-size: 1.6rem;
            margin: 0;
        }

        .menu-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px;
        }
        .logo {
            width: 50px;
        }
        .links {
            width: 35px;
        }
        #ContLogo {
            display: flex;
            align-items: center;
            color: white;
            gap: 10px;
            font-family: 'Rubik', sans-serif;
            font-weight: bold;
            font-size: 1.6rem;
            text-decoration: none;
        }
        .nav-links {
            display: flex;
            gap: 34px;
        }
    </style>
</head>
<body>
    <nav class="menu-nav">
        <p id="ContLogo">
            <img src="..\..\imgs\logo.svg" alt="logo" class="logo">
            Gasolinerias Pemex
        </p>
        <div class="nav-links">
            <a href="..\alta\aChofer.php">
                <img src="..\..\imgs\flecha.svg" class="links" alt="Back">
            </a>
            <a href="..\..\index.php">
                <img src="..\..\imgs\home.svg" class="links" alt="Home">
            </a>
        </div>
    </nav>
</body>
</html>