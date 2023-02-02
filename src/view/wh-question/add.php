<?php

declare(strict_types=1);

require_once("/xampp/htdocs/grammar/src/view/layouts/header.php");

?>

<h2 class="text-center">ADD WH QUESTION</h2>
<div class="btn-group btn-group-lg" role="group" aria-label="Basic mixed styles example">
  <!-- <a class="btn btn-danger" href="addList.php?delete=true">DELETE TABLE</a> -->
  <a class="btn btn-success" href="addList.php?add=true">ADD NEW WH QUESTION</a>
</div>
<div class="btn-group btn-group-lg" role="group" aria-label="Basic mixed styles example">
  <a class="btn btn-success" href="addCommonQuestions.php?add=true">ADD NEW COMMON QUESTION</a>
</div>


<?php
require_once("/xampp/htdocs/grammar/src/view/layouts/footer.php");
?>