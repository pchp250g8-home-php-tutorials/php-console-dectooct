<?php
    const MAX_INT = 2 ** 32 - 1;
    echo("Input an unsigned integer number\r\n");
    $uNum = intval(chop(fgets(STDIN)));
    if(($uNum < 0) or ($uNum > MAX_INT))
    {
        echo("Invalid number format");
        exit(0);
    }
    $uTempVal = $uNum;
    $strOctNum = "";
    while ($uTempVal > 0)
    {
        $nOctDigit = $uTempVal % 8;
        $chOctDigit = chr($nOctDigit + ord("0"));
        $strOctNum = $chOctDigit . $strOctNum;
        $uTempVal = intdiv($uTempVal, 8);
    }
    if(strlen($strOctNum) == 0)
    {
        $strOctNum = "0";
    }
    printf("The octal equivalent of the decimal number %d is %s\r\n", $uNum, $strOctNum);
    fgetc(STDIN);
?>