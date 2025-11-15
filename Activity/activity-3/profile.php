<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Profile</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffd6e0 0%, #ffe6f0 100%);
      margin: 0;
      padding: 40px;
      color: #444;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 25px;
    }

    .card {
      background-color: #fff;
      border-radius: 20px;
      padding: 30px 25px;
      text-align: center;
      box-shadow: 0 10px 25px rgba(255, 182, 193, 0.35);
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 30px rgba(255, 182, 193, 0.45);
    }

    .profile-picture {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      overflow: hidden;
      margin: 0 auto 20px;
      border: 5px solid #ffe1eb;
      box-shadow: 0 0 10px rgba(255, 192, 203, 0.5);
    }

    .profile-picture img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    h2 {
      font-size: 1.8rem;
      margin: 10px 0 5px;
      color: #d63384;
    }

    h3 {
      font-size: 1.2rem;
      color: #888;
      margin: 0 0 15px;
    }

    .tagline {
      font-style: italic;
      color: #ff7aa8;
      margin-bottom: 10px;
    }

    .description {
      color: #555;
      font-size: 1rem;
      line-height: 1.5;
      margin: 15px 0;
    }

    .button {
      display: inline-block;
      padding: 12px 25px;
      background: linear-gradient(to right, #ff8fb1, #ffb6c1);
      color: white;
      text-decoration: none;
      border-radius: 10px;
      font-weight: 600;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .button:hover {
      background: linear-gradient(to right, #ff76a6, #ff9fbf);
      box-shadow: 0 5px 15px rgba(255, 143, 179, 0.3);
      transform: translateY(-2px);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="profile-picture">
        <img src="<?php echo htmlspecialchars($_POST['picture']); ?>" alt="Profile Picture">
      </div>
      <h2><?php echo htmlspecialchars($_POST['name']); ?></h2>
      <h3>@<?php echo htmlspecialchars($_POST['username']); ?></h3>
      <p class="tagline"><?php echo htmlspecialchars($_POST['tagline']); ?></p>
      <p class="description"><?php echo htmlspecialchars($_POST['description']); ?></p>
    </div>
  </div>
</body>
</html>
