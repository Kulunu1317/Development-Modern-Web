<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visa Recommendation Information</title>

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
            background-color: #f5f5f5; /* Light beige background for the whole page */
        }
        .section {
            padding: 20px;
            border-bottom: 1px solid #ddd;
            background-color: #fff; /* White background for each section */
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .section h2 {
            font-size: 24px;
            margin: 0;
            padding-bottom: 10px;
            border-bottom: 2px solid #d8a77f; /* Beige border for the heading */
            color: #333;
        }
        .section p, .section ul, .section ol {
            margin: 10px 0;
            color: #555;
        }
        .section ul, .section ol {
            padding-left: 20px;
        }
        .accordion {
            margin: 20px 0;
        }
        .accordion .card {
            border: 1px solid #ddd;
            margin-bottom: 10px;
            border-radius: 8px;
        }
        .accordion .card-header {
            background: #d8a77f; /* Beige background for the header */
            cursor: pointer;
            padding: 10px;
            font-weight: bold;
            color: #fff; /* White text for the header */
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            position: relative;
        }
        .accordion .card-body {
            display: none;
            padding: 10px;
            background: #fff; /* White background for the card body */
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
        }
        .accordion .card.active .card-body {
            display: block;
        }
        .accordion .icon {
            position: absolute;
            right: 10px;
            top: 10px;
            font-size: 14px;
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
</head>
<body>
    <section class="section">
        <h2>Visa Recommendation Information</h2>
    </section>

    <section class="section">
        <p><strong>Division: Industry and Industrial Estates Development Division</strong></p>
        <p><strong>Branch: Sector Development Division I, II, III</strong></p>
        <p><strong>Service: Issuance of Entry / Residence Visa Recommendations for Foreign Investors, Executive Skilled technicians and technicians</strong></p>
        <p>Issuing recommendations of Entry / Extension of visa for the importation of Foreign Investors, Executives, Skilled Technicians, and technicians required for manufacturing industries, subject to the restrictions described under Circular No. 01/2006 dated 11.09.2006 issued by the Ministry of Home Affairs.</p>
    </section>

    <section class="section">
        <div class="accordion">
            <div class="card">
                <div class="card-header">
                    <span>Description</span>
                    <i class="icon">+</i>
                </div>
                <div class="card-body">
                    <p>Issuing recommendations of Entry / Extension of visa for the importation of Foreign Investors, Executives, Skilled Technicians, and technicians required for manufacturing industries, subject to the restrictions described under Circular No. 01/2006 dated 11.09.2006 issued by the Ministry of Home Affairs.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <span>Process</span>
                    <i class="icon">+</i>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Submitting the duly completed application and other documents listed in page 4 of the application to relevant Additional Secretary.</li>
                        <li>Field Inspections or calls for interviews will be conducted if required.</li>
                        <li>Refer relevant applications and other documents to the Visa recommendation Review Committee. (VRRC)</li>
                        <li>As per the decision of VRRC, the visa recommendation letter signed by Additional Secretary will be issued via e-mail to the Controller General of Department of Immigration and Emigration with a copy to applicant.</li>
                        <li>In case of inability to make visa recommendations, the applicant will be notified via email.</li>
                        <li>There is no charge</li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <span>Required documents</span>
                    <i class="icon">+</i>
                </div>
                <div class="card-body">
                    <p>Other documents listed under page number 4 of the application form should be submitted.</p>
                    <ul>
                        <li>Request letter</li>
                        <li>Completed application form</li>
                    </ul>
                    <p><strong>For Entry & Residence Visa</strong></p>
                    <ol>
                        <li>Ministry of Industries Registration (First time)</li>
                        <li>Company profile</li>
                        <li>Copies of passports of applicant</li>
                        <li>Educational Qualifications (Specialized Divisions)</li>
                        <li>Previous work experience</li>
                        <li>Evidence of efforts made to recruit Sri Lankans for the relevant vacancies</li>
                        <li>Police Clearance Report (Should be obtained from the relevant country)</li>
                        <li>Copy of the letter of appointment or contract agreement or letter of agreement issued by recruitment agent.</li>
                        <li>Responsibility undertaking affidavit issued by the Board of Directors.</li>
                        <li>Copies of Employees Provident Fund (EPF/ETF) payment receipt of the last 03 months.</li>
                    </ol>
                    <p><strong>Visa Extension</strong></p>
                    <ol>
                        <li>Ministry of Industries Registration (First time)</li>
                        <li>Company Profile</li>
                        <li>Copies of passports of applicant</li>
                        <li>Copies of previous visa recommendation letter</li>
                        <li>Police clearance report obtained from the relevant Sri Lankan police station</li>
                        <li>Copies of Employees Provident Fund (EPF)/ETF Payment Receipts for the last 03 months</li>
                        <li>Extended contract agreement</li>
                        <li>Responsibility undertaking affidavit issued by the Board of Directors</li>
                    </ol>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <span>Application</span>
                    <i class="icon">+</i>
                </div>
                <div class="card-body">
                    <p>Details about the application process and form submission will be provided here.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <span>Contact details</span>
                    <i class="icon">+</i>
                </div>
                <div class="card-body">
                    <p>Contact details for further inquiries and assistance will be provided here.</p>
                </div>
            </div>
        </div>
    </section>



    
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

    <script>
        document.querySelectorAll('.card-header').forEach(header => {
            header.addEventListener('click', () => {
                const card = header.parentElement;
                card.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
