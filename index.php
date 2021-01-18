<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery</title>
</head>
<body>
<div id="compile">
        <h1 id="title1" class="title">コンパイル言語</h1>
        <ul>
            <li id="java">Java</li>
            <li id="c">C
                <ul>
                    <li id="cpp">C++</li>
                    <li id="cs">C#</li>
                </ul>
            </li>
            <li id="objective-c">ObjectiveC</li>
        </ul>
    </div>
    <div id="script">
        <h1 id="title2" class="title">スクリプト言語</h1>
        <ul>
            <li id="js">JavaScript</li>
            <li id="ruby">Ruby</li>
            <li id="python">Python</li>
            <li id="php">PHP</li>
            <li id="perl">perl</li>
        </ul>
    </div>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="./jquery-3.5.1.min.js"></script>
    <script>
        $(function(){
            // prev, prevAll, next, nextAll
            // $("#python").nextAll().css("color", "red");
            // parent, parents, children
            $("#c").children().css("color", "red");
        });
    </script>
</body>
</html>

<!-- 
    メソッドを使った要素指定
    ・jQueryの基本
    －　$(), jQueryオブジェクト
    －　$(selector).method
    ・ある要素を起点として周囲の要素を取得する

 -->