<!DOCTYPE html>
<?
$sens = ['0.001초 전으로 돌아갈 수 있는 [시간역행] 능력을 얻을 것이다',
'0.001초 동안 투명해질 수 있는 능력을 얻을 것이다',
'다른 사람의 생각을 5% 확률로 읽을 수 있을 것이다',
'몸무게를 0.01kg 줄이는 능력을 얻을 것이다',
'키를 0.001cm 늘리는 능력을 얻을 것이다',
'버스에 탔더니 자리가 있을 것이다',
'주머니에서 잃어버렸던 동전을 발견 할 것이다',
'기억력이 0.5% 증가 할 것이다',
'비둘기와 교감하는 능력이 20% 증가 할 것이다',
'마음에 드는 상대의 호감도가 3% 증가 할 것이다',
'한 번 싫어하는 사람 문 모서리에 발 찧게 하는 능력을 얻을 것이다',
'치킨 먹을 때 바로 옆에 휴지가 있을 것이다',
'노래 부르다가 다음 가사 막힐 때 1번 바로 생각 날 것이다',
'단체로 과자를 먹을 때 봉지를 완벽하게 뜯을 수 있을 것이다',
'원하는 동물 울음소리를 잘 따라할 수 있을 것이다',
'3cm를 0.1초간 비행할 수 있을 것이다',
'바닷가에서 물고기가 튀어오르는 것을 볼 수 있을 것이다',
'주변 사람이 방귀 뀌기 3초 전 알 수 있을 것이다',
'어두울 때 무서운 생각 대신 수치스러웠던 생각이 날 것이다',
'간발의 차이로 버스를 탈 수 있을 것이다',
'레고를 밟기 전에 발견 할 것이다',
'유통기한 지난 우유를 마시기 전에 발견 할 것이다',
'라면을 살 때 조금이라도 많이 들어 있는 것을 왠지 알 수 있을 것이다',
'와플 삿는데 속이 꽉 차 있을 것이다',
'비가 와서 우산 살까 말까 고민하는데 갑자기 비가 멈출 것이다',
'탕수육 부먹인 사람과 같이 먹지 않을 것이다',
'문서를 저장했더니 몇 초 뒤에 컴이 꺼져서 안도의 한숨을 내쉴 것이다',
'지나가다 똥을 밟기 전에 발견 할 것이다',
'집에 가려고 택시 기다리는데 3분 안에 올 것이다',
'애인과 얘기하고 있을 때 안좋게 헤어진 전애인 먼저 발견해서 다른길로 갈 수 있을 것이다',
'급똥인데 화장실에 1분 안에 들어갈 수 있을 것이다',
'머리 했는데 엄청 맘에 들 것이다',
'크림빵 샀는데 크림 2배로 들어 있을 것이다',
'등 가려워서 긁으니 엄청 시원 할 것이다',
'인생노래를 찾아 하루종일 스트리밍 할 것이다',
'묘하게 피부가 좋아 보일 것이다',
'핸드폰 놓쳐서 떨어질 뻔 했는데 간신히 잡을 것이다',
'아침에 엘레베이터 간발의 차이로 탈 수 있을 것이다',
'자려고 누웠는데 바로 잠 들 수 있을 것이다',
];
$name = $_POST['name'];
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <?
      if($name=='')
      {
        echo "<meta http-equiv='refresh' content='0;URL=http://blcat.kr/fortune/'>";
      }
    ?>
    <title>Lv.1 천사: 하루 한 번 하찮은 축복</title>

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
  </head>

  <body>
    <center><a href="index.html"><img src="img/logo.png" width=300px></a></center>
    <br>
    <div class='result'>
      <p><? 
      date_default_timezone_set('Asia/Seoul');
      echo "$name 님의 ". date("Y년 m월 d일")."의 일일축복"; ?></p>
      <h2>
      <?
        $timeHash = base64_encode(hash('sha256',date("Ymd"), true));
        $nameHash = base64_encode(hash('sha256',$name, true));
        $sum = 0;
        for($i=0 ; $i<=10 ; $i=$i+1)
        {
          $sum = $sum + ord($nameHash[$i]) + ord($timeHash[$i]);
        }
        $sum = $sum % count($sens);
        echo "$sens[$sum]";
      ?></h2>
      <p>
      </p>
      <p>http://blcat.kr/fortune/</p>
      <center>
      <script src="https://ads-partners.coupang.com/g.js"></script>
<script>
	new PartnersCoupang.G({ id:324434 });
</script>
</center>
      </div>
      <? $data ?>
      <center>
      <a href="javascript:;" id="kakao-link-btn" class='share'>
        <img src="img/result_kakao.png" width=300px />
      </a>
      </center>

      <script type="text/javascript">
        //<![CDATA[
          Kakao.init('9a2a1febdd4221b2d172b930f9951493');
          Kakao.Link.createDefaultButton({
            container: '#kakao-link-btn', 
            objectType: 'feed',
            content: {  
              title: '<? echo "$name 님의 ". date("Y년 m월 d일")."의 일일축복"; ?>',
              description: '<? echo "$sens[$sum]"; ?>',
              imageUrl: 'http://blcat.kr/fortune/img/result.png',
              link: {
                mobileWebUrl: 'http://blcat.kr/fortune/',
                webUrl: 'http://blcat.kr/fortune/'
              }
            },
            buttons: [
              {
                title: '오늘의 축복 받기',
                link: {
                  mobileWebUrl: 'http://blcat.kr/fortune/',
                  webUrl: 'http://blcat.kr/fortune/'
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
