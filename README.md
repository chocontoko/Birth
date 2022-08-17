# [org](https://creative-community.space/org/)
## This Page
[https://creative-community.space/org/chocontoko/](https://creative-community.space/org/chocontoko/)


## about.php
92行以降：ページの説明文を記述する
## [news.csv](https://github.com/chocontoko/Workshop/blob/main/news.csv)
Newsの項目を編集（書き方 : 日付,"題目","本文",）


## [img.csv](https://github.com/chocontoko/Workshop/blob/main/img.csv)

カバービジュアル／写真付きリストの写真を編集 (書き方 : 絞り込み項目,画像サイズ,"題目","説明文",)

※カバービジュアルには25行目までが表示される（1行目から順に画像は上に重なって表示される）

※写真付きリストには、img.csvに記述したすべての写真が表示される


## [diary/list.csv](https://github.com/chocontoko/Workshop/blob/main/diary/list.csv)

Diaryの項目を編集（書き方 : 日付,"題目","本文",）

※日記は、1行目から順に、上から下に表示される


## [index.js](https://github.com/chocontoko/Workshop/blob/main/index.js)

操作音を変更する

・10行目：ボリューム変更 (書き方 : volume = new Tone.Volume(-〇←数字を変更する);)

・12行目：音色変更 (書き方 : notes = Tone.Frequency("〇〇 ←A~G の 1~10 で音色を指定").harmonize([○, ○ ← 数字, 数字, 数字 と記述し、音階を指定知る]);)





# index.php （[index.php](https://github.com/chocontoko/Workshop/blob/main/index.php)）

色を指定
> 64行目以降の色の名前を、[https://htmlcolorcodes.com/color-names/](https://htmlcolorcodes.com/color-names/) を参考に記述する
> スクロールバーの色は、126行目 (background: カラーネーム;)／スクロールバーの囲い線は127行目（border: solid 2px カラーネーム;）

フォントの指定
> 91行目：ページタイトル・サブタイトルなどの文字フォントを記述する
> 83行目：流れる文字・絞り込み・日記などの文字フォントを記述する
> ※ フォントの記述方法は、[https://www.cssfontstack.com/](https://www.cssfontstack.com/) を参照

トップページの表示を編集
> 308行目：流れる文字を記述する
> 312行目：ページタイトルを記述する



参考ツール

カラーネーム一覧：[https://htmlcolorcodes.com/color-names/](https://htmlcolorcodes.com/color-names/)

フォント一覧：[https://www.cssfontstack.com/](https://www.cssfontstack.com/)

絵文字検索：[https://www.amp-what.com/](https://www.amp-what.com/)



GitHub
[https://github.com/the-things-i-we-own](https://github.com/the-things-i-we-own)


GitHub Team
https://github.com/orgs/the-things-i-we-own/teams/org
