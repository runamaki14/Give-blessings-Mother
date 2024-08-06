 <!--แก้ตรง link กับ โฟรเดอของรูปด้วยก่อนลง server -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Ollie landing page.">
    <meta name="author" content="Devcrud">
    <title>Technicchanthaburi</title>
   <!-- font icons -->
   <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
   <!-- Bootstrap + Steller  -->
   <link rel="stylesheet" href="ollie.css">
   <link href="https://fonts.googleapis.com/css2?family=Charm&display=swap" rel="stylesheet">
   <style type="text/css">
      body{
         font-family: 'Charm', cursive;
         
      }
   </style>
</head>
<body>

   <!-- Page Header -->
   <header class="header header-mini"> 
      <div class="header-title">ลงนามถวายพระพร</div>
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">หน้าแรก</a></li>
            <li class="breadcrumb-item active" aria-current="page">ลงนามถวายพระพร</li>
         </ol>
      </nav>
   </header> <!-- End Of Page Header -->

   <!-- main content -->
   <div class="container">
      <!-- Buttons -->
      <h3 class="mt-5">โปรดเลือกข้อความ</h3>
      <hr>
     <form method="post" action='ins.php'>

                      <p>
                      
                         <input type="radio" name="wish" value="ขอพระองค์ทรงพระเจริญ ด้วยเกล้าด้วยกระหม่อม ขอเดชะ">ขอพระองค์ทรงพระเจริญ ด้วยเกล้าด้วยกระหม่อม ขอเดชะ<br>
                         <input type="radio" name="wish" value="ขอพระองค์ทรงพระเจริญยิ่งยืนนาน ด้วยเกล้าด้วยกระหม่อม ขอเดชะ">  ขอพระองค์ทรงพระเจริญยิ่งยืนนาน ด้วยเกล้าด้วยกระหม่อม ขอเดชะ<br>
                         <input type="radio" name="wish" value="ขอพระราชทานถวายพระพรชัยมงคล ขอพระองค์ทรงพระเจริญ ด้วยเกล้าด้วยกระหม่อม ขอเดชะ">  ขอพระราชทานถวายพระพรชัยมงคล ขอพระองค์ทรงพระเจริญ ด้วยเกล้าด้วยกระหม่อม ขอเดชะ<br>
                         
                       
      
      <!-- devider -->
      <div class="py-3"></div>

      <!-- Inputs -->
      <h3>ข้าพระพุทธเจ้า</h3>
      <hr>
      <div class="row mt-3">
         <div class="col-md-6">
            <h6 class="section-secondary-title">ชื่อ - นามสกุล :</h6>        
            <div class="form-group">
               <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="โปรดระบุชื่อ - นามสกุล">
            </div>
            <form id="request" class="main_form">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                              <button class="nav-link btn btn-primary" type="submit" name="send">ส่ง</button>
                           </div>
                        </form>
                     </form> 
         </div>
      </div> <!-- end of inputs -->   

      <!-- devider -->
      <div class="py-5"></div>             

   
      <!-- tables -->
      <h3 class="components-section-title">รายชื่อ</h3>
      <hr>
      <?php 
    // Create connection
   include ('condb.php');

    // Check Connection

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql1 = "SELECT * FROM queenmother";
    $result = $con->query($sql1);
 //   mysqli_set_charset($con,"utf8");
?>
      <table class="table table-bordered">
         <thead>
            <tr>
               <th scope="col">คำถวายพระพร</th>
               <th scope="col">ชื่อ</th>
               
            </tr>
         </thead>
         <tbody>
             <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['wish']; ?></td>
                        <td class="name">
                         <?php echo $row['name'];?>
                        </td>
                        
                    </tr>
                <?php endwhile ?>
         </tbody>
      </table>
      <!-- end of tables -->

      <!-- devider -->
      <div class="py-5"></div> 

      

   <!-- Page Footer -->
    <footer class="footer py-4 bg-light"> 
        <div class="container text-center">
            <p class="mb-4 small">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="https://www.technicchan.ac.th">Technicchan</a></p>
            <div class="social-links">
                <a href="javascript:void(0)" class="text-dark"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)" class="text-dark"><i class="ti-twitter-alt"></i></a>
                <a href="javascript:void(0)" class="text-dark"><i class="ti-google"></i></a>
                <a href="javascript:void(0)" class="text-dark"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)" class="text-dark"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)" class="text-dark"><i class="ti-rss"></i></a>
            </div>
        </div>
    </footer>
    <!-- End of page footer -->
   
   <!-- core  -->
   <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
   <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

</body>
</html>
