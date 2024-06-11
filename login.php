<?php include 'header.php' ;

if (isset($_POST['login'])) 
{ 
    extract($_POST);
    $q="select * from login where username='$uname' and password='$pwd'";
    $r=select($q);
    if (sizeof($r)>0) 
    {
        $_SESSION['logid']=$r[0]['login_id'];
        $logid= $_SESSION['logid'];
        if ($r[0]['usertype']=="admin") 
        {
            alert("login successfully");
            return redirect("adminhome.php");

        }
       
        elseif ($r[0]['usertype']=="user") 
        {
            $qu="select * from public_user where login_id='$logid'";
            $ru=select($qu);
            if (sizeof($ru)>0) 
            {
                $_SESSION['userid']=$ru[0]['user_id'];
                $userid=$_SESSION['userid'];
                alert("login successfully");
                return redirect("publichome.php");


            }
        }
        elseif ($r[0]['usertype']=="staff") 
        {
            $qs="select * from staff where login_id='$logid'";
            $rs=select($qs);
            if (sizeof($rs)>0) 
            {
                $_SESSION['staffid']=$rs[0]['staff_id'];
                $staffid=$_SESSION['staffid'];
                alert("login successfully");
                return redirect("staffhome.php");


            }
        }elseif ($r[0]['usertype']=="department") 
        {
            $qd="select * from departments where login_id='$logid'";
            $rd=select($qd);
            if (sizeof($rd)>0) 
            {
                $_SESSION['deptid']=$rd[0]['dept_id'];
                $deptid=$_SESSION['deptid'];
                alert("login successfully");
                return redirect("depthome.php");


            }
        }



    }
}

?>

 <center>

                    
   
   

<form method="POST">


<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>LOGIN</h3>
           <table class="table" style="width:500px;color: green">
            <tr>
                <th>username</th>
                <td><input type="text" name="uname" class="form-control"></td>
            </tr>
            <tr>
                <th>password</th>
                <td><input type="password" name="pwd" class="form-control"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="login" value="LOGIN" class="btn btn-success"></td>
            </tr>
        </table>
      </div>
    </section> 
</form>      
</center>

<?php include 'footer.php' ?>



