<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> EtO-Free Skincare </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
  <script type="text/javascript" src="javascript.js"></script>
</head>

<body>
  <?php include 'header.php' ?>

  <div class="eto-page">
    <h2> What is Ethylene Oxide? Why is it dangerous?</h2>
    <p>
      According to the World Health Organization, ethylene oxide is a class 1 carcinogen. This means that when humans and animals are exposed to it, the chemical may mutate the DNA of the organism, causing cancer and other harmful side effects. As the sterilization process of beauty products requires ethylene oxide, factories that use it may release the carcinogen into the air, thereby exposing people to the chemical during the production of beauty and skincare products. According to the National Laboratory of Medicine, effects of ethylene oxide exposure include:
    </p>

    <ul>
      <li> Cancer </li>
      <li> Cataracts and eye damage </li>
      <li> Miscarriage </li>
      <li> Headache and memory loss </li>
      <li> Nausea and vomiting </li>
      <li> Irritation of the eyes, skin, and nose </li>
      <li> Problems with brain and nerve functions </li>
    </ul>

    <?php
    $file_contents = file_get_contents('reviews.php');
    $pattern = "/\<.\>\s/";

    preg_match_all($pattern, "<hello> </hello> <hello> </hello> <hello> </hello> <hello> </hello> <hello> </hello> <hello> </hello> <hello> </hello> <hello> </hello> <hello> </hello> <hello> </hello> <hello> </hello> <hello> </hello> <hello> </hello> <hello> </hello ><hello> </hello> <hello> </hello>", $matches);
    echo json_encode($matches);
    ?>
  </div>

  <?php include 'footer.php' ?>
</body>

</html>
