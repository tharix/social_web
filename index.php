<?php // Example 04: index.php
session_start();
require_once 'header.php';

echo "<div class='center'>Welcome to Harix World! <br >";

if ($loggedin) echo " $user, you are logged in";
else           echo ' please sign up or log in';

echo <<<_END
      </div><br>
    </div>
    <div data-role="footer">
      <h4>Web App from <i><a href='https://github.com/tharix/'
      target='_blank'>Harix Social Web Project</a></i></h4>
    </div>
  </body>
</html>
_END;
