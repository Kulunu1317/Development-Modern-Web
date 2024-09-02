<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sector Advisory Committees</title>
    

    <header>
      <img src="govLogo.png" id="img1" />
      <div class="logo">
        <h1>Ministry of Industries</h1>
      </div>
      <nav>
        <ul>
          <li><a href="Industry Sectors.php">Industry Sectors</a></li>
          <li><a href="ministryOverview.php">The Ministry</a></li>
          <li><a href="visa recommendation.php">Visa Recommendation</a></li>
          <li><a href="contact.php">Services</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="registation.php">Register</a></li>
        </ul>
      </nav>
    </header>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #c2b280; 
            color: #333;
            padding: 20px;
            text-align: center;
            font-size: 1.5em;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        .title {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 20px;
            color: #6d4c41; 
        }

        .sectors {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .sector {
            width: 200px;
            text-align: center;
            transition: transform 0.3s, border-bottom 0.3s;
            border-bottom: 3px solid transparent; 
        }

        .sector img {
            width: 100%;
            height: auto;
            border-radius: 50% / 50%; 
        }

        .sector h3 {
            margin: 10px 0;
            padding: 0 10px;
            font-size: 1em;
            color: #333;
        }

        .sector:hover {
            transform: scale(1.05);
            border-bottom: 3px solid #FFD700; 
        }

        .highlight {
            border-bottom: 3px solid #FFD700; 
        }

        a {
            text-decoration: none;
            color: inherit;
        }


        body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: hsl(0, 100%, 100%);
      color: #000000;
      padding: 10px 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header #img1 {
      width: 50px;
      height: 50px;
      margin-left: 20px;
    }

    header .logo {
      display: flex;
      align-items: center;
    }

    header .logo h1 {
      margin: 0;
      padding-left: 10px; 
    }

    header nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    header nav ul li {
      margin: 0 15px;
    }

    header nav ul li a {
      color: #050505;
      text-decoration: none;
      font-weight: bold;
    }

    header nav ul li a:hover {
      text-decoration: underline;
    }
    body,
    html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: Arial, sans-serif;
    }

    .container {
      justify-content: flex-end;
      align-items: center;
      height: 100%;
      position: relative;
      top: 0px;
    }

    .banner-img {
      width: 1180px;
      height: 590px;
      object-fit: cover;
    }

    .menu {
      background-color:#f4f4f4;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
    }

    .menu-item {
      padding: 15px 20px;
      border-bottom: 1px solid #ddd;
      text-align: left;
      font-weight: bold;
      color: #333;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .menu-item:last-child {
      border-bottom: none;
    }
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #ffffff;
      color: #fff;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header #img1 {
      width: 50px;
      height: 50px;
      margin-left: 20px;
    }

    header .logo {
      display: flex;
      align-items: center;
    }

    header .logo h1 {
      margin: 0;
      padding-left: 10px; 
    }

    header nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    header nav ul li {
      margin: 0 15px;
    }

    header nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    header nav ul li a:hover {
      text-decoration: underline;
    }

    main {
      display: flex;
      justify-content: space-between;
      padding: 20px;
    }

    .contact-info,
    .upcoming-events,
    .map {
      width: 30%;
    }

    .map iframe {
      width: 100%;
      height: 300px;
    }

    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      position: relative;
      width: 100%;
      bottom: 0;
    }

    contact-info {
      position: relative;
    }
    </style>
</head>
<body>
    <header>
        LIST OF SECTOR ADVISORY COMMITTEES
    </header>
    <main>
        <div class="title">Please select an Industry Sector to view more information,</div>
        <div class="sectors">
            <a href="processed_food.html" class="sector" onclick="highlight(this)">
                <img src="processed food.jpg" alt="Processed food">
                <h3>Processed food</h3>
            </a>
            <a href="packaging.html" class="sector" onclick="highlight(this)">
                <img src="packaging.jpg" alt="Packaging">
                <h3>Packaging</h3>
            </a>
            <a href="tea_value_added_tea_beverages.html" class="sector" onclick="highlight(this)">
                <img src="Tea,value added tea.jpg" alt="Tea, Value added Tea, Beverages">
                <h3>Tea, Value added Tea, Beverages</h3>
            </a>
            <a href="coir_products.html" class="sector" onclick="highlight(this)">
                <img src="coir products.jpeg" alt="Coir and coir products">
                <h3>Coir and coir products</h3>
            </a>
            <a href="spices_and_essential_oils.html" class="sector" onclick="highlight(this)">
                <img src="spices and essential oils.jpg" alt="Spices and Essential Oils">
                <h3>Spices and Essential Oils</h3>
            </a>
            <a href="milk_products.html" class="sector" onclick="highlight(this)">
                <img src="milk products.jpg" alt="Milk and Milk products">
                <h3>Milk and Milk products</h3>
            </a>
            <a href="gem_and_jewellery.html" class="sector" onclick="highlight(this)">
                <img src="Gem.jpg" alt="Gem and Jewellery">
                <h3>Gem and Jewellery</h3>
            </a>
            <a href="rubber_and_plastic_products.html" class="sector" onclick="highlight(this)">
                <img src="rubber.jpg" alt="Rubber and Plastic products">
                <h3>Rubber and Plastic products</h3>
            </a>
            <a href="boat_building.html" class="sector" onclick="highlight(this)">
                <img src="boat building.jpg" alt="Boat Building">
                <h3>Boat Building</h3>
            </a>
            <a href="automobile.html" class="sector" onclick="highlight(this)">
                <img src="Automobile.jpg" alt="Automobile">
                <h3>Automobile</h3>
            </a>
            <a href="wood_and_furniture.html" class="sector" onclick="highlight(this)">
                <img src="Wood.jpeg" alt="Wood and furniture">
                <h3>Wood and furniture</h3>
            </a>
            <a href="electrical_and_electronic_products.html" class="sector" onclick="highlight(this)">
                <img src="electrical.jpg" alt="Electrical and Electronic products">
                <h3>Electrical and Electronic products</h3>
            </a>
            <a href="ceramic_porcelain_tile_and_granite.html" class="sector" onclick="highlight(this)">
                <img src="ceramic.jpg" alt="Ceramic, Porcelain, Tile and Granite">
                <h3>Ceramic, Porcelain, Tile and Granite</h3>
            </a>
            <a href="minerals.html" class="sector" onclick="highlight(this)">
                <img src="Minerals.jpg" alt="Minerals">
                <h3>Minerals</h3>
            </a>
            <a href="paint_chemical_and_painting_materials.html" class="sector" onclick="highlight(this)">
                <img src="Paint.jpeg" alt="Paint, Chemical and Painting Materials">
                <h3>Paint, Chemical and Painting Materials</h3>
            </a>
        </div>
    </main>
    <script>





<main>
      <div class="contact-info">
        <h2>Ministry of Industries,</h2>
        <p>
          No. 73/1,<br />
          Galle Road,<br />
          Colombo 003,<br />
          Sri Lanka.
        </p>
        <p>
          Tel: +94 112 392149<br />
          +94 112 392150
        </p>
        <p>Email: admin1@industry.gov.lk</p>
      </div>
      <div class="upcoming-events">
        <h2>Upcoming Events - Year 2024</h2>
      </div>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.83543450932!2d144.96315781531687!3d-37.81627917975195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43a78e6f0d%3A0xb77fa2f5e09e7a99!2sMinistry%20of%20Industries%20and%20Commerce!5e0!3m2!1sen!2slk!4v1597646223712!5m2!1sen!2slk"
          width="600"
          height="450"
          frameborder="0"
          style="border: 0"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
        ></iframe>
      </div>
    </main>

        function highlight(element) {
            
            document.querySelectorAll('.sector').forEach(el => el.classList.remove('highlight'));
            
       
            element.classList.add('highlight');
        }
    </script>
</body>
</html>

