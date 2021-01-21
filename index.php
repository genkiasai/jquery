<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery</title>
</head>
<body>
    <div id="title"><h1>Hello World!</h1></div>
    <input id="form" type="text" value="hello">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="./jquery-3.5.1.min.js"></script>
    <script>
    $(function(){
        // console.log($("#title").text());
        // console.log($("#title").html());
        // $("#title").text("こんにちは");//h1タグが消える
        // $("#title").html("こんにちは");//h1タグが消える
        // $("#title").html("<h1>こんにちは</h1>");
        // $("#title").text("<h1>こんにちは</h1>");
        console.log($("#form").val());//フォームの値取得
        console.log($("#form").val("Hello World!"));//フォームの値書き換え
    });
    </script>
</body>
</html>

<!-- 
    要素内のテキストの操作

    ・要素内のテキストの操作
    －　text()
    －　html()
    ・フォーム要素の値の操作
    －　val()

-->