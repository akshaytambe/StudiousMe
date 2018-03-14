<?php
session_start();
if(!isset($_SESSION['user'])){
 header("location:userlogin.php?problem = not logged in");
 exit();
}
?>
<?php
$usernm=$_SESSION['user'];
?>

<?php
include("MPDF57/mpdf.php");

ob_start();
include "receipt.php"; 
$template = ob_get_contents();
ob_end_clean();

$mpdf=new mPDF('','A4','','',32,25,27,25,16,13,'L'); 

$mpdf->WriteHTML($template);

$mpdf->Output('issuereceipt.pdf', 'D');
?>