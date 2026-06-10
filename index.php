

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SMK Angkasa</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(120deg, #1e3c72, #2a5298);
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
    }

    .card {
      background: rgba(255,255,255,0.1);
      padding: 30px;
      border-radius: 12px;
      width: 300px;
      text-align: center;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border: none;
      border-radius: 6px;
    }

    button {
      width: 100%;
      padding: 10px;
      margin-top: 15px;
      border: none;
      border-radius: 6px;
      background: #4facfe;
      color: white;
      cursor: pointer;
    }

    button:hover {
      background: #007bff;
    }
  </style>
</head>
  
<body>

  <div class="card">
    <h2>Login SMK Angkasa</h2>

    <!-- INI KUNCINYA -->
    <form action="home.html" method="post">
      <input type="text" placeholder="Username" id="name" required>
      <input type="password" placeholder="Password" id="pass" required>
      <button type="submit">Login</button>
    </form>

  </div>

</body>
</html>
<?php
$name= $_POST ['name'];
$pass= $_POST ['pass'];

$name_tetap="rafael";
$pass_tetap="12345";


if($name == $name_tetap && $pass == $pass_tetap)
  header(location:"home.html");
  exit();
    else 
echo <script>pass atau username salah</script>;

  
?>
