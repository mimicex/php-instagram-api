# 利用 php 使用 graph api 抓取 instagram 資料

你的 apps 需要確認你的權限有取得 Oembed Read
# api 僅提供 Instagram 商業帳號使用
```
https://developers.facebook.com/
```
api 說明頁
```
https://developers.facebook.com/docs/instagram/oembed
```
api 網址
```
https://graph.facebook.com/v15.0/instagram_oembed?url=[ig完整網址]&access_token=你的fb developers 後台的token&hidecaption=true
```

api 有請求上限，建議是將取得回來的完整內容，存成每一個靜態檔案