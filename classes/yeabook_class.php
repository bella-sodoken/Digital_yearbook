<?php
require_once __DIR__ ."./../settings/db_class.php";
class yearbook_class extends db_connection
{

    public function createyearbook_cls($yearbook_name, $amount, $description, $url, $like, $comment, $views)
    {
        // $this->connect();
        // $yearbooka = mysqli_real_escape_string($this->conn, $yearbook_id);
        // $yearbookb = mysqli_real_escape_string($this->conn, $yearbook_name);
        // $yearbookc = mysqli_real_escape_string($this->conn, $amount);
        // $yearbookd = mysqli_real_escape_string($this->conn, $description);
        // $yearbooke = mysqli_real_escape_string($this->conn, $url);
        // $yearbookf = mysqli_real_escape_string($this->conn, $like);
        // $yearbookg = mysqli_real_escape_string($this->conn, $comment);
        // $yearbookh = mysqli_real_escape_string($this->conn, $views);
        $sql = "INSERT INTO `yearbook`(`yearbook_name`, `amount`, `description`, `url`, `like`, `comment`, `views`) VALUES ('$yearbook_name', '$amount', '$description', '$url', '$like', '$comment', '$views');";
        
        return $this->db_query($sql);
    }

    function delete_yearbook($yearbook_id)
    {
        $sql = "DELETE FROM `yearbook` WHERE yearbook_id = $yearbook_id";

        return $this->db_query($sql);
    }

    function select_one_year_book($yearbook_id)
    {
        $sql = "SELECT `yearbook_id`, `yearbook_name`, `amount`, `description`, `url`, `like`, `comment`, `views` FROM `yearbook` WHERE `yearbook_id` = $yearbook_id";
        $this->db_query($sql);
        return $this->db_fetch_one();
    }

    function select_all_year_books(){
        $sql = "SELECT * FROM `yearbook`";
        $this->db_query($sql);
        return $this->db_fetch_all();
    }
}

?>