<?php
//1. Create a new bank account with an inital balance of 400.0.
session_start();
$_SESSION['acc1']['balance'] = 400;
//2. Output the balance.
echo "Salario actual en la cuenta: " . $_SESSION['acc1']['balance'];
//3. Close and reopen the account.
$_SESSION['acc1']['active'] = false;
$_SESSION['acc1']['active'] = true;

//4. Perform a deposit of +150.0 and show the updated balance.
$_SESSION['acc1']['balance'] += 150;
echo "<br>Salario tras la actualizacion: " . $_SESSION['acc1']['balance'];
//5. Perform a withdrawal of -25.0 and show the updated balance.
$_SESSION['acc1']['balance'] -= 25;
echo "<br>Salario tras la actualizacion: " . $_SESSION['acc1']['balance'];
//6. Attempt a withdrawal of -600.0 (which should fail due to insufficient balance).

//7. Output the final balance after all transactions.
echo "<br>Salario tras la actualizacion: " . $_SESSION['acc1']['balance'];
//8. Close the account.
session_abort();
