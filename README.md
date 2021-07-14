## 授業管理アプリ
 授業管理アプリとは、学生を対象とし、今週はなんの課題があるか、何をすればいいのかが一目瞭然にすることのできるサイトです。

# Why
 なぜこのアプリを作ったのか
 自分自身、大学で課題が毎回出されて今週は何をすればいいのか何ができているのかわからずに提出日を過ぎてしまい、提出し忘れたことがある。こうした問題を少しでも解決できるようにこのアプリを作成しました。

# Demo
![授業管理アプリ](https://user-images.githubusercontent.com/83622077/125198856-a53ed280-e29e-11eb-8ebb-ac11341b1fe0.png)
![スクリーンショット 2021-07-11 232415](https://user-images.githubusercontent.com/83622077/125198971-25653800-e29f-11eb-9c07-b1f1a8dd856a.png)


# Features
- 授業管理アプリの主な機能
  - 新規登録・ログイン機能
  - 授業の登録
  - 同じ授業内でのチャット機能

- 拘った点 
  - カレンダーを用いて、色を付けて見やすくする。
  - 時間割が一目瞭然
  - 課題リストで提出期限を管理
  - 課題が提出日を過ぎてしまっている場合は赤色で、提出日が三日前からは黄色でそれ以上に余裕がある場合は青色になる。
  - 科目ごとにチャットをすることができる
  - 自分だけのカレンダーを作成することができる

# Dependency
- 授業管理アプリを作成するために使用した言語・技術・ライブラリなど
   - PHP
   - Laravel
   - MySQL
   - JavaScript
   - Bootstrap
   - Heroku

# Usage

- https://secure-beyond-13963.herokuapp.com/ にアクセス
- デモユーザーでログイン
  -Mail:maturyo0115@gmail.com
  -Password:Nisikor1
- カレンダーのページの日付を押すと、課題の登録や授業の登録などをすることができる。

#ユーザーが何人いるか
User->学生
Admin->管理者
# ユーザーストーリー
- 学生が授業を登録する -> /lesson/register
- 学生が課題を登録する -> /lesson/{id}/task/resister
- 学生が授業を確認する ->  /lesson/{id}
- 学生が課題を確認する -> /lesson/{id}/task/{id}
- 学生が授業を編集する -> /lesson/{id}/edit
- 学生が課題を編集する -> /lesson/{id}/task/{id}/edit
- 学生が授業を削除する -> /lesson/{id}
- 学生が課題を削除する -> /lesson/{id}/task/{id}
- 学生がメッセージを送る -> /lesson/{id}/chat/register
- 学生がファイルを送る ->/lesson/{id}/chat/register
- 学生がユーザー登録をする


