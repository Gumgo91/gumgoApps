<!DOCTYPE html>
<?
$sens = ['이별하기 쉽습니다',
'인연이 2년 이상 지속됩니다',
'현재 만나고 있다면 평생 지속됩니다',
'서로를 진심으로 대합니다',
'서로를 안타깝게 기다립니다',
'서로를 정말 사랑합니다',
'한 쪽이 일방적으로 짝사랑 하고 있습니다',
'부부의 인연이 전생부터 이어지고 있습니다',
'전생부터 이어지고 있는 원수입니다',
'서로를 싫어하며 동시에 좋아합니다',
'짧지만 깊은 인연을 만들 것입니다',
'이별이 예정되어 있습니다',
'평생 서로를 잊을 수 없습니다',
'어울리지 않습니다',
'두 객체 사이에 방해요소가 있을 것입니다',
'쉽게 공감대를 형성합니다',
'서로를 정말 싫어합니다',
'서로에게 호감을 갖고 있습니다',
'서로 만나야 하는 인연입니다',
'서로는 없어서는 안 될 존재입니다',
'서로에게 배려가 필요합니다',
'서로 상호 보완적입니다',
'적분식으로서 푸리에 변환이 잘 정의됩니다',
'서로 역변환 관계로 F2h(t)=F[F[h]](t)=h(−t)가 성립됩니다',
'복소공간속에서 이어져 있습니다',
'서로에 대한 마음은 미분가능합니다'
];
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <?
      if($name1=='' || $name2=='')
      {
        echo "<meta http-equiv='refresh' content='0;URL=http://blcat.kr/name/'>";
      }
    ?>
    <title>복소평면 이름궁합</title>

    <style>
      
      .intro {
        text-align: center;
      }
      .result {
        text-align: center;
        background-color: #eee;
        border-radius: 20px;
        margin-bottom: 20px;
        font-size:20px;
        padding: 10px;
      }
      select {
      font-size: 20px;
      }
      button {
      font-size: 20px;
      }
      input {
      font-size: 20px;
      }
      .share {
        line-height: 50px;
        vertical-align: middle;
      }
    </style>
    <script data-ad-client="ca-pub-4571142021050993" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
    <script>
      function sharetwitter(url, text) {
        window.open("https://twitter.com/intent/tweet?text=" + text + "&url=" + url);
      }
    </script>
  </head>

  <body>
    <center><a href="index.html"><img src="img/logo.png" width=300px></a></center>
    <br>
    <div class='result'>
      <p><? 
      date_default_timezone_set('Asia/Seoul');
      echo "[$name1]과 [$name2]의 이름궁합"; ?></p>
      <h2>
      <?
        $name1Hash = base64_encode(hash('sha256',$name1, true));
        $name2Hash = base64_encode(hash('sha256',$name2, true));
        $sum = 0;
        for($i=0 ; $i<=10 ; $i=$i+1)
        {
          $sum = $sum + ord($name1Hash[$i]) + ord($name2Hash[$i]);
        }
        $sum = $sum % count($sens);
        echo "$sens[$sum]";
      ?></h2>
      <p>
      </p>
      <p>http://blcat.kr/name</p>
      </div>
      <? $data ?>
      <center>
      <a href="javascript:;" id="kakao-link-btn" class='share'>
        <img src="img/result_kakao.png" width=300px />
      </a><br>
      <a href="javascript:sharetwitter(
        'http://blcat.kr/name/',
        '[❤️ <? echo "$name1 ❤️ $name2 이름궁합 " ?>] ────────────────── \n
<? echo $sens[$sum].chr(13).chr(10); ?>')"'>
        <img src="http://blcat.kr/img/twitter.png" width=300px />
      </a>
      </center>

      <script type="text/javascript">
        //<![CDATA[
          Kakao.init('9a2a1febdd4221b2d172b930f9951493');
          Kakao.Link.createDefaultButton({
            container: '#kakao-link-btn', 
            objectType: 'feed',
            content: {  
              title: '<? echo "[$name1]과 [$name2]의 이름궁합"; ?>',
              description: '<? echo "$sens[$sum]"; ?>',
              imageUrl: 'http://blcat.kr/name/img/result2.png',
              link: {
                mobileWebUrl: 'http://blcat.kr/name/',
                webUrl: 'http://blcat.kr/name/'
              }
            },
            buttons: [
              {
                title: '이름궁합 보기',
                link: {
                  mobileWebUrl: 'http://blcat.kr/name/',
                  webUrl: 'http://blcat.kr/name/'
                }
              }
            ]
          });
        //]]>
      </script> 
  	<center><h6>* 문의: admin@blcat.kr *<br></h6></center>
  <script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
  <script type="text/javascript">
  if(!wcs_add) var wcs_add = {};
  wcs_add["wa"] = "87b752199cf210";
  if(window.wcs) {
  wcs_do();
  }
  </script>
  </body>
</html>
