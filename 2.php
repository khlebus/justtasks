<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src ="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <title>Task 2</title>
  </head>
  <body>
    <textarea id = "id1" style = "width: 800px;"></textarea>

  <script>
  $(document).on("click","#id1", function(){
    $.get('assets/1.txt', function(data){
      $('#id1').text(data);
    }).fail(function() {
      alert('data source is not found');
    });
  });
  </script>
  </body>
</html>
