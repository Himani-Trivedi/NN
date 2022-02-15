<?php

include '../../connect.php';

require_once '../../fpdf/fpdf.php';

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $charge = $_REQUEST['charge'];
}

$sql_nurse = "select * from `request_form` where `Request_id`=$id";
$result_nurse = mysqli_query($con, $sql_nurse);
$row_nurse = mysqli_fetch_assoc($result_nurse);
$service = $row_nurse['service_name'];
$n = $row_nurse['nurse_email'];
$u = $row_nurse['User_Email'];


$sql_n = "SELECT * FROM `user_payment` WHERE `request_form`=$id";
$result_n = mysqli_query($con, $sql_n);


if (!$result_nurse || !$result_n) {
    die(mysqli_error($con));
}

?>
<table>

    <?php

    ob_end_clean();
    $pdf = new FPDF('p', 'mm', 'A4');
    $pdf->AddPage();

    $pdf->Image('../../logo.jpeg', 35, 6, 30);

    $pdf->SetFont('Arial', 'B', 20);
    $pdf->SetTextColor(0, 204, 204);
    $pdf->Cell(0, 30, "Neighbouring Nurse", 0, 1, 'C');

    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Ln(20);

    $row = mysqli_fetch_assoc($result_n);
    $pdf->Cell(0, 10, "Payment Date :", 0, 0, 'L');
    $pdf->Cell(0, 10, $row['Time'], 0, 1, 'R');
    $pdf->Cell(0, 10, "Payment Id :", 0, 0, 'L');
    $pdf->Cell(0, 10, $row['pay_id'], 0, 1, 'R');
    $pdf->Cell(0, 10, "Pay Amount :", 0, 0, 'L');
    $pdf->Cell(0, 10, $row['Tran_amount'], 0, 1, 'R');
    $pdf->Ln(10);

    $sql_u = "select * from `patient` where `Email`='$u'";
    $result_u = mysqli_query($con, $sql_u);
    $row_n = mysqli_fetch_assoc($result_u);
    $u_name = $row_n['Name'];
    $u_email = $row_n['email2'];

    $pdf->Cell(0, 10, "User :", 0, 0, 'L');
    $pdf->Cell(0, 10, $u_name, 0, 2, 'R');
    $pdf->Cell(0, 10, $u_email, 0, 1, 'R');
    $pdf->Ln(10);

    $sql_n = "select * from `requested_nurse` where `email`='$n'";
    $result_n = mysqli_query($con, $sql_n);
    $row_n = mysqli_fetch_assoc($result_n);
    $n_name = $row_n['name'];
    $n_email = $row_n['email2'];

    $pdf->Cell(0, 10, "Nurse :", 0, 0, 'L');
    $pdf->Cell(0, 10, $n_name, 0, 2, 'R');
    $pdf->Cell(0, 10, $n_email, 0, 1, 'R');
    $pdf->Ln(10);

    $pdf->Cell(0, 10, "Service :", 0, 0, 'L');
    $pdf->Cell(0, 10, $service, 0, 2, 'R');
    $pdf->Cell(0, 10, $charge . " Rs.", 0, 1, 'R');
    $pdf->Ln(10);

    $pdf->Cell(0, 10, "Thanks for your payment", 1, 0, 'C');

    $file = time() . "payment_receipt" . '.pdf';
    $pdf->output($file, 'S');

    header("location:../profile/App.php");

    ob_end_flush();

    ?>
</table>