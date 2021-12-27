<div class="main-tabs">
<div class="tabs">
    <a href="index.php"><div class="tabs-item active" id="tab-1" href>Pahtan</div></a>
    <a href="myinttarpot.php"><div class="tabs-item" id="tab-2">Myint Tar Poe</div></a>
    <a href="amyawai.php"><div class="tabs-item" id="tab-3">A Mya Way</div></a>
</div>
</div>


<script>
    var url = window.location.pathname;
    if(url.match('index.php')) {
        document.getElementById('tab-1').className += " active";
        document.getElementById('tab-2').className = "tabs-item";
        document.getElementById('tab-3').className = "tabs-item";
    } else if(url.match('myinttarpot.php')) {
        document.getElementById('tab-2').className += " active";
        document.getElementById('tab-1').className = "tabs-item";
        document.getElementById('tab-3').className = "tabs-item";
    } else if(url.match('amyawai.php')){
        document.getElementById('tab-3').className += " active";
        document.getElementById('tab-2').className = "tabs-item";
        document.getElementById('tab-1').className = "tabs-item";
    } else {
        // Do nothing
    }
</script>