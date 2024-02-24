<!DOCTYPE html>
<html>

<head>
    <title>Point of Sales</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" >
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <style>
:root {
    --primary: #;
    --bg: #ffffff;
}

* {
    font-family: 'Poppins',sans-serif;
    margin : 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border:none;
    text-decoration: none;
}

body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: var(--bg);
    color: #ffffff;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.2rem 7%;
    background-color: #935e43;
    box-shadow: 5px 5px 10px rgba(1, 1, 1, 0.2);
    position: fixed;
    top:0;
    right:0;
    left:0;
}

.navbar .nav-logo{
    font-size: 2rem;
    font-weight: 700;
    color: #ffffff;
    font-style: italic;

}

.navbar .nav-items a{
    display: inline-block;
    font-size: 1rem;
    color:#ffffff;
    margin: 0 0.8rem;
}

.navbar .nav-items a:hover {
    color: #000000;
}
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="nav-logo">Point of Sales</a>
        <div class="nav-items">
            <a href="#food-beverages">Food & Beverages</a>
            <a href="#beauty-health">Beauty & Health</a>
            <a href="#home-care">Home Care</a>
            <a href="#baby-kid">Baby & Kid</a>
        </div>

        {{-- <div class="nav-extra">
            <a href="" id="search"><i data-feather="search"></i></a>
        </div> --}}
    </nav>
    <!-- Navbar End -->

    <script>
        feather.replace();
    </script>
</body>

</html>
