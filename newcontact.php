<?php include("head_nav copy.html");?>





<div class="jumbotron text-center"> 
 
</div>
  
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
  
  </div>
  <div class="row">
    <div class="columnt">
      <img src="Images/freindly.png" style="width:75%">
        <img src="Images/seat.png" style="width:75%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Region</label>
        <select id="country" name="country">
          <option value="australia">Northland</option>
          <option value="canada">Auckland</option>
        <option value="canada">Waikato</option>
            <option value="canada">Bay of Plenty</option>
            <option value="canada">Gisbourne</option>
            <option value="canada">Hawkes Bay</option>
            <option value="canada">Wellington</option>
            <option value="canada">West coast</option>
            <option value="canada">Southland</option>
            <option value="canada">Taranaki</option>
          <option value="usa">Tasman</option>
            <option value="canada">Manawatu-Whanganui</option>
            <option value="canada">Nelson</option>
            <option value="canada">Marlborough</option>
            <option value="canada">Cantebury</option>
            <option value="canada">Otago</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<?php include("Newfooter.html");?>



