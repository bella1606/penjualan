<main>
<div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('user') ?>">User</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
        <div class="card-body">
            <form action="<?php echo site_url('user/edit'); ?>" method="post">
                <div class="mb-3">
                    <label for="username">USERNAME <code>*</code></label>
                    <input class="form-control" type="hidden" name="id" value="<?php echo $user->id; ?>" required/>
                    <input class="form-control <?php echo form_error('username') ? 'is-invalid' : ''; ?>"
                        type="text" name="username" value="<?php echo $user->username; ?>" placeholder="USERNAME" required/>
                    <div class="invalid-feedback">
                        <?php echo form_error('username'); ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="full_name">FULL NAME <code>*</code></label>
                    <input class="form-control" type="text" name="full_name" value="<?php echo $user->full_name; ?>" placeholder="FULL NAME" required/>
                </div>

                <div class="mb-3">
                    <label for="phone">PHONE <code>*</code></label>
                    <input class="form-control" type="text" name="phone" value="<?php echo $user->phone; ?>" placeholder="PHONE" required/>
                </div>

                <div class="mb-3">
                    <label for="email">EMAIL <code>*</code></label>
                    <input class="form-control" type="text" name="email" value="<?php echo $user->email; ?>" placeholder="EMAIL" required/>
                </div>
                
                    <div class="mb-3">
                        <label for="role">ROLE</label>
                        <select class="form_select" id="role" name="role" required>
                        <?php if($user->role == 'PEMILIK'){?>
                            <option value="PEMILIK" selected>PEMILIK></option>
                            <option value="ADMIN">ADMIN></option>
                            <option value="KASIR">KASIR</option>
                            <?php } elseif ($user->role == 'ADMIN') { ?>
                            <option value="PEMILIK">PEMILIK</option>
                            <option value="ADMIN" selected>ADMIN</option>
                            <option value="KASIR">KASIR</option>
                        <?PHP }else{?>
                            <option value="PEMILIK">PEMILIK></option>
                            <option value="ADMIN" >ADMIN></option>
                            <option value="KASIR" selected>KASIR</option>
                        <?php } ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i>UPDATE</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
</div>
</main>