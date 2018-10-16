<?php
if (isset($_POST["sold_type"])) { $sold_type = $_POST["sold_type"];}
if (isset($_POST["adult_count"])) { $adult_count = $_POST["adult_count"];}
if (isset($_POST["kids_3_count"])) { $kids_3_count = $_POST["kids_3_count"];}
if (isset($_POST["kids_11_count"])) { $kids_11_count = $_POST["kids_11_count"];}
if (isset($_POST["kids_18_count"])) { $kids_18_count = $_POST["kids_18_count"];}
if (isset($_POST["teachers_count"])) { $teachers_count = $_POST["teachers_count"];}
if (isset($_POST["first_not"])) { $first_not = $_POST["first_not"];}
if (isset($_POST["price_form_lastname"])) { $price_form_lastname = $_POST["price_form_lastname"];}
if (isset($_POST["price_form_name"])) { $price_form_name = $_POST["price_form_name"];}
if (isset($_POST["price_form_mail"])) { $price_form_mail = $_POST["price_form_mail"];}
if (isset($_POST["price_form_tel"])) { $price_form_tel = $_POST["price_form_tel"];}
if (isset($_POST["price_form_promocode"])) { $price_form_promocode = $_POST["price_form_promocode"];}

// Цены
$adult_price = 37500;
$real_adult_price = 37500;
$kids_price = 32500;
$real_kids_price = 23000;
$teachers_price = 37500;
$real_teachers_price = 32500;

$people_count = $adult_count + $kids_3_count + $kids_11_count + $kids_18_count + $teachers_count;

$summ = ($adult_count * $adult_price) + ($kids_price * ($kids_3_count + $kids_11_count + $kids_18_count)) + ($teachers_price * $teachers_count);
$real_summ = ($adult_count * $real_adult_price) + ($real_kids_price * ($kids_3_count + $kids_11_count + $kids_18_count)) + ($real_teachers_price * $teachers_count);

if ($people_count < 5) {
	$final_price = $real_summ;
	$final_sale = $summ - $real_summ;
}
if ($people_count >= 5) {
	$final_sale = ($summ - $real_summ) + ($real_summ * 0.2);
	$final_price = $summ - $final_sale;
}

$data = array('price' => $final_price,'sale' => $final_sale, 'mail' => $price_form_mail, 'tel' => $price_form_tel, 'count' => $people_count);

echo json_encode($data);


?>