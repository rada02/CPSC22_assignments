<?php
error_reporting(E_ALL);
ini_set('display_errors', 1;

//variables to be hard coded
$employeeName = "Ryan Bohrer";
$hours = 40.0;
$rateOfPay = 25.50;
$federalTaxRate = 0.245;
$stateTaxRate = 0.055;

$grossPay = $hours * $rateOfPay;
$federalWihtholding - $grossPay * $federalTaxRate;
$stateWithholding = $grossPay * $stateTaxRate;
$totalDeductions = $federalWithholding + $stateWithholding;
$net = $grossPay - $totalDeductions;

$annualPay = $grossPay * 52;

$hours = number_format($hours,2);
$rateOfPay = number_format($rateOfPay,2);
$grossPay = number_format($grossPay,2);
$federalWithholding = number_format($federalWithholding,2);
$stateWithholding = number_format($stateWithholding,2);
$totalDeductions = number_format($totalDeductions,2);
$net = number_format($net,2);

$federalTaxBracket = "";
if ($annualPay<=11600){
	$federalTaxBracket = "10%";
}
elseif ($annualPay>=11601 && $annualPay <= 47150){
        $federalTaxBracket = "12%";
}
elseif ($annualPay>=47151 && $annualPay <= 100525){
        $federalTaxBracket = "22%";
}
elseif ($annualPay >= 100525 && $annualPay <= 191950){
        $federalTaxBracket = "24%";
}
elseif ($annualPay >=191951 && $annualPay <= 243725){
        $federalTaxBracket = "32%";
}
elseif ($annualPay >= 243726 && $annualPay <= 609350){
        $federalTaxBracket = "35%";
}
else {
	$federalTaxBracket = "37%";

}

echo "<table>"
echo "<tr><th>Employe Name</th><td>$employeeName</td></tr>";
echo "<tr><th>Hours Worked</th><td>$hours</td></tr>";
echo "<tr><th>Rate of Pay</th><td>\$$rateOfPay</td></tr>";
echo "<tr><th>Gross Pay</th><td>$\$$grossPay</td></tr>";
echo "<tr><th>Federal Withholding (24.5%)</th><td>\$$federalWithholding</td></tr>";
echo "<tr><th>State Withholding (5.5%)</th><td>\$$stateWithholding</td></tr>";
echo "<tr><th>Total Deductions</th><td>\$$totalDeductions</td></tr>";
echo "<tr><th>Net Pay</th><td>\$$net</td></tr>";
echo "<tr><th>Feral Tax Bracket</th><td>\$$federalTaxBracket</td></tr>";
?>





