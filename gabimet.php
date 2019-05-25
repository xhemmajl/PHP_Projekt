<head>
<link rel="stylesheet" type="text/css" href="styles.css"></link>
</head>
<?php if(count($errors)>0):?>
<div class="error">
<?php foreach($errors as $error)
{
  echo $error."<br>";
}
?>
</div>
<?php endif?>