<?php
$questions = questionsToObject(getQuestionsArray() );
?>

<h1 style=size:22px >RESULTS</h1>
<table>

<tr>

<th> Question  </th>
<th> Correct </th>
<th> Incorrect </th>v

</tr>

<?php for($i =0; $i<count($questions);++$i)?>
{


<tr>

<td> <?php $i ?> </td>

<?php if (isCorrect() == true)?>
{
<td style=background-color:green>   </td>
<td> </td>
}  else 
{<td> </td>
<td style=background-color:red> </td>}

</tr>
}



</table>