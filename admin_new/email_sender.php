<?php
    session_start();
    require_once '../includes/dbh.inc.php';
    require_once '../includes/emptySession.php';

 if (!isset($_SESSION['admin_branchName'])){
  header("Location: ../admin/login-admin.php");
  die();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Send Email - Admin</title>
    <?php
        include 'includes/style-links.php';
    ?> 

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
 
    <script src="https://cdn.tiny.cloud/1/nxgs96tjsxs8d170jb1wjg3ubm0mveo6vsbxbnt1ux2xgttm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
  selector: "textarea#editor",
  skin: "bootstrap",
  plugins: [
  'advlist autolink link image lists charmap print preview hr anchor pagebreak',
  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
  'table emoticons template paste help'
],
  toolbar: 'insertfile undo redo | styleselect | bold italic fullscreen | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons',
  menu: {
  favs: {title: 'Email', items: 'code visualaid | searchreplace | emoticons'}
  },
  menubar: 'favs file edit view insert format tools table help',
  content_css: 'css/content.css',
  setup: (editor) => {
    // Apply the focus effect
    editor.on("init", () => {
      editor.getContainer().style.transition =
        "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out";
    });
    editor.on("focus", () => {
      (editor.getContainer().style.boxShadow =
        "0 0 0 .2rem rgba(0, 123, 255, .25)"),
        (editor.getContainer().style.borderColor = "#80bdff");
    });
    editor.on("blur", () => {
      (editor.getContainer().style.boxShadow = ""),
        (editor.getContainer().style.borderColor = "");
    });
  },

   //Image uploader 
    images_upload_url: 'upload_send.php',
    
   
    // override default upload handler to simulate successful upload
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
      
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', 'upload_send.php');
      
        xhr.onload = function() {
            var json;
        
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
        
            json = JSON.parse(xhr.responseText);
        
            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
        
            success(json.location);
        };
      
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
      
        xhr.send(formData);
    },

  color_map: [
    '000000', 'Black',
    '808080', 'Gray',
    'FFFFFF', 'White',
    'FF0000', 'Red',
    'FFFF00', 'Yellow',
    '008000', 'Green',
    '0000FF', 'Blue'
  ]
  
});


 
</script>
 
 
  </head>
  <body class="sb-nav-fixed">
  <?php include "includes/navbar.php"; ?> <!--==== NAV BAR ====-->

      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Send Email</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Send Email</li>
            </ol>
            
          <label for="basic-url" class="form-label">Send Email to Customers</label>
<div class = "position-left">
          
          <div class="container mt-4 mb-4">
      <div class="row justify-content-md-center">
        <div class="col-md-12 col-lg-8">
           <?php
           if (isset($_GET["error"])){
                        if ($_GET["error"] == "none") {
                            echo '<div class="alert alert-success alert-dismissible">
                              The system has successfully sent the email to the users.
                          </div>';
           }else if($_GET["error"] == "nodatafound") {
            echo '<div class="alert alert-danger alert-dismissible">
              No data found, please try again next time.
          </div>';
}
          }
              ?>
            <div class="form-group">
              <label for="email"><h5>Send to:</h5></label>

              <form action="includes/email.inc.php" method="post">
              <!-- <input type="email" class="form-control" id="email" placeholder="Enter email"> -->
            <div class="form-check">
              <?php 
                  if($_SESSION['admin_branchName'] == "mainAdmin"){
                      echo '<input class="form-check-input" type="radio" value="All" name="sendto" id="flexRadioDefault1" checked onclick="myFunction()">';
                      echo '<label class="form-check-label" for="flexRadioDefault1">';
                      echo '  All Registered Users
                      </label>';
                    }
                    else{
                      echo '<input class="form-check-input" type="radio" value="All" name="sendto" id="flexRadioDefault1" onclick="myFunction()" disabled>';
                      echo '<label class="form-check-label" for="flexRadioDefault1">';
                      echo '  All Registered Users
                      </label>';
                    }
              ?>
              
            </div>
            <div class="form-check" >
              <input class="form-check-input" type="radio" value="user" name="sendto" id="flexRadioDefault2" onclick="myFunction2()">
              <label class="form-check-label" for="flexRadioDefault2">
                Individual User
              </label>
            </div>
            <small class="form-text text-muted">To send to all registered users, you must log in as the main administrator.</small>
            <script>
      function myFunction() {
                    document.getElementById("name").style.display = "none";
                  }
                  function myFunction2() {
                    document.getElementById("name").style.display = "flex";
                  }
                  </script>
  
            <br>
            <div class="form-group" >
              <div  style="display:none;"  id="name">
                <input id="userm" type="email" name="useremail" class="form-control" placeholder="Enter E-mail of the user. ex: username@mail.com">
                </div>
            </div>

            
            
            </div>
            <div class="form-group">
            <h5><label for="name">Subject</label></h5>
                <input type="text" name="subject" class="form-control" id="name" placeholder="MCY Dental Clinic...">
            </div>
            <div class="form-group">
            <h5><label>Body:</label></h5>
              <textarea name="body" rows="12" id="editor"></textarea>
            </div>

            <hr>

            <div class="form-group form-check text-center">
                <input type="checkbox" class="form-check-input" id="terms" required>
                <label class="form-check-label" for="terms"><h5>I agree to the <a href="#">terms and conditions</h5></a></label>
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit Email</button>
            </form>
        </div>
    </div>
</div>
                      
</div>
</main>
          <?php 
          include 'modalAddpatient.php';

          ?>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">Copyright &copy; MCY Dental Clinic 2021</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"> </script>

    <script src="js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"></script>



  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  </body>
</html>
