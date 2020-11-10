<!-- Exercise PHP I -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Without hard coding the number of elements, use the prebuilt array to display each monster's name and attributes in one large table. 
      (Think of recreating a table this information might be coming from so you can display it.)</h4>

    <!-- Given Material -->
      <!-- Table style so your work looks nice -->
      <style>
      table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
        padding: 5px;
      }
      </style>

      <?php
        //creature array (Name, Challenge rating, armor class, hp, speed, actions)
        $creatureList = array (
          array("Name"=>"Owlbear", "Challenge Rating"=>"3 (700 XP)", "Armour Class"=>"13 (Natural Armor)", "hp"=>"59 (7d10 + 21)", "speed"=>"40 ft.", "actions"=>"Multiattack, Beak, Claws"),
          array("Name"=>"Shambling Mound", "Challenge Rating"=>"5 (1,800 XP)", "Armour Class"=>"15 (Natural Armor)", "hp"=>"136 (16d10 + 48)", "speed"=>"20 ft., swim 20 ft.", "actions"=>"Multiattack, Slam, Engulf"),
          array("Name"=>"Aboleth", "Challenge Rating"=>"10 (5,900 XP)", "Armour Class"=>"17 (Natural Armor)", "hp"=>"135 (18d10 + 36)", "speed"=>"10 ft., swim 40 ft.", "actions"=>"Multiattack, Tentacle, Tail, Enslave (3/day), Legendary Action"),
          array("Name"=>"Beholder", "Challenge Rating"=>"13 (10,000 XP)", "Armour Class"=>"18 (natural armor)", "hp"=>"189 (19d10 + 76)", "speed"=>"0 ft., fly 20 ft. (hover)", "Bite, Eye Rays, Legendary Action"),
          array("Name"=>"Tarrasque", "Challenge Rating"=>"30 (155,000 XP)", "Armour Class"=>"25 (Natural Armor)", "hp"=>"676 (33d20 + 330)", "speed"=>"40 ft.", "actions"=>"Multiattack, Claw, Horns, Tail, Frightful Presence, Swallow, Legendary Action"),
          //array("Three Kobolds in a Trenchcoat", "1 (200 XP)", "12", "15 (6d6 - 6)", "30 ft.", "Multiattack, Dagger, Sling")
        );
      ?>
    <!-- /Given Material -->

    <!-- Place Answer Here -->
    <?php if (count($creatureList) > 0): ?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($creatureList))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($creatureList as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>

    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question F1 -->
  <div class='student-response'>
    <h1>Question #F1:</h1>
    <h4>Create the elements and code so that the user can enter a string here and it will appear on the exercise 6 page as a new div for 24 minutes.</h4>
    <!-- Place Answer Here -->

      

    <!-- Place Answer Here -->
  </div>
<!-- Question F1 -->

<!-- Question F2 -->
  <div class='student-response'>
    <h1>Question #F2:</h1>
    <h4>Display a form that allows the user to select their favorite type of cookie. 
      Once selected, every time the user returns, display their favorite cookie type instead of the form. 
      Do so until a reset button is pressed or until 5 minutes have passed. 
      (Hint: this one might not be so well contained in a jar.)</h4>
    <!-- Place Answer Here -->

      

    <!-- Place Answer Here -->
  </div>
<!-- Question F2 -->




