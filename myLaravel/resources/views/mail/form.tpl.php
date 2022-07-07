<form class="g-3 m-3" action="<?=$_SERVER['PHP_SELF'];?>?controller=MailController&method=send" method="post">
    <?php
    \App\Views\Forms\Input::input(
        "Mail", "email", "email", ["placeholder" => "Mail"],
        $varBug['formData']['email'] ?? null,
        $varBug['err']['email'] ?? null);

    \App\Views\Forms\Input::input(
        "Name", "text", "name", ["placeholder" => "Name"],
        $varBug['formData']['name'] ?? null,
        $varBug['err']['name'] ?? null);
    \App\Views\Forms\Input::input(
        "Phone", "tel", "tel", ["id" => "tel"],
        $varBug['formData']['tel'] ?? null,
        null);
    ?>
    <div class="mb-3">
        <label for="message" class="visually-hidden">Message</label>
        <textarea type="text" class="form-control" id="inputMessage" name="message" id="message" placeholder="Message"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary mb-3">Send</button>
    </div>
</form>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>
<script src="/myLaravel/public/js/my.js"></script>
<?php
