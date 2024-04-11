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
    <h2>ናይ መስርሒ መመዝገቢ ቅጥዒ</h2>
    <form action="eregister.php" method="POST" enctype="multipart/form-data">
      <label for="name">ሙሉእ ሽም</label>
      <input type="text" id="name" name="name" placeholder="ሙሉእ ሽሞም የእትዉ" required>

      <label for="password">መሕለፊ ቃል</label>
      <input type="password" id="password" name="password" placeholder="መሕለፊ ቃል የእትዉ" required>

       <label for="role">እጃሞም ሰራሕተኛ ወይ መስርሒ የእትዉ</label>
      <select id="role" name="role">
        <option value="employer">መስርሒ</option>
        <option value="employee">ሰራሕተኛ</option>
      </select>   

      <label for="phone">ስልኪ ቁፅሪ</label>
      <input type="text" id="phone" name="phone" placeholder="ስልኪ ቑፅሪ የእትዉ" required>

      <label for="job">ዝደልይዎ ዓይነት ስራሕተኛ </label>
      <input type="text" id="job" name="job" placeholder="ዘለዎም ክፍቲ ስራሕ የእትዉ" required>

      <label for="education">ተደላዪ ፆታ</label>
      <input type="text" id="gender" name="gender" placeholder="ዝደልይዎ ፆታ የእትዉ" required>

      <label for="amount">ተደላዬ ቁፅሪ</label>
      <input type="text" id="amount" name="amount" placeholder="ዝደልዩዎ በዝሒ ሰራሕተኛ የእትዉ" required>

      <label for="education">ዝደልይዎ ደረጃ ትምህርቲ/ስራሕ ልምዲ</label>
      <input type="text" id="education" name="education" placeholder="ዝደልይዎ ሞያ ወይ ድረጃ ትምህርቲ የእትዉ">

      <label for="workplace">ናይ ስራሕ ቦታ</label>
      <input type="text" id="workplace" name="workplace" required placeholder="ናይ ስራሕ ቦትኦም የእትዉ">

      <label for="salary">ደሞወዝ</label>
      <input type="text" id="salary" name="salary" placeholder="ደመወዝ ብቁፅሪ ወይ ብስምምዕ ዝብል የእትዉ" required>

      <input type="submit" value="ይመዝገቡ">
    </form>
  </div>

 </section>

  <footer>
    <p>&copy; Group 3 SWE Final project. All rights reserved.</p>
  </footer>
</body>
</html>


