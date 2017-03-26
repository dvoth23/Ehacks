<?php
include "config.php";

$questions = questionsToObject(getQuestionsArray());

?>
<div class="report">
<h1 style="font-size:22px"; >RESULTS</h1>
<table  border:2px; border-collapse:collapse> 
<br>
<tr>

<th style="font-size:16px"> Question       </th>
<th style="font-size:16px"> Correct        </th>
<th style="font-size:16px"> Incorrect      </th>

</tr>

<?php for($i =0; $i<count($questions);++$i){?>



<tr>

<td> <?php echo $i?>  </td>

<?php  if ($questions[$i]->isCorrect() == true)
{ ?>
<td style=background-color:green>   </td>
<td> </td>
<?php }

else {?>
<td> </td>
<td style=background-color:red> </td>

</tr>
<?php }

}

if ($_GET['sendEmail'] == true && isset($_GET['email'])) { ?>
<tr><p>Email sent to: <?php echo $_GET['email']; ?></p></tr>
<?php 	
}
?>

</table>
</div>