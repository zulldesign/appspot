<html>
<head><title>Camel builder!</title></head>
<body>
<center>

<b>Camels created: </b><?= Class1::$CamelsProcessed ?><br/>
<b>Previous camel: </b><?= Class1::$LastCamel ?><br/>

<form method='get'>
    <br/><h2>Create own camel:</h2><input type='text' name='babycamel' />
    <input type='submit' value='Do it!' />
<form>

<?php
    $x = new Class1;
    $growncamel = $x->MakeCamelFromGet(); // $x->Camel( $_GET['babycamel'] );
    if ($growncamel):
    ?><h2><?= $growncamel ?></h2><?
    endif;
?>

</center>
<body>
</html>