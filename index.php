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
//     －　取得した要素の順番
// 　    －　:first, :last
        // $("#compile li:last").css("color", "red");
//  　   －　:even, :add
        // $("#compile li:even").css("color", "red");
// 　    －　:eq(index), :li(index), :gt(index)
        // $("#compile li:eq(1)").css("color", "red");
//     －　条件を満たす子要素の有無
//     　－　:has(selector)
        $("li:has(ul)").css("color", "red");
//     －　内容の有無
//     　－　:empty, :parent
//     　－　:contains(text)
        // $("#compile li:contains(C)").css("color", "red");
    </script>
</body>
</html>

<!-- 
    フィルタで要素を絞り込む
    ・フィルタとは
    －　取得した要素をさらに絞り込むための条件
    ・様々なフィルタ
    －　取得した要素の順番
　    －　:first, :last
 　   －　:even, :add   even：偶数
　    －　:eq(index), :li(index), :gt(index)
    －　条件を満たす子要素の有無
    　－　:has(selector)
    －　内容の有無
    　－　:empty, :parent
    　－　:contains(text)
    
 -->