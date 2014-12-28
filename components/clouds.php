<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/components/header.php";
require_once($path);
?>

<div id='viewport'> 
    <div class="cloudHead">
    <h1>They say "we're up in the <em>clouds.</em>"</h1>
</div>
    <!--covers the whole screen and acts as camera plane 
    all objects change inside the plane -->

    <div id="world" style="">
        <!-- used to anchor all 3d elements -->

    </div>
</div>
<script type="text/javascript">
    (function() {
		var lastTime = 0;
		var vendors = ['ms', 'moz', 'webkit', 'o'];
		for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
			window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
			window.cancelRequestAnimationFrame = window[vendors[x]+
			  'CancelRequestAnimationFrame'];
		}

		if (!window.requestAnimationFrame)
			window.requestAnimationFrame = function(callback, element) {
				var currTime = new Date().getTime();
				var timeToCall = Math.max(0, 16 - (currTime - lastTime));
				var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
				  timeToCall);
				lastTime = currTime + timeToCall;
				return id;
			};

		if (!window.cancelAnimationFrame)
			window.cancelAnimationFrame = function(id) {
				clearTimeout(id);
			};
	}());
    
    /*
     * Defining our variables
     * world and viewport are DOM elements,
     * worldXAngle and worldYAngle are floats that hold the camera rotation
     * d is an int that defines the distance of the world from the camera
     */
    /*
     * objects is an array of cloud bases
     * layers is an array of cloud layers
     */

    var layers = [],
        objects = [],
            
        world = document.getElementById('world'),
        viewport = document.getElementById('viewport'),
        
        worldXAngle = 0,
        worldYAngle = 0,
        d = 200,
        p = 200;

    viewport.style.perspective = p;
    viewport.style.webkitPerspective = p;
    viewport.style.oPerspective = p;



    generate();

    function createCloud() {

        var div = document.createElement('div');
        div.className = 'cloudBase';
        var x = 256 - (Math.random() * 512);
        var y = 256 - (Math.random() * 512);
        var z = 256 - (Math.random() * 512);
        var t = 'translateX( ' + x + 'px ) translateY( ' + y + 'px ) translateZ( ' + z + 'px )';
        div.style.webkitTransform = t;
        div.style.MozTransform = t;
        div.style.oTransform = t;
        world.appendChild(div);

        for (var j = 0; j < 5 + Math.round(Math.random() * 10); j++) {
            var cloud = document.createElement('div');
            cloud.className = 'cloudLayer';

            var x = 256 - (Math.random() * 512);
            var y = 256 - (Math.random() * 512);
            var z = 256 - (Math.random() * 512);
            var a = Math.random() * 360;
            var s = .25 + Math.random();
            x *= .2; y *=.2;
            cloud.data = {
                x: x,
                y: y,
                z: z,
                a: a,
                s: s
            };
            var t = 'translateX( ' + x + 'px ) translateY( ' + y + 'px ) translateZ( ' + z + 'px ) rotateZ( ' + a + 'deg ) scale( ' + s + ')';
            cloud.style.MozTransform = t;
            cloud.style.webkitTransform = t;
            cloud.style.oTransform = t;

            div.appendChild( cloud );
            layers.push( cloud );
        }

        return div;
    }
    /*
     * Event Listener to transform mouse position into angles
     * from -180 degrees to 180 degrees, both vertically and horizontally
     * 
     * clientX and clientY:
     *  return the horizontal and vertical coordinates 
     *  respectively of the mouse pointer relative to screen
     */
    window.addEventListener('mousewheel', onContainerMouseWheel );
    window.addEventListener('mousemove', function(e) {
        worldYAngle = -(.8 - (e.clientX / window.innerWidth)) * 180;
        worldXAngle = (.8 - (e.clientY / window.innerHeight)) * 180;
        updateView();
    });

    /*
     * Changes the transform property of world to be
     * translated in the Z axis by d pixels,
     * rotated in the X axis by worldXAngle degrees and
     * rotated in the Y axis by worldYAngle degrees.
     */

    function updateView() {
        var t = 'translateZ( ' + d + 'px ) rotateX( ' + worldXAngle + 'deg) rotateY( ' + worldYAngle + 'deg)';
        world.style.webkitTransform = t;
        world.style.MozTransform = t;
        world.style.oTransform = t;
    }



    /* Clears the DOM of previous clouds bases
     * and generates a new set of cloud bases
     */
    function generate() {
        objects = [];
        if (world.hasChildNodes()) {
            while (world.childNodes.length >= 1) {
                world.removeChild(world.firstChild);
            }
        }
        for (var j = 0; j < 5; j++) {
            objects.push(createCloud());
        }
    }

    function onContainerMouseWheel( event ) {
        event = event ? event : window.event;
        d = d - ( event.detail ? event.detail * -5 : event.wheelDelta / 8 );
        updateView();
    }
    
    function update (){
        for( var j = 0;j < layers.length; j++ ) {
            var layer = layers[j];
            layer.data.a += layer.data.speed;
            var t = 'translateX( ' + layer.data.x + 'px ) translateY( ' + layer.data.y + 'px ) translateZ( ' + layer.data.z + 'px ) rotateY( ' + (-worldYAngle) + 'deg ) rotateX( ' + (-worldXAngle) + 'deg ) scale( ' + layer.data.s + ')';
            layer.style.webkitTransform = t;
            layer.style.MozTransform = t;
            layer.style.oTransform = t;
        }
        
        requestAnimationFrame( update );
    }
    
    update();
</script>
</body>
</html>