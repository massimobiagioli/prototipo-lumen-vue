<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>client-app</title>
    
    @foreach ($styles as $style)
        <link href="{{$style}}" rel="stylesheet">
    @endforeach
    
  </head>
  <body>
    <div id="app"></div>    
    
    @foreach ($scripts as $script)
        <script src="{{$script}}"></script>
    @endforeach
   
  </body>
</html>
