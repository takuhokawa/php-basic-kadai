<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

         // ソートする関数を定義する
         function sort_2way($array, $order) {
          
          if ($order == "a") {
            sort($array);
          } else if ($order == "b") {
            rsort($array);
          }
          return $array;
        }

        // ソートする配列
        $nums = [15, 4, 18, 23, 10 ];

        // 昇順にソート
        echo "昇順にソートします。<br>";
        $sort_nums_a = sort_2way($nums, "a");
        foreach ($sort_nums_a as $num) {
          echo $num . "<br>";
        }

        // 降順にソート
        echo "降順にソートします。<br>";
        $sort_nums_b = sort_2way($nums, "b");
        foreach ($sort_nums_b as $num) {
          echo $num . "<br>";
        }

         
        ?>
    </p>
</body>

</html>