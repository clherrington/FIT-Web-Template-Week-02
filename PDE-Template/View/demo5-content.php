<!-- Demo 5 JavaScript I -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a paragraph tag and write your favorite video game titles into it using a script.</h4>
    <!-- Place Answer Here -->
  
  <p id='myVideoGame'></p>

  <script>
  
  //change content of p tag
  document.getElementById('myVideoGame').innerHTML = 'Dos 2, Skyrim, Minecraft'
  
  </script>
  
    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question 2 -->
  <div class='student-response'>
    <h1>Question #2:</h1>
    <h4>Create two string variables for your first and last name, then write them into an h3 tag.</h4>
    <!-- Place Answer Here -->  
    <h3 id='fullname'></h3>
      <script>
      var firstname = 'Colin';
      var lastname = 'Herrington';

      document.getElementById('fullname').innerHTML = firstname + ' ' + lastname;
      </script>
    <!-- Place Answer Here -->
  </div>
<!-- Question 2 -->

<!-- Question 3 -->
  <div class='student-response'>
    <h1>Question #3:</h1>
    <h4>Write your favorite quote in a string variable, then print it to a p tag and its length to another p tag.</h4>
    <!-- Place Answer Here -->
  <p id = 'quotetext'></p>
  <p id='quotelength'></p>

  <script>
  var quote = "\"Thanks to Canton South I can read and right good\"";
  
  document.getElementById("quotetext").innerHTML = quote;
  
  document.getElementById("quotelength").innerHTML= "This quote has " + quote.length + " characters.";
  
  </script>
    <!-- Place Answer Here -->
  </div>
<!-- Question 3 -->

<!-- Question 4 -->
  <div class='student-response'>
    <h1>Question #4:</h1>
    <h4>Create an array of a few of your favorite foods, then display your absolute favorite from the list with a description.</h4>
    <!-- Place Answer Here -->
    <strong id="favfooddisplay"></strong>

    <script>
    //declare variable
    var favfoods = ['Tacos', 'Pizza', 'Steak', 'Gumbo']

    //display  absolute fav
    document.getElementById("favfooddisplay").innerHTML = favfoods[3];
    
    
    </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 4 -->

<!-- Question 5 -->
  <div class='student-response'>
    <h1>Question #5:</h1>
    <h4>Create an array, then add an element value onto the end and display it without using indexes.</h4>
    <!-- Place Answer Here -->
    <p id="arraymethoddisplay"></p>
    
    <script>
    
    //create array
    var inventoryitems = ['sword', 'shield', 'healing potion'];

    inventoryitems.push('Coins');

    document.getElementById("arraymethoddisplay").innerHTML = inventoryitems[inventoryitems.length - 1];
    
    </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 5 -->

<!-- Question 6 -->
  <div class='student-response'>
    <h1>Question #6:</h1>
    <h4>Create a date object for your birthday or some date special to you and write it to the document.</h4>
    <!-- Place Answer Here -->

    <p id='mydate'></p>

     <script>
     //create date of birthday
      var bday = new Date(2002, 2, 15)

      //print date
      document.getElementById("mydate").innerHTML = bday;
     
     
     </script> 

    <!-- Place Answer Here -->
  </div>
<!-- Question 6 -->

<!-- Question 7 -->
  <div class='student-response'>
    <h1>Question #7:</h1>
    <h4>Get the current time and print it to a p tag span with description in the p tag.</h4>
    <!-- Place Answer Here -->
    <p> the current  time is : <span id = "timedisplay"></span></p>

    <script>
    var nowdate = new Date();

    document.getElementById("timedisplay").innerHTML = nowdate.getHours() + ":" + nowdate.getMinutes();
    </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 7 -->

<!-- Question 8 -->
  <div class='student-response'>
    <h1>Question #8:</h1>
    <h4>Create a p tag that displays :| normally, and displays :D when waved over (or some other small art) using JS.</h4>
    <!-- Place Answer Here -->
    
    <p onMouseOver="innerHTML= ' :D' " onMouseOut="innerHTML= ' :|'">:|</p>


    <!-- Place Answer Here -->
  </div>
<!-- Question 8 -->

<!-- Question 9 -->
  <div class='student-response'>
    <h1>Question #9:</h1>
    <h4>Create a function that accepts a first name and last name, concatenates the two with a space between them, and returns them. Use this function to print your name to a p tag.</h4>
    <!-- Place Answer Here -->
   <p id="fullnamefunc"></p>

    <script>
    function getfullname(first, last)
    {
      return first + " " + last;
    }
    document.getElementById("fullnamefunc").innerHTML = getfullname("Colin", "Herrington");
    </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 9 -->

<!-- Question 10 -->
  <div class='student-response'>
    <h1>Question #10:</h1>
    <h4>Create a button that calls a function that accepts the value from an input tag as a parameter and prints to a p tag a string of that value with 
      " -One of our happy customers" appended onto the end.</h4>
    <!-- Place Answer Here -->
      <label for ='happycustomerinput'>Quote Input:</label>
      <input id="happycustomerinput">
      <p id="customerquotedisplay"></p>

        <button id="customerquotebutton" onClick="makeQuote( document.getElementById('happycustomerinput').value)">Save Quote</button>

      <script>
      
      function makeQuote(input)
      
      {
        document.getElementById("customerquotedisplay").innerHTML = "\"" + input + "\"-One of our happy Customers.";
      }
      
      
      </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 10 -->

