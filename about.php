<?php
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
$org = (string)filter_input(INPUT_POST, 'org');
$title = (string)filter_input(INPUT_POST, 'title');
$text = (string)filter_input(INPUT_POST, 'text');

$fp = fopen('news.csv', 'a+b');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    flock($fp, LOCK_EX);
    fputcsv($fp, [$org, $title, $text,]);
    rewind($fp);
}

flock($fp, LOCK_SH);
while ($row = fgetcsv($fp)) {
    $rows[] = $row;
}
flock($fp, LOCK_UN);
fclose($fp);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
            --about-bg: #fff;
            --about-decoration: blue wavy underline;
            --about-a: blue;
        }

        #about {
            position: relative;
            color: var(--text-color);
            background-color: var(--about-bg);
        }

        #about hr {
            margin: 2rem 0 1rem;
            border: none;
            border-bottom: var(--border-style);
        }

        #about h2 {
            padding: 1rem 1rem 0.25rem;
        }

        #about p {
            font-size: 0.75rem;
            margin: 0;
            padding: 0.5rem 0.5rem 0.5rem 1rem;
            font-weight: 500;
            display: block;
            transform: scale(1, 1.25);
        }
        
        #about p a {
            display: inline-block;
            margin-left: 0.25rem;
            color: var(--about-a);
            text-decoration: var(--about-decoration);
        }
        
        #about p b {
            font-size: 150%;
            display: inline-block;
        }
        
        #about p u {
            float: right;
            text-transform: uppercase;
            font-size: 75%;
            margin: 0;
            padding: 0.125rem 0.25rem;
            text-decoration: none;
            color: var(--org-text);
            background-color: var(--org-bg);
            border: var(--org-border);
            border-radius: 0.25rem;
            display: block;
        }
    </style>
</head>

<body>
    <ol id="about" class="org">
        <h2>Welcome to my Website</h2>
        <p>こちらのサイトを閲覧している人は、chocontokoの活動や生態をもっと知りたい人ではないだろうか。
　　　　　　　<br/>だが、このwebsiteはchocontokoが遺したビジュアルや言葉によってあなた自身がどう感じるかを導くために使ってほしい。
　　　　　　　<br/>他の人が見ていることをあまり想定せず、気ままに投稿していくよ。</p>
        <br/>
        <p>Contact
            <a href="https://www.instagram.com/chocontoko/" target="_blank">instagram</a>
            <a href="mailto:choco@fuji.waseda.jp" target="_blank">e-mail</a>
        </p>
        <hr/>
        <h2>News</h2>
        <?php if (!empty($rows)): ?>
        <?php foreach ($rows as $row): ?>
        <li class="list_item list_toggle">
            <p>
                <u><?=h($row[0])?></u>
                <b><?=h($row[1])?></b>
            </p>
            <p><?=h($row[2])?></p>
        </li>
        <?php endforeach; ?>
        <?php else: ?>
        <li class="list_item list_toggle" data-org="test">
            <p>
                <u>日付</u>
                <b>題名</b>
            </p>
            <p>本文</p>
        </li>
        <?php endif; ?>
    </ol>

    <script src="index.js"></script>
</body>

</html>
