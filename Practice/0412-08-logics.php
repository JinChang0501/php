<pre><?php

        $a = 5;
        $b = 7;

        $c = $a and $b; // and, or 的優先權比 = 要來得低

        var_dump($c);
        $d = ($a and $b);
        var_dump($d);




        ?></pre>