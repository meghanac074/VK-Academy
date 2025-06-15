<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Course Price</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #fffde7;
      text-align: center;
      padding: 50px;
    }
    h2 {
      color: #e65100;
    }
    table {
      margin: 30px auto;
      border-collapse: collapse;
      width: 80%;
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px 20px;
      border: 1px solid #ccc;
    }
    th {
      background-color: #ff9800;
      color: white;
    }
    button {
      margin-top: 30px;
      padding: 12px 25px;
      font-size: 18px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <h2>Course Fee Structure</h2>

  <table>
    <tr>
      <th>Course/Level</th>
      <th>Estimated Fee (₹)</th>
    </tr>

    <?php
    $courses = [
      "9th & 10th (All Subjects)" => "₹12,000 – ₹18,000 per year",
      "11th & 12th (Maths, Physics, Chem, Commerce)" => "₹15,000 – ₹25,000 per year",
      "B.Sc, M.Sc, BCA, MCA, B.Pharma, Diploma" => "₹8,000 – ₹20,000 per semester",
      "B.Com, M.Com, MBA (Maths, Chem, Accounts)" => "₹10,000 – ₹22,000 per semester",
      "B.Tech (M1, M2, M3, M4)" => "₹5,000 – ₹8,000 per module",
      "FREE 5 Days Demo Classes" => "₹0 (Free Trial)"
    ];

    foreach ($courses as $course => $fee) {
      echo "<tr><td>$course</td><td>$fee</td></tr>";
    }
    ?>
  </table>

  <form action="thankyou.php" method="post">
    <button type="submit">Submit</button>
  </form>

</body>
</html>
