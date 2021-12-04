<div class="d-flex justify-content-center align-items-center">
  <div class="spinner-border" role="status">
    <span class="visually-hidden">Loading...</span>
</div>
<span class="px-2">Creating database in progress...</span>
</div>

<?php 
    use App\DataBaseController;
    $dbController = new DataBaseController();

    echo $dbController;
    use App\csvConverter;
    $cs = new csvConverter('./test-php-user-directory/sampla-data.csv');
    $cs->uploadData();
    // header("Location: ?page=home");
?>