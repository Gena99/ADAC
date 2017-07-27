<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <!--- iframe FB ---->
        <iframe                                     src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FADACLiive%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="yes" frameborder="0" allowTransparency="true">
        </iframe>

        <!---iframe la depeche---->
        <div id="depeche" width: 400px; heigh: 300px; overflow: hidden; position: relative;>
            <iframe id="iframedepeche"src="http://www.ladepeche.fr/recherche/?q=ADAC&t=&v=Clarac+%2831%29&i=31147&c=&y=&m=&d="      width="340px" style="border:none; overflow:hidden; position=absolute; padding-top: 100px; height: 500px;" scrolling="yes"       frameborder="50" allowTransparency="true"></iframe>
        </div>
    </body>
</html>
