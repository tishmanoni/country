<?php
include 'main.php';
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['Amount'], $_POST['account_name'], $_POST['bank_name'], $_POST['account_no'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if ( empty($_POST['Amount'])  || empty($_POST['account_name'])  || empty($_POST['bank_name']) || empty($_POST['account_no'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}
$stmt = $con->prepare('INSERT INTO withdraw_form (Amount, account_name, bank_name, account_no	 ) VALUES (?, ?,?,?)');
$stmt->bind_param('isss',$_POST['Amount'],$_POST['account_name'], $_POST['bank_name'], $_POST['account_no']);
$stmt->execute();
$stmt->close();
// header("refresh:4;url=dashboard/index.php");
echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                        <div class="alert-icon">
                                            <span class="icon-checkmark-circle"></span>
                                        </div>
                                        <strong>Success!</strong>You have successfully requested for withdrawal, you will recive an email for confirmation. 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                                    </div>';
exit;
