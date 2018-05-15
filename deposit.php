<?php
/**
 * Created by PhpStorm.
 * User: dk
 * Date: 15/05/18
 * Time: 21:16
 */

require_once('interfaces.php');

class Deposit implements transaction, transactionAlert {

    private $balance = 0;

    /**
     * @return mixed
     */
    public function getCurrentBalance() {
        return $this->balance;
    }

    /**
     * @param $amount
     * @return mixed
     */
    public function setNewCurrentBalance($amount) {
        return $this->balance += $amount;
    }

    /**
     * @param $amount
     * @return mixed
     */
    public function sendAlert($amount) {
        return 'Made a deposit of ' . $amount . ' at ' . date('Y-m-d H:i:s');
    }
}