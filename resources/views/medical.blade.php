<!DOCTYPE html>
<html>
<head>
  <title>Medical Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    
    h1 {
      font-size: 28px;
      margin: 0;
    }
    
    main {
      padding: 20px;
    }
    
    .section {
      margin-bottom: 20px;
    }
    
    .section h2 {
      font-size: 24px;
      margin: 10px 0;
    }
    
    .section p {
      line-height: 1.5;
    }
    
    .section img {
      float: left;
      margin-right: 20px;
      max-width: 200px;
    }
    
    .clearfix::after {
      content: "";
      display: table;
      clear: both;
    }
  </style>
</head>
<body>
  <header>
    <h1>Medical Page</h1>
  </header>
  
  <main>
    <div class="section">
      <img src="doctor.jpg" alt="Doctor">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper aliquet elit, sit amet hendrerit mi vestibulum vitae.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper aliquet elit, sit amet hendrerit mi vestibulum vitae.</p>
    </div>
    
    <div class="section">
      <h2>Services</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper aliquet elit, sit amet hendrerit mi vestibulum vitae.</p>
      <ul>
        <li>Medical Check-ups</li>
        <li>Diagnostic Tests</li>
        <li>Treatment Plans</li>
      </ul>
    </div>
    
    <div class="section">
      <h2>Contact</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper aliquet elit, sit amet hendrerit mi vestibulum vitae.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper aliquet elit, sit amet hendrerit mi vestibulum vitae.</p>
    </div>
    <div class="clearfix"></div>
  </main>
</body>
</html>