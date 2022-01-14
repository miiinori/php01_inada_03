<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム：post</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">  
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

</head>
<body>

  <!-- ここからform --> 
<main>  
  <section id="form" class="form">
      <div class="form-wrapper">
        <div class="text-center">
          <h2 class="contact__title">Sign in</h2>
          <div class="contact__subtitle">会員登録</div>
          <p class="contact__text1">無料で始められるOTAMESHI会員になりませんか？</p>
        
        </div>

        <!-- <form action="#" method="POST"> -->
        <form method="post" action="write.php">

        <div class="formbox">
            <dl class="form-dl">
                <dt class="form-dt">お名前</dt>
                <dd class="form-dd"><input type="text" name="name" class="form-parts"></dd>
            </dl>

            <dl class="form-dl">
                <dt class="form-dt">フリガナ</dt>
                <dd class="form-dd"><input type="text" name="furigana" class="form-parts"></dd>
            </dl>

            <dl class="form-dl">
                <dt class="form-dt">メールアドレス</dt>
                <dd class="form-dd"><input type="email" name="email" id="email" class="form-parts"></dd>
            </dl>

            <dl class="form-dl">
                <dt class="form-dt">OTAMESHIを<br>知ったきっかけ</dt>
                <dd class="form-dd">
                    <select name="reason" class="form-parts">
                    <option value="google検索">google検索</option>
                    <option value="SNS">SNS</option>
                    <option value="紹介">紹介</option>
                    <option value="たまたま通りかかった">たまたま通りかかった</option>
                    <option value="その他">その他</option>
                    </select>
                </dd>
            </dl>

            <dl class="form-dl">
                <dt class="form-dt">お悩み</dt>
                <dd class="form-dd">
                <label style="display:block;"><input type="checkbox" name="kind" id="kigyo" value="お直しがめんどう">お直しがめんどう</label>
                <label style="display:block;"><input type="checkbox" name="kind" id="tenshyoku" value="ちょうどよい丈が見つからない">ちょうどよい丈が見つからない</label>
                <label style="display:block;"><input type="checkbox" name="kind" id="work" value="どんな服が似合うかわからない">どんな服が似合うかわからない</label>
                <label style="display:block;"><input type="checkbox" name="kind" id="culture" value="服を選ぶのがめんどう">服を選ぶのがめんどう</label>
                </dd>
            </dl>

            <dl class="form-dl">
                <dt class="form-dt">その他ご要望</dt>
                <dd class="form-dd">
                <textarea name="detail" id="detail" cols="30" rows="10" class="form-parts"></textarea>
                </dd>
            </dl>
          
            <div class="btn2">
              <input type="submit" value="登録" class="btn btn-submit">
            </div>
        </div>
        </form>
     </div>

    </section>
</main>
    
</body>
</html>