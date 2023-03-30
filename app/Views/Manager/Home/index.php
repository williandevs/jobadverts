<?= $this->extend('Manager/Layout/main') ?>


<!-- start title -->
<?= $this->section('title') ?>
    <?php echo $title ?? '' ?>
<?= $this->endSection() ?>
<!-- end title -->


<!-- start styles  -->
<?= $this->section('styles') ?>

<?= $this->endSection() ?>
<!-- end styles  -->


<!-- start content  -->
<?= $this->section('content') ?>

<!-- end content  -->


<!-- start container-fluid  -->
<div class="container-fluid">
    <?php echo $title ?? '' ?>
</div>

<?= $this->endSection() ?>
<!-- end container-fluid  -->



<!-- start scriptis -->
<?= $this->section('scripts') ?>

<?= $this->endSection() ?>

<!-- end scriptis -->