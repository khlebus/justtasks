<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Task 8</title>

    <style>
      textarea {
        width: 100%;
      }
    </style>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://unpkg.com/jquery.splitter/js/jquery.splitter.js"></script>
    <link href="https://unpkg.com/jquery.splitter/css/jquery.splitter.css" rel="stylesheet"/>
    <link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>

$(document).ready(function () {
  $( "#tabs" ).tabs();

  $( "textarea" ).change(function () {
    if ($(this).attr('id') === 'textarea1') $('#foo').html($(this).val());
    if ($(this).attr('id') === 'textarea2') $('#a').html($(this).val());
  });

  $('#widget').css("height", $(document).height());
  $('#widget').css("width", $(document).width());
  $('#widget').split({orientation:'vertical', limit:100, position: '30%'});

  $('#bar').split({orientation:'horizontal', limit:10});
  $('#a').split({orientation:'vertical', limit:10});

  var counter = 0;
  $(document.documentElement).on('mousedown', function(e) {
    var $target = $(e.target);
    if ($target.is('.vsplitter, .hsplitter')) {
      if (++counter == 2) {
        $target.parents('.splitter_panel').eq(0).data('splitter').position(20);
        counter = 0;
      }
    } else {
      counter = 0;
    }
  });
});
</script>

</head>
<body>
  <div id="widget">
    <div id="foo">
        Left
     </div>
     <div id="bar">
       <div id="a">
            Right top
       </div>
       <div id="b">
         <div id="tabs">
          <ul>
            <li><a href="#tabs-1">Раз</a></li>
            <li><a href="#tabs-2">Два</a></li>
          </ul>
          <div id="tabs-1">
            <textarea id = "textarea1"></textarea>
          </div>
          <div id="tabs-2">
            <textarea id = "textarea2"></textarea>
        </div>
       </div>
     </div>
  </div>
</body>
</html>
