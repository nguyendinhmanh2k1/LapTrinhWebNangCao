<?php 
  
include("class/users.php");        //including the users class
$profile=new users;               // craeting the object of user class so that we can call show_user_profile() method 
extract($_POST);
$profile->show_users_profile($_SESSION['username']);  //calling the show_users profile() method of users class using users class object reference
//print_r($profile->data);

 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Math ManhND</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
</head>

<style type="text/css">
  .li1{
     float: right !important;
  }
 



</style>


<body style="">





<!-- ========================================================================================================================== -->

        <!-- navigation bar starts -->

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top position-relative">  <!--  postion relative to align the tab content  -->
  <a class="navbar-brand text-white" href="../index.php">Math ManhND</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="../index.php">TRANG CHỦ <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link text-white" href="../programmingdemo.php">programming tutorials</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CHỨC NĂNG CỦA WEB
        </a>
        <div class="dropdown-menu text-white fade" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../programmingdemo.php">CHƯƠNG TRÌNH HỌC</a>
          <a class="dropdown-item" href="../video_tutorials/toan/display_video_courses.php">VIDEO BÀI GIẢNG</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">BÀI TRẮC NGHIỆM</a>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="tìm kiếm" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="#">TÌM KIẾM</button>
    </form>
  </div>
</nav>

        <!-- navigation bar ends -->
<!-- ========================================================================================================================== -->







  <!-- tab section start -->

  <div class="container mt-4 col-md-10 position-relative">
    <h3 style="font-family: 'Catamaran', sans-serif;">Xin chào <?php echo $_SESSION['username']; ?>,Bắt đầu làm nào</h3>
  
    <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active " data-toggle="tab" href="#menu1">Trang Chủ</a>
    </li>
   <!--  <li class="nav-item">
      <a class="nav-link" href="#menu2" data-toggle="tab">Profile</a>
    </li>
    <li class="nav-item li1">
      <a class="nav-link justify-content-end" href="#menu3" data-toggle="tab">Logout</a>
    </li> -->
   
  </ul>

  <!-- tab section ends -->

  <!-- tab content start -->

   <div class="tab-content">
     <div class="tab-pane active " id="menu1" >
    
     <center><button type="button" class="btn btn-success mt-5" href="#myid" data-toggle="collapse">Bắt Đầu Bài Kiểm Tra</button></center>

     <!-- dropdown list starts -->

     <center><div class="col-sm-6 mt-3">
       <div class="collapse" id="myid">
      <div class="form-group">
    <label>CHỌN BÀI PHÙ HỢP</label>
    <form method="POST" action="question_show.php">
    <select class="form-control" id="exampleFormControlSelect1" name="selected_course">

      <?php 
       $profile->show_courses();                                 //calling show_courses() method of users class
       foreach ($profile->cat_data as $key => $course) 
       {
         
 ?>

      <option value="<?php echo $course['id'] ;?>"><?php echo $course['cat_name']; ?></option>    <!-- displaying course name in dropdown -->
    

      <?php
}

      ?>
    </select>
      <button type="submit" class="btn btn-success mt-3">Bắt Đầu Bài Kiểm Tra</button>
  </form>
  </div>
</div>
</div>
</center>

  <!-- dropdown list ends -->


      </div>
      <div class="tab-pane fade" id="menu2">  <!-- show profile tab start -->

        <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>

    <?php 

    foreach ($profile->data as $key => $prof) 
    {
      
   ?>
    <tr >
      <th scope="row"><?php echo $prof['id']; ?></th>
      <td><?php echo $prof['name']; ?></td>
      <td><?php echo $prof['email']; ?></td>
      <td><img src="img/<?php echo $prof['img']; ?>" class="img-fluid" width="35px" height="30px"></td>
    </tr>
   
  </tbody>
<?php } ?>
</table>


       </div>
       <div class="tab-pane fade" id="menu3">this is menu 3</div>
       
     
   </div>
              <!-- tab section ends -->
  </div>            <!-- container closed -->

</body>
</html>






