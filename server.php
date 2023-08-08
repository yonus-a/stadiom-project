<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <div class="container">
    <div class="flex-wrapper">
      <?php

      $persons = [
        ['firstname' => "John", 'lastname' => 'Do', 'age' => '10', 'gender' => 'mail', 'email' => 'johndo@gmail.com', 'tel' => '02136547896'],
        ['firstname' => "Jane", 'lastname' => 'Smith', 'age' => 15, 'gender' => 'mail', 'email' => 'JaneSmith@gmail.com', 'tel' => '02136547896'],
        ['firstname' => "Sarah", 'lastname' => 'Williams', 'age' => 24, 'gender' => 'femail', 'email' => 'SarahWilliams@gmail.com', 'tel' => '02136547896'],
        ['firstname' => "Emilia", 'lastname' => 'Gray', 'age' => 30, 'gender' => 'femail', 'email' => ' EmiliaGray@gmail.com', 'tel' => '02136547896'],
        ['firstname' => "David", 'lastname' => 'Wilson', 'age' => 50, 'gender' => 'mail', 'email' => 'DavidWilson@gmail.com', 'tel' => '02136547896'],
        ['firstname' => "Alexander", 'lastname' => 'Walsh', 'age' => 20, 'gender' => 'mail', 'email' => 'AlexanderWalsh@gmail.com', 'tel' => '02136547896']
      ];

      $firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
      $gender = $_POST["gender"];
      $email = $_POST["email"];
      $age = $_POST["age"];
      $tel = $_POST["tel"];

      if ($firstname != "" && $lastname != "" && $gender != "" && $email != "" && $age != "" && $tel != "") {
        $persons[] = [
          'firstname' => $firstname,
          'lastname' => $lastname,
          'gender' => $gender,
          'email' => $email,
          'age' => $age,
          'tel' => $tel
        ];
      }

      // kids
      echo "<div class='kids'>";
      echo "<h2>Kids</h2>";
      echo "<ul>";
      foreach ($persons as $person) {
        $firstname = $person['firstname'];
        $lastname = $person['lastname'];

        if ($person['age'] < 18) {
          $randomNum = rand(221456, 954754);
          echo "<li><span>$firstname $lastname</span> <span>#$randomNum</span></li>";
        }
      }
      echo "</ul>";
      echo "</div>";

      // mail
      echo "<div class='men'>";
      echo "<h2>Men</h2>";
      echo "<ul>";
      foreach ($persons as $person) {
        $firstname = $person['firstname'];
        $lastname = $person['lastname'];

        if ($person['age'] > 18 && $person['gender'] === "mail") {
          $randomNum = rand(221456, 954754);
          echo "<li><span>$firstname $lastname</span> <span>#$randomNum</span></li>";
        }
      }
      echo "</ul>";
      echo "</div>";

      // men
      echo "<div class='femail'>";
      echo "<h2>Femail</h2>";
      echo "<ul>";
      foreach ($persons as $person) {
        $firstname = $person['firstname'];
        $lastname = $person['lastname'];

        if ($person['age'] > 18 && $person['gender'] === "femail") {
          $randomNum = rand(221456, 954754);
          echo "<li><span>$firstname $lastname</span> <span>#$randomNum</span></li>";
        }
      }
      echo "</ul>";
      echo "</div>";
      ?>
    </div>
  </div>
</body>

</html>