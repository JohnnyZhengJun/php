<?php
    for($i = 1; $i <= 10; $i++)
    {
        for($j = 1; $j <= $i; $j++)
        {
            print("*");
        }
        print("<br>");
    }
    print("<br>");

    for($i = 1; $i <= 10; $i++)
    {
        for($space = 1; $space <= 10 - $i; $space++)
        {
            echo "&nbsp;";
        }
        for($j = 1; $j <= $i; $j++)
        {
            echo "*";
        }
        print("<br>");
    }
    print("<br>");

    for($i = 1; $i <= 10; $i++)
    {
        for($j = 10; $j >= $i; $j--)
        {
            echo "*";
        }
        print("<br>");
    }
    print("<br>");

    for($i = 1; $i <= 10; $i++)
    {
        for($space = 1; $space <= $i - 1; $space++)
        {
            echo "&nbsp;";
        }
        for($j = 10; $j >= $i; $j--)
        {
            echo "*";
        }
        print("<br>");
    }
?>
