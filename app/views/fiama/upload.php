<?php $this->view("fiama/header", $data); ?>
<section class="section background-white">
    <p><?php check_message() ?></p>
    <div class="s-12 m-12 l-4 center">
        <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Upload image</h4>
        <form name="contactForm" enctype="multipart/form-data" class="customform" method="post">

            <div class="s-12">
                <input name="title" class="subject" placeholder="Title" title="Title" type="text" required>
                <!-- <p class="subject-error form-error">Please enter the subject.</p> -->
            </div>

            <div class="s-12">
                <input name="file" class="subject" type="file" required>
                <!-- <p class="subject-error form-error">Please select a file.</p> -->
            </div>

            <div class="s-12">
                <textarea name="description" class="required message" placeholder="Description" rows="3" ></textarea>
                <!-- <p class="subject-error form-error">Please enter the subject.</p> -->
            </div>

            <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Submit Button</button></div>
        </form>
    </div>
</section>

<?php $this->view("fiama/footer", $data); ?>