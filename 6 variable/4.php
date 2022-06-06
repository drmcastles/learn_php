<?php
$iHardLinkToAnotherVariable =& $iTwentyFive;
$iTwentyFive = 25;
$iHardLinkToAnotherVariable = 30;

echo "TwentyFive равна ".$iTwentyFive."<br>"."переменная iHardLinkToAnotherVariable равна"."$iHardLinkToAnotherVariable";

