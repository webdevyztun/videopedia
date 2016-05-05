<?php
include "config/db.php";
?>
<?php
    //if($_POST)
     if($_POST["name"])
     {
        //$q = "Huzoor";
        //$q = $_POST['search'];
        $q = $_POST["name"];

        //echo $q;

        $strSQL_Result = mysqli_query($cnn,"select id,name,email from live_search where name like '%$q%' or email like '%$q%' order by id LIMIT 5");
        while($row=mysqli_fetch_array($strSQL_Result)) {
            $username = $row['name'];
            $email = $row['email'];
            $b_username = '<strong>' . $q . '</strong>';
            $b_email = '<strong>' . $q . '</strong>';
            $final_username = str_ireplace($q, $b_username, $username);
            $final_email = str_ireplace($q, $b_email, $email);
            ?>
            <div class="show" align="left">
                <!-- <img src="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-prn1/27301_312848892150607_553904419_n.jpg"
                     style="width:50px; height:50px; float:left; margin-right:6px;"/> -->
                     <span class="name"><?php echo $final_username; ?></span>&nbsp;<br/><?php echo $final_email; ?><br/>
            </div>
            <?php
        }
    }
?>
