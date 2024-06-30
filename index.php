<!-- データ入力 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データ登録</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/heart.png">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <header class="header">
                <h1 class="header_text">資産管理アプリ</h1>
            </header>

            <main class="main">
                <form class="form" method="post" action="insert.php">
                    <div class="jumbotron">
                        <fieldset>
                            <legend>データ登録</legend>
                            <label>銀行：<input type="text" name="bank"></label><br>
                            <label>名義：<input type="text" name="name"></label><br>
                            <label>銘柄：<input type="text" name="brand"></label><br>
                            <label>カテゴリ：<input type="text" name="category"></label><br>
                            <label>金額：<input type="text" name="money"></label><br>
                            <input type="submit" value="送信">
                        </fieldset>
                    </div>
                </form>
                <!-- select.phpへのハイパーリンクを追加 -->
                <div class="button_area">
                    <button onclick="location.href='select.php'">一覧</button>
                </div>
            </main>
        </div>
    </div>

    <footer class="footer">
        <h1 class="footer_text">資産管理アプリ</h1>
    </footer>

    </div>

    <!-- script -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</body>

</html>