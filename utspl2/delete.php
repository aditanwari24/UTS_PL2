<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>JavaScript confirmation box</title>
    <script>
      // The function below will start the confirmation dialog
      function confirmAction() {
        let confirmAction = confirm("Are you sure to execute this action?");
        if (confirmAction) {
          alert("Action successfully executed");
        } else {
          alert("Action canceled");
        }
      }
    </script>
  </head>
  <body>
    <button onclick="confirmAction()">Delete</button>
  </body>
</html>