<form action= "result.php" method= "post">
    <p>0~9の番号を使って好きな数字の羅列を入力してください。</p>
    <br>
    <input type= "hidden" name= "number" value= "<?php echo mt_rand(0,9); ?>">
    <input type= "submit" value= "占う"/>
    
</form>
