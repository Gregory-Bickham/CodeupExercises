<?php

 // Set the default timezone
date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
$dayOfWeek = date('N');

$jollyroger = <<<JOLLY 

                       .ed"""" """$$$$be.                     
                     -"           ^""**$$$e.                  
                   ."                   '$$$c                 
                  /                      "4$$b                
                 d  3                     $$$$                
                 $  *                   .$$$$$$               
                .$  ^c           $$$$$e$$$$$$$$.              
                d$L  4.         4$$$$$$$$$$$$$$b              
                $$$$b ^ceeeee.  4$$ECL.F*$$$$$$$              
    e$""=.      $$$$P d$$$$F $ $$$$$$$$$- $$$$$$              
   z$$b. ^c     3$$$F "$$$$b   $"$$$$$$$  $$$$*"      .=""$c  
  4$$$$L   \     $$P"  "$$b   .$ $$$$$...e$$        .=  e$$$. 
  ^*$$$$$c  %..   *c    ..    $$ 3$$$$$$$$$$eF     zP  d$$$$$ 
    "**$$$ec   "\   %ce""    $$$  $$$$$$$$$$*    .r" =$$$$P"" 
          "*$b.  "c  *$e.    *** d$$$$$"L$$    .d"  e$$***"   
            ^*$$c ^$c $$$      4J$$$$$% $$$ .e*".eeP"         
               "$$$$$$"'$=e....$*$$**$cz$$" "..d$*"           
                 "*$$$  *=%4.$ L L$ P3$$$F $$$P"              
                    "$   "%*ebJLzb$e$$$$$b $P"                
                      %..      4$$$$$$$$$$ "                  
                       $$$e   z$$$$$$$$$$%                    
                        "*$c  "$$$$$$$P"                      
                         ."""*$$$$$$$$bc                      
                      .-"    .$***$$$"""*e.                   
                   .-"    .e$"     "*$c  ^*b.                 
            .=*""""    .e$*"          "*bc  "*$e..            
          .$"        .z*"               ^*$e.   "*****e.      
          $$ee$c   .d"                     "*$.        3.     
          ^*$E")$..$"                         *   .ee==d%     
             $.d$$$*                           *  J$$$e*      
              """""                             "$$$"   
JOLLY;

 switch($dayOfWeek) {
    case 1:
    	echo 'Monday' . PHP_EOL;
    	break;
    case 2:
    	echo 'Tuesday' . PHP_EOL;
    	break;
    case 3:
    	echo 'Wednesday' . PHP_EOL;
    	break;
    case 4:
    	echo 'Thursday' . PHP_EOL;
    	break;
    case 5:
    	echo 'Friday' . PHP_EOL;
    	break;
    case 6:
    	echo 'Saturday' . PHP_EOL;
    	break;
    case 7:
    	echo 'Sunday' . PHP_EOL;
    	break; 	
}

if ($dayOfWeek == 1) {
	echo 'Monday' . PHP_EOL;

} else if ($dayOfWeek == 2) {

 	echo {$jollyroger} . PHP_EOL . 'Tuesday'; 

} else if ($dayOfWeek == 3) {

 	echo 'Wednesday' . PHP_EOL; 
 	
} else if ($dayOfWeek == 4) {

 	echo 'Thursday' . PHP_EOL; 
 	
} else if ($dayOfWeek == 5) {

 	echo 'Friday' . PHP_EOL; 
 	
} else if ($dayOfWeek == 6) {

 	echo 'Saturday' . PHP_EOL; 
 	
} else {

 	echo 'Sunday' . PHP_EOL; 

}