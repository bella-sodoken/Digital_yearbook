<?php
require_once __DIR__ ."./../settings/db_class.php";
class payment_class extends db_connection
{

    public function createpayment_cls($amount,$user_id, $payment_type, $date, $time, $payment_status, $yearbook_id)
    {

        $sql = "INSERT INTO `payment`(`amount`, `user_id`, `payment_type`, `date`, `time`, `payment_status`, `yearbook_id`) VALUES ('$amount','$user_id','$payment_type','$date','$time','$payment_status','$yearbook_id');";

        return $this->db_query($sql);

        // return $sql;
    }

    public function delete_payment($payment_id)
    {
        $sql = "DELETE FROM `payment` WHERE paymet_id = $payment_id";

        return $this->db_query($sql);
    }

    public function select_one_payment($payment_id)
    {
        $sql = "SELECT `payment_id`, `amount`, `user_id`, `payment_type`, `date`, `time`, `payment_status`, `yearbook_id` FROM `payment` WHERE `payment_id` = $payment_id";
        $this->db_query($sql);
        return $this->db_fetch_one();
    }

    public function select_all_payment()
    {
        $sql = "SELECT * FROM `payment` WHERE `payment`";
        $this->db_query($sql);
        return $this->db_fetch_all();
    }
}


