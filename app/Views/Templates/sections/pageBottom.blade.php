<script>
    //Run cron
    jQuery.get('<?=BASE_URL?>/cron/run');

    //5 min time to run cron
    setInterval(function(){
        jQuery.get('<?=BASE_URL?>/cron/run');
    }, 300000);
</script>

@if ($loggedIn)
<script>
    //5 min keep alive timer
    setInterval(function(){
        jQuery.get(leantime.appUrl+'/auth/keepAlive');
    }, 300000);
</script>
@endif

<script src="{!! BASE_URL !!}/dist/js/compiled-footer.{!! $version !!}.min.js"></script>

@dispatchEvent('beforeBodyClose')
