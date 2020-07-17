<?php
require "index.php";

$comm='SELECT * FROM expeditable';


$ret = mysqli_query ($conn,$comm) or die (mysqli_error ($conn));
while ( $col = mysqli_fetch_assoc ($ret) )
{
?>

<table>
    <tr style=" ">
        <td style=" border:1px  solid yellow;">
            <?php
            echo "<pre>" . $col['id'] . "  " . "NOM:" . $col['nom'] . "  " . "e-mail:" . $col['mail'] . " " . $col['text'] . "   " . " " . $col['date'] . "</pre>";

            ?>
        </td>
    </tr>
</table>
<?php
}
?>
