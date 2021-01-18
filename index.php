<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery</title>
</head>
<body>
    <a href="http://google.co.jp">Google</a>
    <a href="http://yahoo.co.jp" target="_blank">Yahoo</a>
    <a href="http://bing.com" target="self">Bing</a>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="./jquery-3.5.1.min.js"></script>
    <script>
        $(function(){
            // $("a[target]").css("color", "red");
            // $("a[target='_blank']").css("color", "red");
            // *='文字列'：その文字を含むもの
            // $("a[href*='co.jp']").css("color", "red");
            $("a[href*='co.jp'][target]").css("color", "red");
        });
    </script>
</body>
</html>

<!-- 
    属性フィルタで要素を絞り込む
    ・属性フィルタとは
    －　条件を満たす属性や属性値で絞り込む
    
 -->