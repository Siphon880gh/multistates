# Multistates
By Weng Fei Fung.
You can click through different primary states \_, (), or []. Note \_ is blank text. By right clicking or tap holding or shift clicking, that state can go between ministates normal or checkmarked.

## Getting Started

```
<link href="css/index.css" rel="stylesheet">
<script src="js/multistates/multistates.js"></script>
```

### Prerequisites

We need jQuery because this is a jQuery plugin. We also need jQuery mobile, jQuery UI, jQuery UI Touch Punch, to allow the different gestures per different os for ministate switching. Our CSS and js files are also required.

```
    <!---- @Head  ---->
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css">
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    
    <!-- Multistates -->
    <link href="css/index.css" rel="stylesheet">

    <!---- @Body End ---->

    <!-- Multistates -->
    <script src="js/multistates/multistates.js"></script>
    
    <!-- jQuery mobile for taphold -->
    <script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <!-- Mobile: jQuery UI, jQuery UI Touch Punch -->
    <link href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

```

### Running

__Html Markup__
```
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
```

__Js Initiation__
```
// If want to flash green on a DOM if you switched ministate (regular vs checkmarked)
$("#example").multistates({$animatedDom:$("#example")});

// If don't want animation:
$("#example").multistates();
```

__State Manipulation__

You can programmatically read or set the component's states with this code:
```
Multistates.setStates($("#some-multistate-wrapper"), "cPcS"); // sets the component to cPcS
Multistates.getStates($("#some-multistate-wrapper")); // returns cPcS
```

This will allow you to persist data into a database.

__Legends__

c = blank, C = checkmark
p = parentheses, P = parentheses with checkmark
s = square brackets, S = square brackets with checkmark


## Customization

To edit the primary and mini states, I recommend using compass to edit css/scss/index.scss at the primary mixin.

To edit the color flashes, you can change the duration, iterations, and color swaps at the scss file as well.

### Test

You can test this code with index.php and demo.js as is in this repository.

## Deployment

Is a jQuery plugin with a few dependencies listed above.

## Contributing

## Authors

* **Weng Fei Fung** - *Initial work* - [Siphon880gh](//github.com/Siphon880gh)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
