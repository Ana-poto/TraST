<?php
require_once '../Auth/config.php';
header("Content-Type: application/rss+xml; charset=ISO-8859-1");


$rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
$rssfeed .= '<rss version="2.0">';
$rssfeed .= '<channel>';
$rssfeed .= '<title>TraST RSS feed</title>';
$rssfeed .= '<link>http://www.mywebsite.com</link>';
$rssfeed .= '<description>This is an example RSS feed</description>';
$rssfeed .= '<language>en-us</language>';
$rssfeed .= '<Nickname> Nume </Nickname>';
$rssfeed .= '<categorii_parcurse> Categorii parcurse </categorii_parcurse>';
$rssfeed .= '<total> Punctaj </total>';


$conn = connDB();

$stmt = $conn->prepare("select * from teste order by total desc");
$stmt->execute();

if($stmt->rowCount()===0){
    return "Fail";
}
else {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $rssfeed .= '<item>';
        $rssfeed .= '<Nickname>' . $Nickname . '</Nickname>';
        $rssfeed .= '<categorii_parcurse>' . $categorii_parcurse . '</categorii_parcurse>';
        $rssfeed .= '<total>' . $total . '</total>';
        $rssfeed .= '</item>';
    }
}

$rssfeed .= '</channel>';
$rssfeed .= '</rss>';

echo $rssfeed;
?>
