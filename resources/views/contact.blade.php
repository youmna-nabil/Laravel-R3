<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
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
    
    form {
      max-width: 400px;
      margin: 0 auto;
    }
    
    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
    }
    
    textarea {
      height: 150px;
    }
    
    input[type="submit"] {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <header>
    <h1>Contact Us</h1>
  </header>
  
  <main>
    <form action="#" method="post">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" placeholder="Your Message" required></textarea>
      <input type="submit" value="Send Message">
    </form>
  </main>
</body>
</html>