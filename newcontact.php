<?php include("head_nav copy.html");?>





<div class="jumbotron text-center"> 
 
</div>
  
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
  
  </div>
  <div class="row">
    <div class="column">
      <img src="Images/freindly.png" style="width:75%">
        <img src="Images/seat.png" style="width:75%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">North Island</option>
          <option value="canada">South Island</option>
          <option value="usa">Other</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<?php include("Newfooter.html");?>



