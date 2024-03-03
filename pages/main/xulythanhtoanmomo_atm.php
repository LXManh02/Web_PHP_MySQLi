<?php
header('Content-type: text/html; charset=utf-8');


include('helper_momo.php');


$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

$partnerCode = 'MOMO';
$accessKey = 'F8BBA842ECF85';
$secretKey = 'K951B6PE1waDMi640xX08PD3vg6EkVlz';

$orderInfo = "Thanh toán qua ATM";
$amount = $_POST['tongtien_vnd'];
$orderId = time() ."";
$redirectUrl = "http://localhost/DATN/index.php?quanly=camon";
$ipnUrl = "http://localhost/DATN/index.php?quanly=camon";
$extraData = "";
$requestId = time() . "";
$requestType = "payWithATM";

    $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
    //before sign HMAC SHA256 signature
    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    $signature = hash_hmac("sha256", $rawHash, $secretKey);
    $data = array('partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature);
    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);  // decode json

    //Just a example, please check more in there

    header('Location: ' . $jsonResult['payUrl']);

?>