<?php include ('header.php'); ?>

<?php include ('nav.php'); ?>


  <div class="container text-center">

    <div class="row">

      <div class="col">

        <form action="#" method="POST" autocomplete="off">
          <h1>Contact Me</h1>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Your name" required>
          <br>
    
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Your email" required>
          <br>
    
          <label for="message">Message:</label>
          <textarea id="message" name="message" placeholder="Your message" rows="10" cols="50" required></textarea>
          <br>
    
          <input type="submit" value="Submit">
    
        </form>

      </div>

    </div>


  </div>



  <?php include ('footer.php'); ?>