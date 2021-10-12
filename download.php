<?php
$query = $_SERVER['QUERY_STRING'];

?>
<iframe   id="iframeId" style="height: 50px; width: 350px; border: 0px; margin:-0.6em;  " scrolling="no" src=<?php echo '"https://loader.to/api/button/?url=' . $query . '"'; ?> ></iframe>