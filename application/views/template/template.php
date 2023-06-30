<?php echo @$_header; ?>

<div class="container-fluid">
    <div class="row">

        <?php echo @$_sidebar; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <?php echo @$_content; ?>

        </main>
    </div>
</div>

<?php echo @$_footer; ?>