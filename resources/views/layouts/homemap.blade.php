
<!--
 * Created by PhpStorm.
 * User: Ghaith
 * Date: 25/04/2017
 * Time: 23:19
 */
-->
<div class="panel panel-primary">
    <div class="panel-heading">Frappez la porte</div>
    <div class="panel-body" id="mapContainer">
        <a onclick="playSound()" href="#" id="beb"> <img  src="/storage/beb dokkan.jpg"></a>
        <div id="accueilmap" class="center-block hidden"></div>
    </div>
    <div class="panel-footer" style="text-align:center;font-size: 3.2em">زارتنا البركة</div>
</div>




<!-- Script PART -->

<script src="/js/map.js" type="text/javascript"></script>

<script type="text/javascript">
    var count =0;
    function playSound() {
        var audio = new Audio();
        if (count == 0) {
            audio = new Audio('/storage/sounds/test.mp3');
            count++;
            audio.play();
        }
        else if (count==1)
        {audio = new Audio('/storage/sounds/test.mp3');
        count++;
        audio.play();
        $("#beb").addClass("hidden");
        $("#accueilmap").removeClass("hidden");
        }
    }
</script>