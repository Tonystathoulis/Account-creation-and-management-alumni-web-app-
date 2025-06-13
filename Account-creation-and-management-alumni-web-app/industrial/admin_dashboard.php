<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['fname']) && $_SESSION['is_admin'] == 1) {
    include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style> 
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
}

.navigation {
    overflow: hidden;
    background-color: rgb(179, 0, 0);
    position: fixed;
    top: 0;
    width: 100%;
}

.footer {
  position: relative;
  width: 100%;
  background: #3586ff;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-iconitem,
.menuitem {
  list-style: none;
}

.social-iconlink {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-iconlink:hover {
  transform: translateY(-10px);
}

.menulink {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menulink:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

.wave {
  position: absolute;
  top: -100px;
  left: 0;
  width: 100%;
  height: 100px;
  background: url("https://i.ibb.co/wQZVxxk/wave.png");
  background-size: 1000px 100px;
}

.wave#wave1 {
  z-index: 1000;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 999;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 1000;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 999;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}
</style>
<body>
<div class="navigation">
 <img src="logo.png" alt="Alumni Logo" class="center">
</div>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="container mt-5">
        <h2 class="mb-4">Admin Dashboard</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM users";
                $stmt = $conn->query($sql);
                $count = 1;
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $count++ . "</th>";
                    echo "<td>" . $row['fname'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <form action="logout.php" method="post">
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
    </div>
</body>
</html>

<?php
} else {
    header("Location: login.php");
    exit();
}
?>
