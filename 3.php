<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    #id1 {
      position: absolute;
      top: 200px;
      left: 150px;
      height: 120px;
      width: 150px;
      padding: 0px;
      margin: 0px;
    }
    </style>
    <meta charset="utf-8">
    <script src ="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <title>Task 3</title>
  </head>
  <body>
    <textarea id = "id1"></textarea>

  <script>
    $(document).mousemove(function( event ) {

      var pageCoords = "( " + event.pageX + ", " + event.pageY + " )";
      var clientCoords = "( " + event.clientX + ", " + event.clientY + " )";

      var x_ = event.clientX;
      var y_ = event.clientY;

      min_x = $('#id1').position().left;
      min_y = $('#id1').position().top;

      height = $( "#id1" ).height();
      width = $( "#id1" ).width();

      max_x = min_x + width;
      max_y = min_y + height;

      var rect = {max:{x:max_x, y:max_y}, min:{x:min_x, y:min_y}};
      var p = {x:x_, y:y_};


      var max_screen_x = $(document).width() - width;
      var max_screen_y = $(document).height() - height;

      $( "#id1" ).first().text( distance(rect, p) );

      if ( distance(rect, p) < 20  ){
        while(1){
          new_x_min = getRandomInt(0, max_screen_x);
          new_y_min = getRandomInt(0, max_screen_y);

          new_x_max = new_x_min + width;
          new_y_max = new_y_min + height;

          var rect_new = {max:{x:new_x_max, y:new_y_max}, min:{x:new_x_min, y:new_y_min}};

          if( distance(rect_new, p) > 20 ){
            $("#id1").css({top: new_y_min, left: new_x_min, position:'absolute'});
            break;
          }
        }
      }

      function distance(rect, p) {
        var dx = Math.max(rect.min.x - p.x, 0, p.x - rect.max.x);
        var dy = Math.max(rect.min.y - p.y, 0, p.y - rect.max.y);
        return Math.sqrt(dx*dx + dy*dy);
      }

      function getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
      }
    });
  </script>
  </body>
</html>
