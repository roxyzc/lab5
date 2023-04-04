<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="<?= strpos(@$_REQUEST["mod"], "/") ? "../style.css" : "style.css" ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="https://cdn.discordapp.com/attachments/755224936414445629/1090188299127238676/92164501.jpg" type="image/x-icon" />
</head>

<body>
    <div class="container">
        <nav>
            <a href="<?= strpos(@$_REQUEST["mod"], "/") ? "../home" : "home" ?>">Home</a>
            <a href="<?= strpos(@$_REQUEST["mod"], "/") ? "../about" : "about" ?>">About</a>
            <a href="<?= strpos(@$_REQUEST["mod"], "/") ? "../contact" : "contact" ?>">Contact</a>
        </nav>