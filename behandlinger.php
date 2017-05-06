<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <!-- Include Font Awesome. -->
  <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <!-- Include Editor style. -->
  <link href="includes/froala/css/froala_editor.min.css" rel="stylesheet" type="text/css" />
  <link href="includes/froala/css/froala_style.min.css" rel="stylesheet" type="text/css" />

  <!-- Include Code Mirror style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

  <!-- Include Editor Plugins style. -->
  <link rel="stylesheet" href="includes/froala/css/plugins/char_counter.css">
  <link rel="stylesheet" href="includes/froala/css/plugins/code_view.css">
  <link rel="stylesheet" href="includes/froala/css/plugins/colors.css">
  <link rel="stylesheet" href="includes/froala/css/plugins/emoticons.css">
  <link rel="stylesheet" href="includes/froala/css/plugins/file.css">
  <link rel="stylesheet" href="includes/froala/css/plugins/fullscreen.css">
  <link rel="stylesheet" href="includes/froala/css/plugins/image.css">
  <link rel="stylesheet" href="includes/froala/css/plugins/image_manager.css">
  <link rel="stylesheet" href="includes/froala/css/plugins/line_breaker.css">
  <link rel="stylesheet" href="includes/froala/css/plugins/quick_insert.css">
  <link rel="stylesheet" href="includes/froala/css/plugins/table.css">
  <link rel="stylesheet" href="includes/froala/css/plugins/video.css">
</head>

<body>
  <!-- Create a tag that we will use as the editable area.
       You can use a div tag as well. -->
  <form>
    <textarea id="edit" name="content"></textarea>
  </form>

  <!-- Include jQuery. -->
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <!-- Include JS files. -->
  <script type="text/javascript" src="includes/froala/js/froala_editor.min.js"></script>

  <!-- Include Code Mirror. -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

  <!-- Include Plugins. -->
  <script type="text/javascript" src="includes/froala/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/file.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/fullscreen.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/quick_insert.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/quote.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/save.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="includes/froala/js/plugins/video.min.js"></script>

  <!-- Include Language file if we want to use it. -->
  <script type="text/javascript" src="includes/froala/js/languages/ro.js"></script>

  <!-- Initialize the editor. -->
  <script>
      $(function() {
          $('#edit').froalaEditor()
      });
  </script>
</body>
</html>