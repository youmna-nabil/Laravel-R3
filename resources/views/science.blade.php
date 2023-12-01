<!DOCTYPE html>
<html>
<head>
  <title>Science Page</title>
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
    
    .topic {
      margin-bottom: 20px;
    }
    
    .topic h2 {
      font-size: 24px;
      margin: 10px 0;
    }
    
    .topic p {
      line-height: 1.5;
    }
    
    .topic img {
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
    <h1>Science Page</h1>
  </header>
  
  <main>
    <div class="topic">
      <img src="chemistry.jpg" alt="Chemistry">
      <h2>Chemistry</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper aliquet elit, sit amet hendrerit mi vestibulum vitae.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper aliquet elit, sit amet hendrerit mi vestibulum vitae.</p>
    </div>
    
    <div class="topic">
      <img src="biology.jpg" alt="Biology">
      <h2>Biology</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper aliquet elit, sit amet hendrerit mi vestibulum vitae.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper aliquet elit, sit amet hendrerit mi vestibulum vitae.</p>
    </div>
    
    <div class="topic">
      <img src="physics.jpg" alt="Physics">
      <h2>Physics</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper aliquet elit, sit amet hendrerit mi vestibulum vitae.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper aliquet elit, sit amet hendrerit mi vestibulum vitae.</p>
    </div>
    <div class="clearfix"></div>
  </main>
</body>
</html>