<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>깊어지는 코로나 우울감. 코로나블루 자가진단</title>

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
  <?
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $sum = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 +$q7 + $q8 + $q9
  ?>
  <body>
    <center><img src="img/result_logo.png" width=300px></center>
    <br>
    <div class='result'>
      <p>자가진단 결과 당신은..</p>
      <h1>
      <?
        if($sum>=20) echo "심각한 우울증 입니다.";
        else if($sum>=10) echo "우울증이 의심됩니다";
        else if($sum>=5) echo "우울감이 있습니다";
        else echo "행복한 사람입니다!";
      ?></h1>
      <p>
      <?
        if($sum>=20) echo "높은 수준의 우울(불안)을 경험하고 있습니다.<br>일상생활에서 많은 어려움을 겪고 있을 수 있습니다.<br>전문기관의 방문을 추천합니다.";
        else if($sum>=10) echo "중증도의 우울(불안) 증상을 경험하고 있습니다.<br>일상생활에서 어려움을 겪고 있을 수 있습니다.<br>전문기관의 방문을 추천합니다.";
        else if($sum>=5) echo "가벼운 우울(불안) 증상을 경험하고 있습니다.<br>스트레스가 지속 혹은 악화되거나<br>우울(불안) 증상이 심해진다면<br>전문기관의 방문을 고려할 수 있습니다.";
        else echo "우울감을 경험하고 있지 않습니다.<br>지금처럼 유지해주세요.";
      ?>  
      </p>
      <p>항상 조심하며 우리 함께 이겨내요</p>
      <center>
      <script src="https://ads-partners.coupang.com/g.js"></script>
<script>
	new PartnersCoupang.G({ id:324128 });
</script>
</center>
      </div>
      <? $data ?>
      <center>
      <a href="javascript:sendLink()" id="kakao-link-btn" class='share'>
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
              title: '코로나블루 자가진단 테스트', 
              description: '사회적 거리두기 속에 깊어지는 코로나 우울감. 나의 마음상태를 알아봐요.',
              imageUrl: 'http://blcat.kr/covblue/img/logo.png',
              link: {
                mobileWebUrl: 'http://blcat.kr/covblue/',
                webUrl: 'http://blcat.kr/covblue/'
              }
            },
            buttons: [
              {
                title: '나도 해볼래요!',
                link: {
                  mobileWebUrl: 'http://blcat.kr/covblue/',
                  webUrl: 'http://blcat.kr/covblue/'
                }
              }
            ]
          });
        //]]>
      </script> 
  	<center><h6>* 자료: 대한불안의학회 *<br></h6></center>
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
