<!-- 
	Using everything you have learned and some googling

  Imagine this is a post page and they have sent you a number
  you want to return them the number it text format. For instance:
    
    - 1 -> one
    - 2 -> two

  but anything that is above 10 we want to return "Nothing is greater than 10"
 -->

<!DOCTYPE html>
<html>
  <head></head>
	<body>
        <p>
          <?php
            $number = 3; 

          	// code goes here ...
          	switch ($number) {  //switch statement provides solution for various cases
          	  case 0:
          	  echo "zero";
          	  break;
          	  case 1:
          	  echo "one";
          	  break;
          	  case 2:
          	  echo "two";
          	  break;
          	  case 3:
          	  echo "three";
          	  break;
          	  case 4:
          	  echo "four";
          	  break;
          	  case 5:
          	  echo "five";
          	  break;
          	  case 6:
          	  echo "six";
          	  break;
          	  case 7:
          	  echo "seven";
          	  break;
          	  case 8:
          	  echo "eight";
          	  break;
          	  case 9:
          	  echo "nine";
          	  break;
          	  case 10:
          	  echo "ten";
          	  break;
          	  default: 
          	    echo "Nothing is greater than 10"; //displays if anything other than cases specified
          	}
          ?>
        </p>
	</body>
</html>