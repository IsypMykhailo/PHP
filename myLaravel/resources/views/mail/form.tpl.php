<form class="row g-3" action="<?=$_SERVER['PHP_SELF'];?>?controller=MailController&method=send" method="post">
    <div class="col-auto">
        <label for="email" class="visually-hidden">Email</label>
        <input type="email" class="form-control" id="email" name="Email" placeholder="Email">
    </div>
    <div class="col-auto">
        <label for="name" class="visually-hidden">Name</label>
        <input type="text" class="form-control" name="Name" id="name" placeholder="Name">
        <?php
        if(isset($varBug['err']['name'])){
            echo '<div class="alert alert-danger" role="alert">';

            foreach($varBug['err']['name'] as $key => $value){
                echo "<p> $key => $value </p>";
            }
            echo '</div>';
        }
        ?>
    </div>
    <!--<div class="input-group">
        <label for="tel" class="visually-hidden">Phone</label>
        <input type="tel" id="tel" class="form-control" placeholder="Phone">
    </div>-->
    <div class="input-group">
        <input type="tel" id="tel" class="form-control">
    </div>
    <div class="col-auto">
        <label for="inputMessage" class="visually-hidden">Message</label>
        <textarea type="text" class="form-control" id="inputMessage" placeholder="Message"></textarea>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Send</button>
    </div>
</form>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>
<script src="/myLaravel/public/js/my.js"></script>
<?php
