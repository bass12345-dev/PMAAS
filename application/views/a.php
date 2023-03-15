<?php
include "../../../database/db.php";

$year = $con->real_escape_string(strip_tags($_POST['year']));


$and = 'AND YEAR(date_attendance) = '.$year;
$months = array();
$ontime = array();
$late = array();


for ($m = 1; $m <= 12; $m++) {
$sql = "SELECT * FROM employee_attendance WHERE MONTH(date_attendance) = '$m' AND status_PM = 1 $and AND time_in_PM != '00:00:00'";
$oquery = $con->query($sql);
array_push($ontime, $oquery->num_rows);
$sql = "SELECT * FROM employee_attendance WHERE MONTH(date_attendance) = '$m' AND status_PM = 0 $and";
$lquery = $con->query($sql);
array_push($late, $lquery->num_rows);
$num = str_pad( $m, 2, 0, STR_PAD_LEFT );
$month =  date('M', mktime(0, 0, 0, $m, 1));
array_push($months, $month);

# code...
}

$data['label'] = $months;
$data['late'] = $late;
$data['ontime'] = $ontime;


echo json_encode($data);
?>