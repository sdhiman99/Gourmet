<html>
<head>
  <title>Gourmet</title>
  <link type="text/css" rel="stylesheet" href="css/header.css" />
  <link type="text/css" rel="stylesheet" href="css/index.css" />
  <?php
    session_start();
    if (!isset($_GET['res'])) {
      $_GET['res'] = '200' ;
    }
  ?>
</head>
<body topmargin=0 leftmargin=0>
  <div class="header">
    <div class="header_top" >
      <div class="left_buttons">
        <a href="./food_list.php" class="header_hover" >Cuisines</a>
        <a href="./rest_list.php">Restaurant</a>
      </div>
      <div class="right_buttons">
        <?php
          if (isset($_SESSION['u_id'])) {
            echo '<a href="./user.php">'.$_SESSION["u_id"].'</a>';
          }
          else {
            echo '<a href="#login">Login</a>';
            echo '<a href="./signup.php">Signup</a>';
          }
        ?>
      </div>
    </div>

    <form class="search" name="search" action="search.php" method="get">
      <select name="search_type">
        <option value="food">Food</option>
        <option value="restaurant">Restaurant</option>
      </select>
      <input type="search" placeholder=" Search here" name="keyword" required>
      <button type="submit">Search</button>
    </form>

  </div>
  <div class="headerbg"></div>

  <div class="blurbg"></div>
  <div class="login" >
    <a name="login"></a>
    <h1>Login</h1>
    <form class="loginform" name = "search" action = "./login.php" method = "post">
      <?php
        if ($_GET['res'] == '404') {
          echo '<input type = "text" placeholder = " User Not Found" name = "id" required>';
        }
        else{
          echo '<input type = "text" placeholder = " Name" name = "id" required>';
        }

        if ($_GET['res'] == '403') {
          echo '<input type = "password" placeholder = "Password not Match" name = "pswd" required>';
        }
        else {
          echo '<input type = "password" placeholder = "Password" name = "pswd" required>';
        }
      ?>
      <button type = "submit">Login</button>
    </form>
  </div>


  <div class="second">
    !!!!!!dfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>
    skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>
    skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>
    skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>
    skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>
    skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>
    skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>
    skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>
    skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>
    skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>
    skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>
    skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>
    skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>
    skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>skjdskdfkfsff<br>
  </div>
</body>
</html>
