<?= $this->extend('template/front-end'); ?>

<?= $this->section('title'); ?>
killifish : About
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="table">
    <div class="border">
        <h2 style= "text-align:center"  >About Nature Trust</h2>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <img src="" alt="nature_trust" algin="left" style="width:100%" >
    </div>

    <div class="border">
        <h2 style= "text-align:center">About The Game</h2>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <img src="" alt="mcast" algin="left" style="width:100%">
    </div>

    <div class="border">
        <h2 style= "text-align:center">About Nature Trust</h2>
        <p> <i class="material-icons">email</i>Email:</p>
        <p> <i class="material-icons">stay_current_portrait</i>Phone:</p>
        <p> <i class="material-icons">settings_phone</i>Telephone:</p>
    </div>
</div>
<?= $this->endSection(); ?>