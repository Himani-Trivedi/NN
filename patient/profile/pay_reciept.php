<?php

include '../../connect.php';

require_once '../../fpdf/fpdf.php';

$sql = "SELECT * FROM `payment` where `Pay_id`='pay_IqkZe3TcQVUy3l'";
$result = mysqli_query($con, $sql);


if (!$result) {
    die(mysqli_error($con));
}
?>
<table>

    <?php

    if (mysqli_num_rows($result)) {

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

        $row = mysqli_fetch_assoc($result);

        $pdf->Cell(0, 10, "Payment Date :", 0, 0, 'L');
        $pdf->Cell(0, 10, $row['Pay_time'], 0, 1, 'R');
        $pdf->Cell(0, 10, "Payment Mode :", 0, 0, 'L');
        $pdf->Cell(0, 10, 'upi', 0, 1, 'R');
        $pdf->Ln(10);

        $pdf->Cell(0, 10, "User :", 0, 0, 'L');
        $pdf->Cell(0, 10, "Patient name", 0, 2, 'R');
        $pdf->Cell(0, 10, "Patient Email", 0, 1, 'R');
        $pdf->Ln(10);

        $pdf->Cell(0, 10, "Nurse :", 0, 0, 'L');
        $pdf->Cell(0, 10, "Nurse name", 0, 2, 'R');
        $pdf->Cell(0, 10, "Nurse Email", 0, 1, 'R');
        $pdf->Ln(10);

        $pdf->Cell(0, 10, "Service :", 0, 0, 'L');
        $pdf->Cell(0, 10, $row['Pay_time'], 0, 2, 'R');
        $pdf->Cell(0, 10, $row['Pay_time'], 0, 1, 'R');
        $pdf->Ln(10);

        $pdf->Cell(0, 10, "Thanks for your payment", 1, 0, 'C');

        $file = '../../pay_rec'.time() . "payment_receipt" . '.pdf';
        $pdf->output($file, 'D');
        ob_end_flush();
    }

    ?>
</table>