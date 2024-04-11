<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
    
    <nav>
      <h1 class="header1"> ኦን ላይን መስርሕን ሰራሕተኛን መራከቢ ትካል </h1>
      <ul>
        
        <li><a href="homepage.html">ዋና ገፅ</a></li>
        <li><a href="employer regn.php">መስርሒ</a></li>
        <li><a href="employee regn.php">ሰራሕተኛ</a></li>
        <li><a href="aboutus.html">ብዛዕባና</a></li>
      </ul>
    </nav>
    <button class="login1"><a href="login.php">ይእተዉ </a></button>
  </header>
  </header>

  <section class="body-bar">

   <div class="container">
    <h2>ናይ ሰራሕተኛ መመዝገቢ ቅጥዒ</h2>
    <form action="wregister.php" method="POST" enctype="multipart/form-data">
      <label for="name">ሙሉእ ሽም</label>
      <input type="text" id="name" name="name" required>

      <label for="password">መሕለፊ ቃል</label>
      <input type="password" id="password" name="password" required>

      <label for="role">እጃሞም ሰራሕተኛ ወይ መስርሒ የእትዉ</label>
      <select id="role" name="role">
        <option value="employer" required>መስርሒ</option>
        <option value="employee" required>ሰራሕተኛ</option>
      </select>

      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phone" required>

      <label>ፆታ</label>
      <div>
      <label for="male">ተባዕታይ</label>
      <input type="radio" id="male" name="gender" value="Male" checked required>
      <label for="female">አነስታይ</label>
      <input type="radio" id="female" name="gender" value="Female" required>
      </div>

      <label for="job">ዝደልይዎ ዓይነት ስራሕ</label>
      <input type="text" id="job" name="job" required>

      <label for="education">ደረጃ ትምህርቲ</label>
      <input type="text" id="education" name="education">

      <label for="attachment">መረዳእተኦም የተሓሕዙ</label>
      <input type="file" id="attachment" name="attachment">

      <label for="workplace">ክሰርሕሉ ዝደልይዎ ቦታ</label>
      <input type="text" id="workplace" name="workplace">

      <input type="submit" value="ይመዝገቡ">
    </form>
  </div>

 </section>

  <footer>
    <p>&copy; Group 3 SWE Final project. All rights reserved.</p>
  </footer>
</body>
</html>



                



