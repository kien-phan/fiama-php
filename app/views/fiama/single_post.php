<?php $this->view("fiama/header", $data); ?>
<section class="section background-white">
    <p><?php check_message() ?></p>
    <div class="s-12 m-12 l-4 center">
        <h4 class="text-size-20 margin-bottom-20 text-dark text-center"><?= $data['post']->title?></h4>
        <img src="<?= ROOT . $data['post']->image?>" />
        <br>
        <?= $data['post']->description?>
    </div>
</section>

<?php $this->view("fiama/footer", $data); ?>