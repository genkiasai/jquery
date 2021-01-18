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
            <li id="c">C</li>
                <ul>
                    <li id="cpp">C++</li>
                    <li id="cs">C#</li>
                </ul>
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
        // －　（スペース）
        // ある要素の配下の要素
        // $("#compile ul").css("color", "red");
        // －　>
        // ある要素の直下の要素
        // 上の例ではCの下が除かれる
        // $("#compile > ul").css("color", "blue");
        // －　+
        // ある要素の次の要素
        $("#ruby + li").css("color", "green");
        // －　~
        // ある要素移行の全ての要素
        $("#ruby ~ li").css("color", "yellow");
        });
    </script>
</body>
</html>

<!-- 
    階層セレクタで要素を絞り込む
    ・階層セレクタとは？
    －　要素の親子関係で絞り込む
    ・書き方
    $("基本セレクタ　結合子　基本セレクタ")     ×("基本セレクタ" 結合子 "基本セレクタ")
    ・結合子
    －　（スペース）
    －　>
    －　+
    －　~
    
 -->