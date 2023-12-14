<?php 

    require_once __DIR__ ."./../classes/yeabook_class.php";

    function createyearbook_ctr($yearbook_name, $amount, $description, $url, $like, $comment, $views){
    $yearbook = new yearbook_class;
    return $yearbook->createyearbook_cls($yearbook_name, $amount, $description, $url, $like, $comment, $views);
    }
    
     function delete_yearbook_ctr($yearbook_id){
        $yearbook = new yearbook_class;

        return $yearbook->delete_yearbook($yearbook_id);
     }

     function select_one_year_book($yearbook_id){
        $yearbook = new yearbook_class;
        return $yearbook->select_one_year_book($yearbook_id);
     }

function select_all_year_book()
{
   $yearbook = new yearbook_class;
   return $yearbook->select_all_year_books();
}

?>