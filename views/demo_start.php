<?php
require_once('util.inc.php');
require_once('session_start.php');
/* Prepare parameters */
$func = "checkouts";
$modalDisplay = false;
$capDisplay = false;
$toUrl = isset($_GET["url"]) ? $_GET["url"] : "test.paystra.net/v1/";

$param = [];
$param['entity'] = $_SESSION['entityId'];
$param['token'] = $_SESSION['gotToken'];
dataInput:{
    if($toUrl == "test.paystra.net/v1/"){
        $mode = "&testMode=EXTERNAL";
    }
    elseif ($toUrl == "paystra.net/v1/") {
        $mode = "";
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $_SESSION['entityId'] = isset($_POST["entityId"]) ? $_POST['entityId'] : false;
        $_SESSION['gotToken'] = isset($_POST["gotToken"]) ? $_POST['gotToken'] : false;
        $_SESSION['country'] = isset($_POST["country"]) ? $_POST['country'] : false;
        $_SESSION['city'] = isset($_POST["city"]) ? $_POST['city'] : false;
        $_SESSION['street'] = isset($_POST["street"]) ? $_POST['street'] : false;
        $_SESSION['street2'] = isset($_POST["street2"]) ? $_POST['street2'] : false;
        $_SESSION['postcode'] = isset($_POST["postcode"]) ? $_POST['postcode'] : false;
        $_SESSION['fname'] = isset($_POST["fname"]) ? $_POST['fname'] : false;
        $_SESSION['lname'] = isset($_POST["lname"]) ? $_POST['lname'] : false;
        $_SESSION['bdate'] = isset($_POST["bdate"]) ? $_POST['bdate'] : false;
        $_SESSION['email'] = isset($_POST["email"]) ? $_POST['email'] : false;
        $_SESSION['mobile'] = isset($_POST["mobile"]) ? $_POST['mobile'] : false;
        $_SESSION['phone'] = isset($_POST["phone"]) ? $_POST['phone'] : false;
        $_SESSION['amount'] = isset($_POST["amount"]) ? $_POST['amount'] : false;
        $_SESSION['currency'] = isset($_POST["currency"]) ? $_POST['currency'] : false;

        // $param = [];
        $param['entity'] = $_SESSION['entityId'];
        $param['token'] = $_SESSION['gotToken'];
        $param['inputParams']['entityId'] = $_SESSION['entityId'];
        $param['inputParams']['gotToken'] = $_SESSION['gotToken'];
        $param['inputParams']['country'] = $_SESSION['country'];
        $param['inputParams']['city'] = $_SESSION['city'];
        $param['inputParams']['street'] = $_SESSION['street'];
        $param['inputParams']['street2'] = $_SESSION['street2'];
        $param['inputParams']['postcode'] = $_SESSION['postcode'];
        $param['inputParams']['fname'] = $_SESSION['fname'];
        $param['inputParams']['lname'] = $_SESSION['lname'];
        $param['inputParams']['bdate'] = $_SESSION['bdate'];
        $param['inputParams']['email'] = $_SESSION['email'];
        $param['inputParams']['mobile'] = $_SESSION['mobile'];
        $param['inputParams']['phone'] = $_SESSION['phone'];
        $param['inputParams']['amount'] = number_format($_SESSION['amount'], 2, '.', "");
        $param['inputParams']['currency'] = $_SESSION['currency'];
        $param['inputParams']['merchantTransactionId'] = time();
        $param['inputParams']['paymentType'] = "DB";
        $param['inputParams']['ip'] = getUserIP();
        $param['request_uri'] =  $func;
        $inputParam = "entityId=" . $param['inputParams']['entityId'] . 
                "&amount=" . $param['inputParams']['amount'] .
                "&currency=" . $param['inputParams']['currency'] .
                "&paymentType=" . $param['inputParams']['paymentType'] .
                "&merchantTransactionId=" . $param['inputParams']['merchantTransactionId'] .
                "&registrations[0].id=8ac7a49f6f473aab016f562cb960701d" .
                "&customer.ip=" . $param['inputParams']['ip'] .
                "&billing.street1=" . $param['inputParams']['street'] .
                "&billing.street2=" . $param['inputParams']['street2'] .
                "&customer.email=" . $param['inputParams']['email'] .
                "&billing.postcode=" . $param['inputParams']['postcode'] .
                "&billing.city=" . $param['inputParams']['city'] .
                "&billing.country=" . $param['inputParams']['country'].
                "&customer.phone=" . $param['inputParams']['phone'] .
                "&customer.mobile=" . $param['inputParams']['mobile'] .
                "&customer.birthDate=" . $param['inputParams']['bdate'] .
                "&customer.givenName=". $param['inputParams']['fname'] .
                "&customer.surname=". $param['inputParams']['lname'] . $mode
                ;
                //"&recurringType=INITIAL" .
                //"&createRegistration=true";
        
        /* Request new payment session */
        $responseData = request($func, $inputParam, $param['inputParams']['gotToken']);
        $param['responseData'] = $responseData;
        $param['inputParam'] = $inputParam;
        $responseArray = json_decode($responseData, true);
        $param['id'] = isset($responseArray['id']) ? $responseArray['id'] : false;
        if($_SESSION['entityId']){
            $capDisplay = true;
            $param['capDisplay'] = $capDisplay;
        }
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['clear'])){
        clearSession();
    }
    function clearSession(){
        session_unset();
        session_destroy();
        $_SESSION['entityId'] = $_SESSION['gotToken'] = '';
    }
}


dataOutput:{
    $checkoutId = isset($_GET['id']) ? $_GET['id'] : false;
    $uri = "checkouts/".$checkoutId ."/payment?entityId=" .$_SESSION['entityId'];
    $outputData = request($uri,'',$_SESSION['gotToken']);
    $outputArray = json_decode($outputData, true);
    $param['outputParams']['outputData']=$outputData;
    $text1=str_replace('","', "\n", $outputData);
    $text2=str_replace('"', '', $text1);
    $text3=str_replace(',', "\n", $text2);
    $text4=str_replace(" ", "\n", $text3);
    if (!empty($text4)){
        $param['outputParams']['outputDataFixed'] = str_replace("/\s+/", "\n", $text4);
    }
    // $checkoutId = $outputArray['ndc'];
    if (!empty($outputArray['id'])){
        $param['outputParams']['id'] = $outputArray['id'];
    }
    if (!empty($outputArray['registrationId'])){
        $param['outputParams']['registrationId'] = $outputArray['registrationId'];
    }
    if (!empty($outputArray['paymentType'])){
        $param['outputParams']['paymentType'] = $outputArray['paymentType'];
    }
    if (!empty($outputArray['paymentBrand'])){
        $param['outputParams']['paymentBrand'] = $outputArray['paymentBrand'];
    }
    if (!empty($outputArray['amount'])) {
        $param['outputParams']['amount'] = $outputArray['amount'];
    }
    if (!empty($outputArray['currency'])) {
        $param['outputParams']['currency'] = $outputArray['currency'];
    }
    if (!empty($outputArray['descriptor'])) {
        $param['outputParams']['descriptor'] = $outputArray['descriptor'];
    }
    if (!empty($outputArray['merchantTransactionId'])) {
        $param['outputParams']['merchantTransactionId'] = $outputArray['merchantTransactionId'];
    }
    if (!empty($outputArray['result']['code'])) {
        $param['outputParams']['code']  = $outputArray['result']['code'];
    }
    if (!empty($outputArray['result']['description'])) {
        $param['outputParams']['description']  = $outputArray['result']['description'];
    }
    if (!empty($outputArray['resultDetails']['ExtendedDescription'])) {
        $param['outputParams']['ExtendedDescription']  = $outputArray['resultDetails']['ExtendedDescription'];
    }
    if (!empty($outputArray['resultDetails']['AcquirerResponse'])) {
        $param['outputParams']['AcquirerResponse']  = $outputArray['resultDetails']['AcquirerResponse'];
    }
    if (!empty($outputArray['resultDetails']['reconciliationId'])) {
        $param['outputParams']['reconciliationId']  = $outputArray['resultDetails']['reconciliationId'];
    }
    if (!empty($outputArray['resultDetails']['ConnectorTxID1'])) {
        $param['outputParams']['ConnectorTxID1']  = $outputArray['resultDetails']['ConnectorTxID1'];
    }
    if (!empty($outputArray['resultDetails']['ConnectorTxID3'])) {
        $param['outputParams']['ConnectorTxID3']  = $outputArray['resultDetails']['ConnectorTxID3'];
    }
    if (!empty($outputArray['resultDetails'])){
        $param['outputParams']['resultDetails'] = $outputArray['resultDetails'];
    }
    if(!empty($outputArray['card']['bin'])){
        $param['outputParams']['bin'] = $outputArray['card']['bin'];
    }
    if (!empty($outputArray['card']['last4Digits'])) {
        $param['outputParams']['last4Digits'] = $outputArray['card']['last4Digits'];
    }
    if(!empty($outputArray['card']['holder'])){
        $param['outputParams']['holder'] = $outputArray['card']['holder'];
    }
    if (!empty($outputArray['card']['expiryMonth'])) {
        $param['outputParams']['expiryMonth'] = $outputArray['card']['expiryMonth'];
    }
    if (!empty($outputArray['card']['expiryYear'])) {
        $param['outputParams']['expiryYear'] = $outputArray['card']['expiryYear'];
    }
    if (!empty($outputArray['customer']['givenName']) && !empty($outputArray['customer']['surname'])){
        $param['outputParams']['name'] = $outputArray['customer']['givenName'];
        $param['outputParams']['surname'] = $outputArray['customer']['surname'];
    }
    if(!empty($outputArray['customer']['phone'])){
        $param['outputParams']['phone']=$outputArray['customer']['phone'];
    }
    if(!empty($outputArray['customer']['mobile'])){
        $param['outputParams']['mobile']=$outputArray['customer']['mobile'];
    }
    if(!empty($outputArray['customer']['email'])){
        $param['outputParams']['email']=$outputArray['customer']['email'];
    }
    if(!empty($outputArray['customer']['ip'])){
        $param['outputParams']['ip']=$outputArray['customer']['ip'];
    }
    if(!empty($outputArray['billing']['street1'])){
        $param['outputParams']['street1']=$outputArray['billing']['street1'];
    }
    if(!empty($outputArray['billing']['street2'])){
        $param['outputParams']['street2']=$outputArray['billing']['street2'];
    }
    if(!empty($outputArray['billing']['city'])){
        $param['outputParams']['city']=$outputArray['billing']['city'];
    }
    if(!empty($outputArray['billing']['postcode'])){
        $param['outputParams']['postcode']=$outputArray['billing']['postcode'];
    }
    if (!empty($outputArray['billing']['country'])) {
        $param['outputParams']['country']=$outputArray['billing']['country'];
    }
    if (!empty($outputArray['threeDSecure']['eci'])) {
        $param['outputParams']['eci']=$outputArray['threeDSecure']['eci'];
    }
    if (!empty($outputArray['customParameters']['CTPE_DESCRIPTOR_TEMPLATE'])) {
        $param['outputParams']['ctpeDescriptorTemplate']=$outputArray['customParameters']['CTPE_DESCRIPTOR_TEMPLATE'];
    }
    if (!empty($outputArray['risk']['score'])) {
        $param['outputParams']['score']=$outputArray['risk']['score'];
    }
    if (!empty($outputArray['buildNumber'])) {
        $param['outputParams']['buildNumber']=$outputArray['buildNumber'];
    }
    if (!empty($outputArray['timestamp'])) {
        $part = $outputArray['timestamp'];
        $date = explode(" ",$part);
        $param['outputParams']['date']= $date[0];
        $param['outputParams']['time']= $date[1];
    }
    if (!empty($outputArray['ndc'])) {
        $param['outputParams']['ndc']=$outputArray['ndc'];
    }

    if(isset($_GET["id"]) and isset($_GET["resourcePath"]) and isset($param['outputParams']['id'])){
        $modalDisplay = true;
        $param['modalDisplay'] = $modalDisplay;
    }
}
/* present the data to the browser using twig */
$param['afterPayment'] = $_SERVER['PHP_SELF'];
echo getTwig()->render('demo_start.twig',$param);
?>
