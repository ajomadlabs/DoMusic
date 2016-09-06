
//
session_start();
$flag=0;
    $con=mysqli_connect("localhost","root","","domusic");
if(!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
if(!empty($_POST["email"]))
{
    $un=$_POST["email"];
    $pd=$_POST["password"];
    $sql="INSERT INTO songs (`s_id`, `s_name`, `s_cat`, `s_file`, `s_details`, `s_img`) VALUES (`$s_id`, `$s_name`, `$s_cat`, `$s_file`, `$s_details`, `$s_img`)";
    $retval=mysqli_query($con,$sql);
    $count=mysqli_num_rows($retval);
    if($count==1){
        $_SESSION["email"]=$un;
        header("Location: admin.php"); 
        exit();
    }
    else
    {
        $flag=1;}
}
else {
        $flag=1;
    }
//