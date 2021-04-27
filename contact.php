<?php 
  include_once 'header.php';
 ?>
<div>
<h2 style="text-align: center;">Contact Us</h2>
</div>
<div class="d-flex justify-content-center">
    <?php if(!empty($statusMsg)){ ?>
        <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
    <?php } ?>
    <form id="contact_form" class="form-horizontal" action="include/contact.inc.php" method="post">
        <div class="form-group">
                <label for="name"> Name </label>
                <input type="text" name="name" placeholder="Your Name" required="">
        </div>

        <div class="form-group">
                <label for="email"> Email </label>
        <input type="email" name="email" placeholder="email@example.com" required="">
        </div>

        <div class="form-group">
                <label for="subject"> Subject </label>
        <input type="text" name="subject" placeholder="Write subject" required="">
        </div>
        <div class="form-group">
                <label for="message"> Message </label>
        <textarea name="message" placeholder="Write your message here" required=""> </textarea>
       <!-- <input type="submit" name="submit" value="Submit"> -->
       </div>
       <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <div class="clear"> </div>
        
    </form>
</div>