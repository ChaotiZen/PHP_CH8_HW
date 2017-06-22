<!DOCTYPE html>
<html>
<head>
    <title>Simplified Craps</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
<main>
    <h1>Simplified Craps</h1>

    <div id="rules">

        <p>Rules:</p>
        <p>After placing your bet in the field below, clicking 'play game' will simulate the rolling of two dice. Based on the sum of those dice, your winnings (or losses) are explained below.</p>
        <Table>
            <tr>
                <th>Sum Of Dice</th>
                <th>Payoff</th>
            </tr>
            <tr>
                <th>2</th>
                <th>3:1</th>
            </tr>
            <tr>
                <th>3 or 4</th>
                <th>1:1</th>
            </tr>
            <tr>
                <th>5 through 9</th>
                <th>You Lose</th>
            </tr>
            <tr>
                <th>10 or 11</th>
                <th>2:1</th>
            </tr>
            <tr>
                <th>12</th>
                <th>5:1</th>
            </tr>

        </Table>
    </div>


    <h2>Ready to play??</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="process_game">

        <label>User bet:</label>
        <input type="text" name="userBet"
               value="<?php echo htmlspecialchars($userBet); ?>"><br>

        <label></label>
        <?php echo $userBetError ?>
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Play game"><br>

        <label>Number Rolled Die 1:</label>
        <span><?php echo $die1; ?></span><br>
        
        <label>Number Rolled Die 2:</label>
        <span><?php echo $die2; ?></span><br>

        <label>Die Sum:</label>
        <span><?php echo $dieSum; ?></span><br>
        
        <label>You won:</label>
        <span><?php echo $AmountWon; ?></span><br>

    </form>

</main>
</body>
</html>