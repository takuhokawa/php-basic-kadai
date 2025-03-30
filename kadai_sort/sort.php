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
          
          if ($order == TRUE) {
            sort($array);
          } else if ($order == FALSE) {
            rsort($array);
          }
          return $array;
        }

        // ソートする配列
        $nums = [15, 4, 18, 23, 10 ];

        // 昇順にソート
        echo "昇順にソートします。<br>";
        $sort_nums_TRUE = sort_2way($nums, TRUE);
        foreach ($sort_nums_TRUE as $num) {
          echo $num . "<br>";
        }

        // 降順にソート
        echo "降順にソートします。<br>";
        $sort_nums_FALSE = sort_2way($nums, FALSE);
        foreach ($sort_nums_FALSE as $num) {
          echo $num . "<br>";
        }

        ?>
    </p>
</body>

</html>