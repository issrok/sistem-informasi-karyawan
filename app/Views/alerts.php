<?php if (session()->getFlashdata('notif_success')) : ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div class="alert-icon">
            <i class="align-middle" data-feather="check-circle"></i>
        </div>
        <div class="alert-message">
            <?= session()->getFlashdata('notif_success'); ?>
        </div>
    </div>
<?php endif ?>
<?php if (session()->getFlashdata('notif_error')) : ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div class="alert-icon">
            <i class="align-middle" data-feather="alert-circle"></i>
        </div>
        <div class="alert-message">
            <?= session()->getFlashdata('notif_error'); ?>
        </div>
    </div>
<?php endif ?>
