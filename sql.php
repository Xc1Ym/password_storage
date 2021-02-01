<?php
$servername = "";//数据库IP
$username = "";//数据库用户名
$password = "";//数据库密码
$dbname = "";//数据库名

//创建连接
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("连接失败：".$conn->connect_error);

}
if ($_POST[name]==""||$_POST[username]==""||$_POST[password]==""||$_POST[kind]=="")
{
    echo "请勿留空";
}
else {
    $sql = "INSERT INTO `password` (`name`, `username`, `password`, `kind`, `time`) VALUES ('$_POST[name]', '$_POST[username]', '$_POST[password]', '$_POST[kind]', '$_POST[date1]')";
    if (mysqli_query($conn,$sql))
    {
        echo "插入成功";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        
    }
    
}


mysqli_close($conn);
?>