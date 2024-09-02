<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Transportation System</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
   

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


  <style>
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
      padding-left: 10px; /* Added padding here to create space */
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
      background-color: rgba(255, 255, 255, 0.9);
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
      background-color: #3b2d1f;
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
      padding-left: 10px; /* Space between logo and text */
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

