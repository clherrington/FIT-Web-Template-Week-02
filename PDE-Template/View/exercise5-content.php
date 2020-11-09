<!-- Exercise JavaScript I -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a keyword brainwashed script. Add an input and a button, then add the code to add functionality. 
      The user will enter a long string of text, then on button click, the code will search the long string for a keyword and print everything after the keyword to a p tag. 
      (You may use "skeleton" as the keyword if you can't think of anything else.)</h4>
    <!-- Place Answer Here -->
  
    <label for ='bwinput'>Brainwashed Input:</label>
    <input id="bwinput">
    <p id="bwdisplay"></p>
    

      <button id="bwbutton" onClick="bwactivate( document.getElementById('bwinput').value)">Brainwasher</button>

    <script>
    
    function bwactivate(input)
    {
      var bwindex= input.indexOf("lass");
      document.getElementById("bwdisplay").innerHTML = input.substring(bwindex, bwinput.length);
    }
    
    </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question 2 -->
  <div class='student-response'>
    <h1>Question #2:</h1>
    <h4>Create the script and elements necessary to hold a game inventory. Create a hardcoded array for this inventory. 
        One input and button will be responsible for checking what item is at the entered index, 
        while another input and button will be responsible for entering how many of that item is stored. 
        (Hint two arrays or a 2 dimensional array is needed)</h4>
    <!-- Place Answer Here -->
      <label for ='IIinput'>Inventory Item:</label>
      <input id="IIinput">
        <button id="iibutton" onClick="iiactivate( document.getElementById('IIinput').value)">Search</button>
  
      <label for ='IIinput2'>Quantity:</label>
      <input id="IIinput2">
        <button id="iibutton2" onClick="iiactivate2( document.getElementById('IIinput2').value)">Update Quantity</button>
      
      <p id="IIdisplay"></p>
      
      <script>
      
      var II = [ ['Healing Potion', 'Arrow', 'Ressurection Scroll', 'Gold'], [5, 32, 3, '2,000'] ];

      var storedInput; 


      function iiactivate(input)
      {
        document.getElementById("IIdisplay").innerHTML = II[0][input] +": " + II[1][input];
        storedInput = input;
      }

      function iiactivate2(input)
      {
        II[1][storedInput] = input;
        document.getElementById("IIdisplay").innerHTML = II[0][storedInput] + ": " +II[1][storedInput];
      }
      </script>
      


    <!-- Place Answer Here -->
  </div>
<!-- Question 2 -->

<!-- Question F -->
  <div class='student-response'>
    <h1>Find-IT #1:</h1>
    <h4>Create a time travel script. Use the necessary code and elements to allow the user to enter a date (in year, month, day, hour, and minute) 
        they would like to travel to. Then display the number of years, days, hours, and minutes they would need to travel to reach that date and time. 
        (Notice month is excluded)</h4>
    <!-- Place Answer Here -->
      
      

    <!-- Place Answer Here -->
  </div>
<!-- Question F -->

