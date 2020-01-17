<?php
sleep(5);
echo('You sent : '.$_POST['val']);
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script></head>
<body>
<form id="target">
<input type="text" name="one" value="Hello there" style="vertical-align:middle;"/>
<img id="spinner" src="spinner.gif" height="25" style="vertical-align:middle;display:none;">
</form><div id="result"></div>
<script>
$('#target').change(function(event){
    $('#spinner').show();
    var form=$('#target');
    var txt=form.find('input[name="one"]').val();
    console.log('Sending post');
    $.post('jjj-1.php',{
        'val':txt
    },
    function(data){
        console.log(data);
        var e=$('#result').empty();
        e.spend(data);
        $('#spinner').hide();
    }).error(function(){
        $('#target').css('background-color','red');
        alert("Error!");
    });
});
</script>
</body>
</html>