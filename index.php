<html>
<head>
  <title>Gourmet</title>
  <link type="text/css" rel="stylesheet" href="css/header.css" />
  <link type="text/css" rel="stylesheet" href="css/index.css" />
  <script>
        $("a.field").click(function() {
        var target = $(this).attr("href").substring(1);
        $("#" + target).focus();
        return false;
        });
  </script>
  <?php
    session_start();
    if (!isset($_GET['res'])) {
      $_GET['res'] = '201' ;
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
            echo '<a href="./logout.php">Log Out</a>';
            echo '<a href="./user.php">'.$_SESSION["u_id"].'</a>';

          }
          else {
            echo '<a href="./signup.php">Signup</a>';
            echo '<a onclick="document.getElementById(\'login_user\').focus();">Login</a>';
          }
        ?>
      </div>
  </div>

  <center>
    <div class="search_back">
    <form class="search" name="search" action="search.php" method="get">
      <select name="search_type">
        <option value="food">Food</option>
        <option value="restaurant">Restaurant</option>
      </select>
      <input type="search" placeholder=" Search here" name="keyword" required>
      <button type="submit">Search</button>
    </form>
    </div>
</center>

  </div>
  <div class="headerbg"></div>
      <?php
        if (!isset($_SESSION['u_id'])) {
          echo '<div class="blurbg"></div>';
          echo '<div class="login" >';
          echo '<a name="login"></a>';
          echo '<h1>Login</h1>';
          echo '<form class="loginform" name = "search" action = "./login.php" method = "post">';
          if ($_GET['res'] == '404') {
            echo '<input id="login_user" type = "text" placeholder = " User Not Found" name = "id" required>';
          }
          else{
            echo '<input id="login_user" type = "text" placeholder = " Username" name = "id" required>';
          }

          if ($_GET['res'] == '403') {
            echo '<input type = "password" placeholder = "Password Incorrect" name = "pswd" required>';
          }
          else {
            echo '<input type = "password" placeholder = "Password" name = "pswd" required>';
          }
          echo '<button type = "submit">Login</button>';
        }
        echo '</form></div>';
      ?>



  <!-- <div class="second">
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
  </div> -->
</body>
</html>
