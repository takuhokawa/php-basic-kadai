<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php

      // Foodクラスの作成
      class Food {
        // プロパティを定義する
        public $name;
        public $price;

        // メソッドを定義する
        public function show_price() {
          echo $this->price . '<br>';
        }  
        

        // コンストラクタを定着する
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }
      }

        // インスタンス化する
        $potato = new Food('potato', 250);

        // インスタンス$potatoの各プロパティの値を出力する
        print_r($potato) . '<br>';

        // メソッドにアクセスして実行する
        $potato->show_price();
    

      // Animalクラスの作成
      class Animal {
        // プロパティを定義する
        public $name;
        public $height;
        public $weight;

        // メソッドを定義する
        public function show_height() {
          echo $this->height . '<br>';
        }

        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
      }

        // インスタンス化する
        $dog = new Animal('dog', 60, 5000);

        // インスタンス$animalの各プロパティの値を出力する
        print_r($dog) . '<br>';

        // メソッドにアクセスして実行する
        $dog->show_height();
      
      ?>
    </p>
  </body>
</html>