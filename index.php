<?php

//set default values to be used when page first loads
$userBet = 0;
$die1 = 0;
$die2 = 0;
$dieSum = 0;

$userBetError = "";
$AmountWon = 0.0;

//take action based on variable in POST array
//todo move all to POST!!!!!!!!!!!!
$action = filter_input(INPUT_POST, 'action');

switch ($action)
{
    case 'process_game':
        $userBet = filter_input(INPUT_POST, 'userBet',
                FILTER_VALIDATE_FLOAT);

        if (!is_numeric($userBet)||($userBet <= 0))
        {
         $userBetError = "You must enter in a numeric value greater than 0...";   
        }

        $die1 = ($userBetError != "")? 0 : mt_rand(1, 6);
        $die2 = ($userBetError != "")? 0 : mt_rand(1, 6);
        $dieSum = $die1 + $die2;
        $AmountWon = 0.0;


        if ($userBetError == "") // no error 
        {
            switch ($dieSum)
            {
                case 2:
                    $AmountWon = $userBet * 3;
                    break;
                case 3:
                case 4:
                    break;
                case 5:
                case 6:
                case 7:
                case 8:
                case 9:
                    $AmountWon = $userBet - ($userBet * 2);
                    break;
                case 10:
                case 11:
                    $AmountWon = $userBet * 2;
                    break;
                case 12:
                    $AmountWon = $userBet * 5;
                    break;
            }
        }
        break;
}
include 'Game.php';

?>