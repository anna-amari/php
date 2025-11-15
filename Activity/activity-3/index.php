<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile System</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', 'Segoe UI', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #ffd6e0 0%, #ffe6f0 100%);
      color: #444;
      min-height: 100vh;
      padding: 30px;
    }

    .container {
      max-width: 900px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(255, 182, 193, 0.4);
      padding: 40px;
    }

    header {
      text-align: center;
      margin-bottom: 30px;
    }

    header h1 {
      font-size: 2.5rem;
      color: #d63384;
      margin-bottom: 8px;
    }

    header p {
      font-size: 1.1rem;
      color: #666;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    label {
      font-weight: 600;
      color: #555;
      margin-bottom: 6px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 12px 15px;
      border: 2px solid #ffe0eb;
      border-radius: 10px;
      font-size: 1rem;
      background-color: #fffafc;
      transition: all 0.3s ease;
    }

    input:focus,
    textarea:focus {
      outline: none;
      border-color: #ff9fcf;
      box-shadow: 0 0 8px rgba(255, 143, 179, 0.3);
    }

    button {
      background: linear-gradient(to right, #ff8fb1, #ffb6c1);
      color: white;
      border: none;
      padding: 14px 0;
      border-radius: 10px;
      font-size: 1.1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button:hover {
      background: linear-gradient(to right, #ff76a6, #ff9fbf);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(255, 143, 179, 0.3);
    }

    footer {
      text-align: center;
      margin-top: 30px;
      color: #999;
      font-size: 0.9rem;
    }

    @media (max-width: 600px) {
      .container {
        padding: 25px;
      }

      header h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1>User Profile System</h1>

    </header>

    <form action="profile.php" method="POST">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" required>
      </div>

      <div class="form-group">
        <label>Username:</label>
        <input type="text" name="username" required>
      </div>

      <div class="form-group">
        <label>Email:</label>
        <input type="text" name="email" required>
      </div>

      <div class="form-group">
        <label>Phone Number:</label>
        <input type="text" name="phoneNumber" required>
      </div>

      <div class="form-group">
        <label>Tagline:</label>
        <input type="text" name="tagline" required>
      </div>

      <div class="form-group">
        <label>Description:</label>
        <textarea name="description" rows="4" required></textarea>
      </div>

      <div class="form-group">
        <label>Picture (URL):</label>
        <input type="text" name="picture" placeholder="Enter image URL" required>
      </div>

      <button type="submit" name="submit">Submit Profile</button>
    </form>

    
  </div>
</body>
</html>
