<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery</title>
</head>
<body>
    <h1 id="title1" class="title">コンパイル言語</h1>
    <ul>
        <li id="java">Java</li>
        <li id="c">C</li>
        <li id="objective-c">ObjectiveC</li>
    </ul>
    <h1 id="title2" class="title">スクリプト言語</h1>
    <ul>
        <li id="js">JavaScript</li>
        <li id="ruby">Ruby</li>
        <li id="python">Python</li>
        <li id="php">PHP</li>
        <li id="perl">perl</li>
    </ul>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="./jquery-3.5.1.min.js"></script>
    <script>
        $(function(){
            // タグ名
            // $("li").css("color", "red");
            // ID
            // $("#title2").css("color", "blue");
            // クラス名
            $(".title").css("color", "green");
        });
    </script>
</body>
</html>

<!-- 
    セレクタの指定
    ・jQueryの基本
    －　$(), jQueryオブジェクト
    －　$(args).method
    ・セレクタとは
    －　特定の要素を取得するための記法
    ・基本
    －　タグ名
    　－　$("#tag_name")
    　－　$(div)など
    －　ID
    　－　$("#id")
    －　クラス名
    　－　$(".class_name")

    CSSと一緒
 -->