## 授業管理アプリ

今週はなんの課題があるか、
何をすればいいのかが一目瞭然になる。


学生

カレンダーを用いて、色を付けて見やすくする。
時間割が一目瞭然
課題リストで提出期限を管理
科目ごとにチャットをすることができる
自分だけのカレンダーを作成することができる

#ユーザーが何人いるか
User->学生
Admin->管理者
# ユーザーストーリー
・学生が授業を登録する -> /lesson/register
・学生が課題を登録する -> /lesson/{id}/task/resister
・学生が授業を確認する ->  /lesson/{id}
・学生が課題を確認する -> /lesson/{id}/task/{id}
・学生が授業を編集する -> /lesson/{id}/edit
・学生が課題を編集する -> /lesson/{id}/task/{id}/edit
・学生が授業を削除する -> /lesson/{id}
・学生が課題を削除する -> /lesson/{id}/task/{id}
・学生がメッセージを送る -> /lesson/{id}/chat/register
・学生がファイルを送る ->/lesson/{id}/chat/register
・学生がユーザー登録をする


