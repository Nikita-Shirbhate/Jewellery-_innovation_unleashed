<?php
if(isset($_POST['sub']))
  {
   
    $email=$_POST['email'];
 
     
    $query=mysqli_query($con, "insert into tblsubscriber(Email) value('$email')");
    if ($query) {
   echo "<script>alert('Your subscribe successfully!.');</script>";
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
  ?>
<footer id="footer">
              <div class="container">
                     <div class="cols">
                            <div class="col">
                                   <h3>Shorts Links</h3>
                                   <ul>
                                          <li><a href="index.php">Home </a></li>
                                          <li><a href="category.php">Category</a></li>
                                          <li><a href="contact.php">Contact Us</a></li>
                                          <li><a href="about.php">About Us</a></li>
                                          <li><a href="admin/index.php">Admin </a></li>
                                   </ul>
                            </div>
                            <div class="col media">
                                   <h3>Social media</h3>
                                   <ul class="social">
                                          <li><a href="https://www.facebook.com/profile.php?id=100091537797821&mibextid=ZbWKwLs"><span class="ico ico-fb"></span>Facebook</a></li>
                                          <li><a href="#"><span class="ico ico-tw"></span>Twitter</a></li>
                                          <li><a href="https://www.google.com/search?kgmid=/g/11ffv3p7v7&hl=en-IN&q=Shah+jewellers&kgs=1705b151295cb2d7&shndl=30&shem=lose&source=sh/x/kp/osrp/m5/4"><span class="ico ico-gp"></span>Google+</a></li>
                                          <li><a href="https://www.instagram.com/shah___jewellers?igsh=cTIxeTNpejZqbmFn"><span class="ico ico-pi"></span>Instagram</a></li>
                                   </ul>
                            </div>
                            <div class="col contact">
                                   <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                   <h3><?php  echo $row['PageTitle'];?></h3>
                                   <p style="color: white"><?php  echo $row[''];?>Main Road, Sarafa Bazar Yavatmal-445001</p>
                                   <p><span class="ico ico-em"></span><?php  echo $row['Shaha@gmail.com'];?>Shaha@gmail.com</p>
                                   <p><span class="ico ico-ph"></span><?php  echo $row[''];?>8262908289</p><?php } ?>
                            </div>
                            <div class="col newsletter">

                                   <h3>Join our newsletter</h3>
                                   <p>Subscribe now and get jewellery offer every week in your inbox.</p>
                                   <form action="#" method="post">
                                         <input type="email" name="email" placeholder="Your email address">
                                          <button type="submit" name="sub"></button>
                                   </form>
                            </div>
                     </div>
                     <p class="copy">Jewellery Shop Management System</p>
              </div>
              <!-- / container -->
       </footer>
       <!-- / footer -->