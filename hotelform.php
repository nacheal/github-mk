<div class="border">
  <img  class = "findethebest" src="<?php bloginfo(stylesheet_directory); ?>/img/findethebest.png">
  <form method = 'post'  action = "">
    <p class = "plan"> Plan your reservation with Company Name</p>
    <div class="left">
      <label for = "from">From</label>
      <input type = "text" name = "from">
      <div class="inlineradio">
        <input  class = "radio" type = "radio"><span>Add nearby airports</span>
      </div><!-- end inlineradio -->
      <p class="desc">
        My dates are flexible
      </p>
      <p class="descdp">
        Depart
      </p>
      <div class="inlinedate">
        <input class = "input-small" type = "text" name = "departdate">
        <select class = "input-small" >
          <option value = "anytime">Anytime</option>
        </select>
      </div><!-- end inlinedate -->
      <div class="inlinesubmit">
        <input class = "submit" type = 'submit' value = 'Anytime'>
        <p>Children or Seniors</p>
      </div><!-- end inlinesubmit -->
    </div><!-- end left -->

    <div class="left">
          <label for = "to">To</label>
      <input type = "text" name = "to">
      <div class="inlineradio">
        <input class = "radio" type = "radio"><span>Add nearby airports</span>
      </div><!-- end inlineradio -->
      <p class="desc">
      </p>
      <p class="descdp">
        Return
      </p>
      <div class="inlinedate">
        <input class = "input-small" type = "text" name = "returndate">
        <select class = "input-small"  name ="">
          <option value = "anytime">Anytime</option>
        </select>
      </div><!-- end inlinedate -->
      <div class="inlinesubmit">
        <input class = "submit" type = 'submit' value = 'Anytime' >
        <input class = "radio" type = "radio">
        <p>Nonstops Only</p>
      </div><!-- end inlinesubmit -->
   </div><!-- end left -->
    
  </form>
</div><!-- end border -->