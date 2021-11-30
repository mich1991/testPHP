<div class="d-flex justify-content-center">
  <div class="spinner-border" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>

<?php 
    require_once('./csvConverter.php');
    use App\csvConverter;
    $cs = new csvConverter('./test-php-user-directory/sampla-data.csv');
    $cs->uploadData();
?>