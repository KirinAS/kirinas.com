<?php require_once('settings.php'); ?>
</div>

<div id="footer">
<div class="container">
<p class="text-muted credit">
Respective copyright belongs to KBS, KBS America, KeyEast Entertainment, JYP Entertainment, and CJ Media. This is a fan made Dream High site. Source code located at <a href="https://github.com/KirinAS/kirinas.com" target="_blank">GitHub</a>.
</p>
</div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php print $ga_tracking_id ?>', 'kirinas.com');
  ga('send', 'pageview');

</script>

</body>
</html>
<?php
$ip = ip2long($_SERVER[$proxy]);

$db = new mysqli($db_host, $db_username, $db_password, $db_name);

$result = $db->query("INSERT INTO `hits` (ip, count) VALUES (" . $ip . ", 1) ON DUPLICATE KEY UPDATE count=count + 1");

$db->close();
?>
