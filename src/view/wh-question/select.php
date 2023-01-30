<?php

declare(strict_types=1);

require_once("/xampp/htdocs/grammar/src/view/layouts/header.php");

?>

<h2 class="text-center">SELECT QUESTION</h2>
<form class="row g-3" action="show-select.php" method="POST" autocomplete="off">
  <select class="form-select" aria-label="Default select example" name="select">
    <option selected>Open this select WH</option>
    <option value="Where">Where</option>
    <option value="What">What</option>
    <option value="Who">Who</option>
    <option value="When">When</option>
    <option value="Why">Why</option>
    <option value="How">How</option>
    <option value="How much">How much</option>
    <option value="How many">How many</option>
    <option value="To Be">To Be</option>
  </select>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </div>
</form>

<?php
require_once("/xampp/htdocs/grammar/src/view/layouts/footer.php");
?>