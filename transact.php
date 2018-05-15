<?php

require_once('deposit.php');
require_once('withdraw.php');

// Test withdraw
$transaction = new Withdraw();
echo '<b>Opening balance:</b> ' . $transaction->getCurrentBalance() . '<br>';
echo '<b>Withdraw:</b> 500<br>';
echo '<b>Alert:</b> ' . $transaction->sendAlert(500) . '<br>';
echo '<b>Closing balance:</b> ' . $transaction->setNewCurrentBalance(500) . '<br>';

echo '------------- // -------------' . '<br>';

// Test deposit
$transaction = new Deposit();
echo '<b>Opening balance:</b> ' . $transaction->getCurrentBalance() . '<br>';
echo '<b>Deposit:</b> 500<br>';
echo '<b>Alert:</b> ' . $transaction->sendAlert(500) . '<br>';
echo '<b>Closing balance:</b> ' . $transaction->setNewCurrentBalance(500) . '<br>';