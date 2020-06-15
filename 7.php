<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    .example {
      padding: 10px;
      border: 1px solid #ccc;
    }
    #output_zone {

      border: 2px dashed #bbb;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      border-radius: 5px;
      padding: 80px;
      font: 40pt bold;
      color: #bbb;

    }
    #drop_zone {
        border: 2px dashed #bbb;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        padding: 80px;
        text-align: center;
        font: 40pt bold;
        color: #bbb;
    }
    </style>
    <meta charset="utf-8">
    <script src ="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <title>Task 7</title>
  </head>
  <body>
    <div class = "example">
    <div id="drop_zone">Перетяните JSON файл в данное поле!</div>
    </div>
    <div class = "example">
    <div id="output_zone"></div>
    </div>

    <output id="list"></output>

    <script>
    function handleFileSelect(evt) {
      evt.stopPropagation();
      evt.preventDefault();

      var files = evt.dataTransfer.files; // FileList object.

      // files is a FileList of File objects. List some properties.
      var output = [];
      for (var i = 0, f; f = files[i]; i++) {
        output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                    f.size, ' байт, последнее изменение: ',
                    f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
                    '</li>');
      }
      document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
      var file = files[0];
      var reader = new FileReader();
      reader.onload = readSuccess;

      reader.readAsText(file);
    }

    function handleDragOver(evt) {
      evt.stopPropagation();
      evt.preventDefault();
      evt.dataTransfer.dropEffect = 'copy'; // Explicitly show this is a copy.
    }

    // Setup the dnd listeners.
    var dropZone = document.getElementById('drop_zone');
    dropZone.addEventListener('dragover', handleDragOver, false);
    dropZone.addEventListener('drop', handleFileSelect, false);

    function readSuccess(evt) {
      jsonData = evt.target.result;

      if(isJson(jsonData)) {

        $.ajax({
          type: "POST",
          url: "jsonToUl.php",
          data: jsonData,
          success: function (data) {
            $('#output_zone').html(data);
          },
          error: function() {
            alert('some error');
          }
        });
      }
      else alert('not a valid json file!');
    }

    function isJson(str) {
      try {
          JSON.parse(str);
      } catch (e) {
          return false;
      }
      return true;
    }
    </script>
  </body>
</html>
