<?php

$dischi = [
  [
    "poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
    "title" => "New Jersey",
    "author" => "Bon Jovi",
    "genre" => "Rock",
    "year" => "1988"
  ],
  [
    "poster" => "https://images.pyramidshop.com/images/_popup/ACPPR48056.jpg",
    "title" => "Live at Wembley 86",
    "author" => "Queen",
    "genre" => "Pop",
    "year" => "1992"
  ]
];
?>
<div>
  <p> <?php

  foreach ($dischi as $cd) {
   echo $cd["poster"] . "<br>" . $cd["title"] ."<hr>";
  }



   ?> </p>

</div>
