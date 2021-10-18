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
    <title>Add Patient - Admin</title>
    <?php
        include 'includes/style-links.php';
    ?> 

<!-- Neww -->
<meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

	<meta name="referrer" content="no-referrer-when-downgrade" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">
      p, body, td, input, select, button { font-family: -apple-system, system-ui, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 14px; }
      body { padding: 0px; margin: 0px; background-color: #ffffff; }
      a { color: #1155a3; }
      .space { margin: 10px 0px 10px 0px; }
      .header { background: #003267; background: linear-gradient(to right, #011329 0%, #00639e 44%, #011329 100%); padding: 20px 10px; color: white; box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.75); }
      .header a { color: white; }
      .header h1 a { text-decoration: none; }
      .header h1 { padding: 0px; margin: 0px; }
      .main { padding: 10px; margin-top: 10px; }
  </style>

  <link href="task/main.css?v=2021.4.5120" type="text/css" rel="stylesheet"/>
  <script src="task/daypilot-all.min.js?v=2021.4.5120"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"/>
  <!-- daypilot libraries -->
  <script src="task/js/daypilot/daypilot-all.min.js" type="text/javascript"></script>


    <!-- /head -->
  </head>
  <body class="sb-nav-fixed">
  <?php include "includes/navbar.php"; ?> <!--==== NAV BAR ====-->

      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Task Management</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Task Management</li>
            </ol>
            
          <label for="basic-url" class="form-label">Monthly Task</label>


<!-- START -->          
<div class="main">

  <div id="dp"></div>

  <script type="text/javascript">
    const dp = new DayPilot.Month("dp");

    // view

 	dp.startDate = new DayPilot.Date();

    dp.onEventMoved = async (args) => {
      const data = {
        id: args.e.id(),
        start: args.newStart.toString(),
        end: args.newEnd.toString()
      };
      const {data: result} = await DayPilot.Http.post("task/backend_move.php", data);
      dp.message("Moved: " + result.message);
    };

    dp.onEventResized = async (args) => {
      const data = {
        id: args.e.id(),
        start: args.newStart.toString(),
        end: args.newEnd.toString()
      };
      const {data: result} = await DayPilot.Http.post("task/backend_move.php", data);
      dp.message("Resized: " + result.message);
    };

    // event creating
    dp.onTimeRangeSelected = async (args) => {

      const modal = await DayPilot.Modal.prompt("New event name:", "Event");

      dp.clearSelection();
      if (modal.canceled) {
        return;
      }

      const data = {
        start: args.start.toString(),
        end: args.end.toString(),
        text: modal.result
      };
      const {data: result} = await DayPilot.Http.post("task/backend_create.php", data);
      var e = {
        start: args.start,
        end: args.end,
        id: result.id,
        text: modal.result
      };
      dp.events.add(e);
      dp.message(result.message);
    };


  // // AYUSIN TONG DELETE
  //   var dp = new DayPilot.Calendar("dp");
  //  dp.eventDeleteHandling = "Update";

  //  dp.onEventDelete = async(args)  {
  //    if (!confirm("Do you really want to delete this event?")) {
  //      args.preventDefault();
  //    }
  //  };

  //  dp.onEventDeleted = async(args) {
  //    // AJAX call to the server, this example uses jQuery
  //    $.post(
  //      "task/backend_delete.php", 
  //      { id: args.e.id()}, 
  //      function(result) {
  //        dp.message(result.message);   // "Delete successful" received from the server
  //      }
  //    );
  //  };


// // event creating
// var dp = new DayPilot.Calendar("dp");
// dp.eventDeleteHandling = "Update";

// dp.onEventDelete = async (args) => {
// const modal = await DayPilot.Modal.prompt("Do you really want to delete this event?");
// const {data: result} = await DayPilot.Http.post("task/backend_delete.php", data);
// var e = {
//   id: result.id,
//   text: modal.result
// };
// dp.events.add(e);
// dp.message(result.message);
// };


  
    dp.onEventClick = (args) => {
      DayPilot.Modal.alert(args.e.text());
    };
    
    dp.onBeforeCellRender = function (args) {
            if (args.cell.start.getTime() === new DayPilot.Date().getDatePart().getTime()) {
                args.cell.backColor = "#ADD8E6";
            }
        };	


 	
    dp.init();

    loadEvents();

    function loadEvents() {
      dp.events.load("task/backend_events.php");
    }

  </script>

</template>

<script src="task/app.js?v=2021.4.5120"></script>
<!-- /bottom -->
</div>




        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">Copyright &copy; Your Website 2021</div>
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
      crossorigin="anonymous"
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
