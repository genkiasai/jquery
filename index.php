<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery</title>
</head>
<body>
    <h1 id="title">タイトル１</h1>
    <p id="element1">要素１</p>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="./jquery-3.5.1.min.js"></script>
    <script>
        // 一度HTML全体が準備できた後に実行
        // $(document).ready (
        //     function() {
        //         $("#title").text("タイトル変更");                
        //     }
        // );
        // こっちの書き方が主流
        $(function() {
            $("#title").text ("タイトル変更");
        });
    </script>
</body>
</html>

<!-- 
jQueryの基本（DOMの操作）
・書き方
　1．ライブラリを読み込む（インクルードする）
　2．jQueryが提供する機能を使ってDOMを操作する

・DOMの操作
　－　基本形
　　－　対象の要素.操作内容
　　　－　どの要素（対象の要素）に対して何をするか（操作内容）
　－　対象の要素
　　－　jQuery関数
　　　－　jQuery() or $()
　　　　－　$("#id)
　　　　－　$(document)
　　－　戻り値がjQueryオブジェクト
　－　操作内容
　　－　jQueryオブジェクトのメソッド
　　－　$("#id").text();

 -->