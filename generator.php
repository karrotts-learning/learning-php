<a href="/www/"> <- Go Back </a>
<?php
    function fib($limit) {
        $previous = 0;
        $current = 1;
        for ($i = 0; $i < $limit; $i++) {
            if ($i == 0) {
                yield $previous;
            } else if ($i == 1){
                yield $current;
            } else {
                yield $previous + $current;
                $temp = $previous;
                $previous = $current;
                $current = $temp + $current;
            }
        }
    }

    $generator = fib(15);
    foreach ($generator as $value) {
        echo "$value\n";
    }
?>