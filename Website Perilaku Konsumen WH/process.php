<?php
if ($_SERVER["REQUEST_METHOD"] == "post"){
    $name = htmlspecialchars($_POST['name']):
    $service =htmlspecialchars($_POST[service]);

    //whatsapp message preparation
    $whatsappNumber ="6285663300487";
    $message = urlencode("Halo, saya $name ingin memesan layanan $service.") 
    $url = "https://wa.me/$whatsappNumber?text=#message";

    // Redirect to Whatsapp
    header("location: $url");
    exit();
}
?>