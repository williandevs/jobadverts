<?= $this->extend('Manager/Layout/main') ?>

<?= $this->section('title') ?>
<?php echo $title ?? '' ?>
<?= $this->endSection() ?>


<?= $this->section('styles') ?>
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/r-2.4.1/datatables.min.css" rel="stylesheet" />


<?= $this->endSection() ?>


<?= $this->section('content') ?>




<div class="container-fluid pt-4">


    <div class="row">
        <div class="col-md-9">
            <div class="card shadow-lg">
                <div class="card-header">
                    <h5><?php echo $title ?? '' ?></h5>

                </div>
                <div class="card-body">
                    <table id="tadaTable" class="table table-borderless table-striped table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>



<?= $this->section('scripts') ?>

<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tadaTable').DataTable({
            ajax: '<?= route_to('categories.get.all'); ?>',
            columns: [{
                    data: 'id'
                },
                {
                    data: 'name'
                },
                {
                    data: 'slug'
                },
                {
                    data: 'actions'
                },

            ],
        });
    });
</script>

<?= $this->endSection() ?>

