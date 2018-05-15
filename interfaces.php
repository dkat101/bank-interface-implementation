<?php


/**
 * Interface transaction handles transactions
 */
interface transaction {
    /**
     * @return mixed
     */
    public function getCurrentBalance();

    /**
     * @param $amount
     * @return mixed
     */
    public function setNewCurrentBalance($amount);
}

/**
 * Interface transactionAlert handles client alerts
 */
interface transactionAlert {
    /**
     * @param $amount
     * @return mixed
     */
    public function sendAlert($amount);
}