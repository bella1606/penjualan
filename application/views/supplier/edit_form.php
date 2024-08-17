<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('Supplier') ?>">Supplier</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?= site_url('Supplier/edit') ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $supplier->id; ?>">
                    <div class="mb-3">
                        <label for="text" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" value="<?= $supplier->name; ?>" placeholder="Nama" required>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh;"></div>
    </div>
</main>