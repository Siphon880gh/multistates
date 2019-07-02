<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Multistate Demonstration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- jQuery  -->
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css">
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    
    <!-- Multistates -->
    <link href="css/index.css" rel="stylesheet">

</head>
    <body>
        <h2 id="title">Multistate Demonstration</h2>
        <p>You can click through different primary states _, (), or []. Note _ is blank text. By right clicking or tap holding or shift clicking, that state can go between ministates normal or checkmarked.</p>

        <div id="example">
            <aside class="multistates">
                <data class="data-wrapper" data-states="cccc">
                    <span class="p1 unselectable" unselectable="on"></span>
                    <span class="p2 unselectable" unselectable="on"></span>
                    <span class="p3 unselectable" unselectable="on"></span>
                    <span class="p4 unselectable" unselectable="on"></span>
                </data>
            </aside>
        </div>
            
    <!-- Multistates -->
    <script src="js/multistates/multistates.js"></script>
    <script src="js/demo.js"></script>

    <!-- jQuery mobile for taphold -->
    <script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <!-- Mobile: jQuery UI, jQuery UI Touch Punch -->
    <link href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

    </body>
</html>