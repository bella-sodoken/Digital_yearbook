<?php

require_once __DIR__ ."./../controllers/year_book_ctr.php";

function year_book_card($year_book_id, $name, $file_path, $views, $amount)
{
    return "
    <div class='grid-container'>
    <div class='post-entry-1'>
    <a href='../$file_path'><iframe src='../$file_path' alt='' class='#'></iframe></a>
    <button><a href='../$file_path' style='color:white'> $name </a></button>
    <button onclick=window.location.href='payment_template.php?id=$year_book_id&amount=$amount' ><a type='button' href='payment_template.php?id=$year_book_id&amount=$amount' style='color:black'> Buy </a></button>
    <button onclick=incrementLike('likeCount$year_book_id')>Like<span id='likeCount$year_book_id'>0</span>
</button>
</div>
</div>
    ";
}

function display_all_book_card(){
  $result = select_all_year_book();

  if ($result) {
    foreach ($result as $data) {
      $year_book_id = $data['yearbook_id'];
      $name = $data['yearbook_name'];
      $amount = $data['amount'];
      $views = $data['views'];
      $file_path = $data["url"];

      echo year_book_card($year_book_id, $name, $file_path, $views, $amount);
    }
  }
}

// display_all_book_card();

// print_r(select_all_year_book());


?>