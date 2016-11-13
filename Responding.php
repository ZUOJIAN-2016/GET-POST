<?php
$name=$_GET['Name'];
$Check_number=$_POST['Check'];
session_start();
if($name&&!$Check_number)
{
    echo'帅气的'.$name.'你好呀<br>';
    $random=rand(1000,9999);
    echo '你的验证码是'.$random;
    echo "<script>setInterval(function(){Count_Five_Seconds();},5000);
     function Count_Five_Seconds() {
       alert('五秒时间到！请输入你的验证码！')
       window.location.href='Check.html';
     }
    </script>";
   $_SESSION['Random_Number']=$random;
}
else if(!$name&&!$Check_number)
{
    echo'请重新输入！';
}
else if($Check_number==$_SESSION['Random_Number'])
{
    echo "恭喜你记忆力还行！";
}
else if($Check_number!=$_SESSION['Random_Number'])
{
    echo "少年你撸多了";
}

