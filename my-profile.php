<!DOCTYPE html>
<html>
<head>
  <title>My Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/Style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/css1.css">
  <style type="text/css">
    .my-profile_nav__link--active{
    color: #009578;
    }
  </style>
</head>
<body>
<?php include 'menu.php';
  require 'connection.php';
  if(isset($_SESSION['user_id'])){
    $userid=$_SESSION['user_id'];
    $query1="SELECT * FROM users WHERE user_id ='$userid'";
    $result1=mysqli_query($con,$query1);
    $row1=mysqli_fetch_assoc($result1);
  }
?>
<div class="pt-4">
<div class="my-earning-main-page pt-5">
  <div class="row px-3">

    <div class="col-md-4 col-lg-4 p-2">
      <div class="card profile-card-3">
        <div class="card-header bg-dark text-white">
          <div>
            <h5>My Profile</h5>
          </div>
        </div>
        <div class="background-block">
          <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background"/>
        </div>
        <div class="profile-thumb-block">
          <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="profile-image" class="profile"/>
        </div>
        <div class="card-content">
          <h2>Justin Mccoy<small>Designer</small></h2>
            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a>
            </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-8 col-lg-8 p-2">
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile">My profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#change-password">Change password</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div id="profile" class="tab-pane active">
                <form>
                  <div class="form-group">
                  <label>Username</label><br>
                  <input type="text" class="form-control" name="username" value=<?php echo $row1['username']; ?> readonly><br>
                  <label>Email Address</label><br>
                  <input type="text" class="form-control" name="emailid" value=<?php echo $row1['emailid']; ?> readonly><br>
                  <label>Mobile Number</label><br>
                  <input type="text" class="form-control" name="mobileno" value=<?php echo $row1['mobileno']; ?> readonly><br>
                  </div>
                </form>
              </div>

              <div id="change-password" class="tab-pane fade">
                <form action="updatepassword.php">
                  <div class="form-group">
                  <label>Current Password</label><br>
                  <input type="password" class="form-control" name="password" value=""><br>
                  <label>New Password</label><br>
                  <input type="password" class="form-control" name="newpassword" value=""><br>
                  <label>Confirm Password</label><br>
                  <input type="password" class="form-control" name="newpassword" value="">
                  </div>
                  <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
              </div>


            </div>
          </div>
        </div>
    </div>



  </div>
</div>
</div>

<?php include 'footer.php'; ?>
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>
</body>
</html>