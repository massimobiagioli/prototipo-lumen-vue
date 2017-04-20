<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <title>client-app</title>
        @foreach ($styles as $style)
            <link href={{$style}} rel=stylesheet>
        @endforeach
    </head>
    <body>
        <div id=app></div>
        <script type=text/javascript src={{$scripts['manifest']}}></script>
        <script type=text/javascript src={{$scripts['vendor']}}></script>
        <script type=text/javascript src={{$scripts['app']}}></script>
    </body>
</html>