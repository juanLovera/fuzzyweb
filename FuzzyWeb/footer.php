<div id="footer" style="margin-left:auto; margin-right:auto; width:1200px; margin-top:8px; margin-bottom:14px; color: #525252; text-align:left; font-size:12px;">
<img src="img/logouni.png" alt="USB" width="70" height="48">
<div id="minifooter" style="margin-left:80px; font-size:12px; margin-top:-30px">
<div id="minifooter1" style="text-align:left; float: left">
    Universidad Simón Bolívar - Venezuela
   </div>
<div id="minifooter2" style="text-align:right; float: right">
   <strong>fuzzydoDB</strong> <?php echo date("Y"); ?>    
</div>
</div>
</div>
<?php
if (isset($_GET['q']))
{
?>
<script>
(function() {
  var cx = '000240132088512848809:tqutgqoshw4';
  var gcse = document.createElement('script');
  gcse.type = 'text/javascript';
  gcse.async = true;
  gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
      '//www.google.com/cse/cse.js?cx=' + cx;
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(gcse, s);
})();
</script>
<gcse:searchresults-only></gcse:searchresults-only>
<?php
}
?>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content" style="display: table" >
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Perfil de Usuario</h4>
          </div>
          <div id="modal-html" style="display: table">
          </div>
          <div id="modal-loading" style="padding-right: 90px;text-align: center; display: none; padding-top: 60px;">
                <img src="img/loader.gif" width="32" height="32" alt=""/><br/><strong>Cargando</strong>
          </div>
      </div>
  </div>
</div>

</body>
</html>
