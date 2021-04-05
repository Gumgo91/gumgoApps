<!DOCTYPE html>
<?
$sens = ['자기 전에 침대 모서리에 발을 찍힐 것이다',
'맨발로 있다가 레고를 밟을 것이다',
'우유 마셨는데 나중에 보니 유통기한 두달 전 것일 것이다',
'너구리 뜯었는데 분말 스프 없고 다시마 두개 나올 것이다',
'하루종일 굶었다가 컵라면 첫끼로 맛있게 먹으려는데 따듯한 국물이 아니라 찬물일것이다',
'빵 맛있게 먹다가 안에 쳐다봤는데 바퀴벌레 반만 남아 있을 것이다',
'비 가다 비오길래 다이소에서 우산 사서 나왔는데 바람에 철사만 남기고 다 날아가 버릴것이다.',
'탕수육에 소스 부었는데 알고보니 짬뽕 부을 것이다',
'문서 잘못 저장해서 날려버릴 것이다',
'지나가다 똥을 밟을 것이다',
'피부상해서 크림같은거 발랐는데 무좀약일것이다',
'눈에 안약 넣었는데 물파스일 것이다',
'파스타 먹다가 고무줄 나올 것이다',
'샴푸하고 린스 하려는데 또 샴푸일 것이다',
'김밥먹다가 은박지 씹을 것이다',
'문지방에 엄지발가락 찍힐 것이다',
'집에 가려고 택시 기다리는데 택시가 오지 않을 것이다',
'애인과 얘기하고 있을 때 전애인 만날 것이다',
'급똥인데 화장실 문이 안열릴 것이다',
'멀리 5만원짜리 날라다니길래 뛰어가 주웠는데 나이트 명함일 것이다',
'큰 돈 들여 파마했는데 묘하게 맘에 안 들 것이다',
'드라마 중요한 순간에 리모콘이 엉덩이에 눌려 꺼질 것이다',
'집에서 나온지 30분만에 핸드폰 안가져온걸 알 것이다',
'치약 마지막 남은거 겨우 짰는데 물에 씻겨 나갈 것이다',
'급하게 앉았는데 변기뚜껑 닫혀있을 것이다',
'나갔다 들어와보니 바지 지퍼 열려있 있을 것이다',
'교통카드에 잔액 1000원 있을 것이다',
'크림빵 샀는데 크림 반만 묻어 있을 것이다',
'등 가려운데 등에 손이 안 닿을 것이다',
'나갔다 들어와보니 흰 옷에 얼룩 있을 것이다',
'교통카드 찍으려고 보니 집에 놓고 왔을 것이다',
'잼빵 샀는데 잼이 바닥을 향해 떨어질 것이다',
'발바닥에 모기 물려서 가려울 것이다',
'자기 전에 암욜맨 생각나서 흥얼거릴 것이다',
'인중에 왕뾰루지 생길 것이다',
'종이에 손가락 베일 것이다',
'음식에 설탕인줄 알고 넣었더니 소금일 것이다',
'길가다가 보도블럭에 넘어질 것이다',
'커피 타다 바지에 쏟아질 것이다',
'엊그제 산 비싼 잠바 찢어질 것이다',
'핸드폰 액정 잘 보니 검은 점 있을 것이다',
'숨 쉬는거 수동으로 바뀔 것이다',
'렌즈 낄 때 눈에 속눈썹 들어가 있을 것이다',
'재채기 시원하게 나오려다 들어갈 것이다',
'늦었는데 핸드폰 두고 온 줄 알고 집에서 찾아봤는데 알고보니 옷 주머니에 있을 것이다',
'엘레베이터 간발의 차이로 놓칠 것이다',
'고기 어금니에 껴서 안 빠질 것이다',
'지나가다 껌 밟아서 신발 밑창에 붙어 안 떨어질 것이다',
'이어폰 갑자기 한쪽이 안 들릴 것이다',
'밤에 누우면 잠 깨고 앉으면 졸립고 할 것이다',
'나갈 준비 싹 하고 양말 신고 손 씻으러 화장실 갔는데 욕실화 젖어 있을 것이다',
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
        echo "<meta http-equiv='refresh' content='0;URL=http://blcat.kr/unfortune/'>";
      }
    ?>
    <title>언포춘 쿠키: 오늘의 불행의 한마디</title>

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
    <center><a href="index.html"><img src="img/logo.jpg" width=300px></a></center>
    <br>
    <div class='result'>
      <p><? 
      date_default_timezone_set('Asia/Seoul');
      echo "$name 님의 ". date("Y년 m월 d일")."의 운세"; ?></p>
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
      <p>http://blcat.kr/unfortune/</p>
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
              title: '<? echo "$name 님의 ". date("Y년 m월 d일")."의 운세"; ?>',
              description: '<? echo "$sens[$sum]"; ?>',
              imageUrl: 'http://blcat.kr/unfortune/img/result.jpg',
              link: {
                mobileWebUrl: 'http://blcat.kr/unfortune/',
                webUrl: 'http://blcat.kr/unfortune/'
              }
            },
            buttons: [
              {
                title: '오늘의 불행의 한마디 보기',
                link: {
                  mobileWebUrl: 'http://blcat.kr/unfortune/',
                  webUrl: 'http://blcat.kr/unfortune/'
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
