<!DOCTYPE html>
<?
  $name1 = $_POST['name1'];
  $name2 = $_POST['name2'];

  $name1Hash = base64_encode(hash('sha256',$name1, true));
  $name2Hash = base64_encode(hash('sha256',$name2, true));

  $hp1 = ord($name1Hash[0]) + ord($name1Hash[1]);
  $hp2 = ord($name2Hash[0]) + ord($name1Hash[1]);

  $dam1 = (int) (ord($name1Hash[2]) / 3);
  $dam2 = (int) (ord($name2Hash[2]) / 3);

  $def1 = ord($name1Hash[3])%41+10;
  $def2 = ord($name2Hash[3])%41+10;

   //직업주사위
  //0-4: 마법사(0) : 12%확률 dam*8공격

   // 5-9: 꼬부기(14): 방어력 3배
 // 10-14:  악마술사(15): 50%확률 체력 50% 감소

  //15-19: 기사(1) : 25%확률 dam*4공격
//20-24: 귀신(16); 40%확률로 상대와 나의 체력을 바꿈
//25-29: 고양이(17): 너무 기여워서 상대의 스킬을 봉인

  //30-34: 도적(2) : 50%확률 dam*2공격
//35-39: 랩퍼(18): 30% 디스하여 멘탈을 부쉈다. dam*4공격
//40-44: 족발장사(19): 80%확률 족발을 먹여 승리함

  //45-54: 신관(3) : 50%확률 dam*3회복
  //55-59: 보쌈장사(20): 40%확률 보쌈을 먹여 승리함

  //60-69: 성기사(4) : 방어력 2배, 25%확률 dam*3회복
  //70-79: 상인(5) : 10%확률 dam*15회복(포션사먹기), 3%확률 매수
  //80-89: 무도가(6) : 5%확률 즉사공격
  //90: 신(7): 100%확률 즉사공격
  //91-93: 행인(8): 40%확률 도망
  //94-95: 아이돌(9): 20%확률 체력 2배
  //96-97: 해커(10): 10%확률 결과 조작(이김)
  //98: 수령(11): 70%확률 핵폭탄(즉사)
  //99: 피카츄(12): 40%확률 백만볼트 dam*8공격
  //100: 이상해씨(13): 50%확률 쏠라빔 dam*8공격

  function job($value)
  {
    if($value<=4) return 0;
    else if($value<=9) return 14;
    else if($value<=14) return 15;
    else if($value<=19) return 1;
    else if($value<=24) return 16;
    else if($value<=29) return 17;
    else if($value<=34) return 2;
    else if($value<=39) return 18;
    else if($value<=44) return 19;
    else if($value<=54) return 3;
    else if($value<=59) return 20;
    else if($value<=69) return 4;
    else if($value<=79) return 5;
    else if($value<=89) return 6;
    else if($value<=90) return 7;
    else if($value<=93) return 8;
    else if($value<=95) return 9;
    else if($value<=97) return 10;
    else if($value<=98) return 11;
    else if($value<=99) return 12;
    else if($value<=100) return 13;
  }
  function jobName($value)
  {
    if($value==0) return "마법사";
    else if($value==1) return "기사";
    else if($value==2) return "도적";
    else if($value==3) return "신관";
    else if($value==4) return "성기사";
    else if($value==5) return "상인";
    else if($value==6) return "무도가";
    else if($value==7) return "신";
    else if($value==8) return "행인";
    else if($value==9) return "아이돌";
    else if($value==10) return "해커";
    else if($value==11) return "수령";
    else if($value==12) return "피카츄";
    else if($value==13) return "이상해씨";
    else if($value==14) return "꼬부기";
    else if($value==15) return "악마술사";
    else if($value==16) return "귀신";
    else if($value==17) return "고양이";
    else if($value==18) return "랩퍼";
    else if($value==19) return "족발장인";
    else if($value==20) return "보쌈장인";
    else return "백수";
  }

  $job1 = job(ord($name1Hash[4])*ord($name1Hash[4])%101);
  $job2 = job(ord($name2Hash[4])*ord($name2Hash[4])%101);
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <?
      if($name1=='' || $name2=='')
      {
        echo "<meta http-equiv='refresh' content='0;URL=http://blcat.kr/fight/'>";
      }
    ?>
    <title>평행우주 전투</title>

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
    <center><a href="index.html"><img src="img/result.png" width=250px></a></center>
    <br>
    <div class='result'>
    <style type="text/css">
.tg  {border-collapse:collapse;border-color:#9ABAD9;border-spacing:0;}
.tg td{background-color:#EBF5FF;border-color:#9ABAD9;border-style:solid;border-width:1px;color:#444;
  font-family:Arial, sans-serif;font-size:16px;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{background-color:#409cff;border-color:#9ABAD9;border-style:solid;border-width:1px;color:#fff;
  font-family:Arial, sans-serif;font-size:16px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:top}
</style>
<center>
<table class="tg">
<thead>
  <tr>
    <th class="tg-baqh"></th>
    <th class="tg-baqh">직업</th>
    <th class="tg-baqh">체력</th>
    <th class="tg-baqh">데미지</th>
    <th class="tg-baqh">방어력</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-amwm"><? echo $name1; ?></td>
    <td class="tg-baqh"><? echo jobname($job1); ?></td>
    <td class="tg-baqh"><? echo $hp1; ?></td>
    <td class="tg-baqh"><? echo $dam1; ?></td>
    <td class="tg-baqh"><? echo $def1; ?></td>
  </tr>
  <tr>
    <td class="tg-amwm"><? echo $name2; ?></td>
    <td class="tg-baqh"><? echo jobname($job2); ?></td>
    <td class="tg-baqh"><? echo $hp2; ?></td>
    <td class="tg-baqh"><? echo $dam2; ?></td>
    <td class="tg-baqh"><? echo $def2; ?></td>
  </tr>
</tbody>
</table>
</center>
<br>
      <?
  //직업주사위
  //0-14: 마법사(0) : 12%확률 dam*8공격
  //15-29: 기사(1) : 25%확률 dam*4공격
  //30-44: 도적(2) : 50%확률 dam*2공격
  //45-59: 신관(3) : 50%확률 dam*3회복
  //60-69: 성기사(4) : 25%확률 dam*6회복
  //70-79: 상인(5) : 10%확률 dam*15회복(포션사먹기), 3%확률 매수
  //80-89: 무도가(6) : 5%확률 즉사공격
  //90: 신(7): 100%확률 즉사공격
  //91-93: 행인(8): 40%확률 도망
  //94-95: 아이돌(9): 20%확률 체력 2배
  //96-97: 해커(10): 10%확률 결과 조작(이김)
  //98: 수령(11): 70%확률 핵폭탄(즉사)
  //99: 피카츄(12): 40%확률 백만볼트 dam*8공격
  //100: 이상해씨(13): 50%확률 쏠라빔 dam*8공격
        function fight($value, $attacker, $defenser, $dam, $def, $job, &$attackerHp, &$defenserHp)
        {
          $value = ($value * $value)%101;
          $dam = $dam * (100 - $def) / 100;
          $dam = (int) $dam;
          if($job==0 && $value>=88)
          {
            $dam = $dam * 8;
            $defenserHp = $defenserHp - $dam;
            echo "[$attacker]는 [$defenser]에게 파이어볼을 쐈다! (-$dam)";
          }
          else if($job==1 && $value>=75)
          {
            $dam = $dam * 4;
            $defenserHp = $defenserHp - $dam;
            echo "[$attacker]는 [$defenser]를 강하게 내려쳤다! (-$dam)";
          }
          else if($job==2 && $value>=50)
          {
            $dam = $dam * 2;
            $defenserHp = $defenserHp - $dam;
            echo "[$attacker]는 [$defenser]를 기습했다! (-$dam)";
          }
          else if($job==3 && $value>=50)
          {
            $dam = $dam * 3;
            $attackerHp = $attackerHp + $dam;
            echo "[$attacker]에게 신의 은총이 깃들었다! (+$dam)";
          }
          else if($job==4 && $value>=75)
          {
            $dam = $dam * 6;
            $attackerHp = $attackerHp + $dam;
            echo "[$attacker]에게 신의 은총이 깃들었다! (+$dam)";
          }
          else if($job==5 && $value>=90)
          {
            $dam = $dam * 10;
            $attackerHp = $attackerHp + $dam;
            echo "[$attacker]는 포션을 구매했다! (+$dam)";
          }
          else if($job==5 && $value<=3)
          {
            $defenserHp = $defenserHp - 100000;
            echo "[$attacker]는 [$defenser]를 매수했다!<br>";
            echo "[$defenser]는 죽은척을 했다!";
          }
          else if($job==6 && $value>=95)
          {
            $defenserHp = $defenserHp - 100000;
            echo "[$attacker]는 [$defenser]의 혈을 찔렀다! (즉사)";
          }
          else if($job==7)
          {
            $defenserHp = $defenserHp - 100000;
            echo "[$attacker]는 [$defenser]를 소멸시켰다! (즉사)";
          }
          else if($job==8 && $value<=40)
          {
            $attackerHp = $attackerHp - 100000;
            echo "[$attacker]는 싸움에서 도망갔다!";
          }
          else if($job==9 && $value<=20)
          {
            echo "[$attacker]는 사생팬을 방패로 세웠다! (+$attackerHp)";
            $attackerHp = $attackerHp * 2;
          }
          else if($job==10 && $value<=10)
          {
            $defenserHp = $defenserHp - 100000;
            echo "[$attacker]는 게임결과 해킹에 성공했다!";
          }
          else if($job==11 && $value<=70)
          {
            $defenserHp = $defenserHp - 100000;
            echo "[$attacker]는 [$defenser]에게 핵폭탄을 날렸다! (즉사)";
          }
          else if($job==12 && $value<=40)
          {
            $dam = $dam * 8;
            $defenserHp = $defenserHp - $dam;
            echo "[$attacker]는 [$defenser]에게 백만볼트를 날렸다! (-$dam)";
          }
          else if($job==13 && $value<=50)
          {
            $dam = $dam * 8;
            $defenserHp = $defenserHp - $dam;
            echo "[$attacker]는 [$defenser]에게 솔라빔을 날렸다! (-$dam)";
          }
          else if($job==15 && $value<=50)
          {
            $dam = (int) ($defenserHp / 2);
            echo "[$attacker]는 [$defenser]를 저주했다! (-$dam)";
            $defenserHp = $defenserHp - $dam;
          }
          else if($job==16 && $value<=40)
          {
            echo "[$attacker]는 [$defenser]와 체력을 바꿨다! ($attackerHp -> $defenserHp)";
            $t = $defenserHp;
            $defenserHp = $attackerHp;
            $attackerHp = $t;
          }
          else if($job==18 && $value<=30)
          {
            $dam = $dam * 4;
            $defenserHp = $defenserHp - $dam;
            echo "[$attacker]는 [$defenser]를 디스해서 멘탈을 부쉈다! (-$dam)";
          }
          else if($job==19 && $value<=80)
          {
            $defenserHp = $defenserHp - 100000;
            echo "[$attacker]는 [$defenser]에게 족발을 대접했다!<br>[$defenser]는 족발에 감명받아 기권했다!";
          }
          else if($job==20 && $value<=40)
          {
            $defenserHp = $defenserHp - 100000;
            echo "[$attacker]는 [$defenser]에게 보쌈을 대접했다!<br>[$defenser]는 보쌈에 감명받아 기권했다!";
          }
          else
          {
            $defenserHp = $defenserHp - $dam;
            echo "[$attacker]는 [$defenser]를 때렸다 (-$dam)";
          }
          echo"<br>";
        }
        //턴당 제곱해서 100으로 나눠서 주사위 굴림
        
        //꼬부기
        if($job1==14)
        {
          $def1 = $def1 * 2;
          echo "꼬부기 등껍질로 [$name1]의 방어력 2배 상승!<br><hr width=50px color=black noshade />";
        }
        if($job2==14)
        {
          $def2 = $def2 * 2;
          echo "꼬부기 등껍질로 [$name2]의 방어력 2배 상승!<br><hr width=50px color=black noshade />";
        }

        //고양이
        if($job1==17)
        {
          $job2 = -1;
          echo "고양이 [$name1]이 너무 귀여워서 [$name2]는 직업을 잃었다!<br><hr width=50px color=black noshade />";
        }
        if($job2==17)
        {
          $job2 = -1;
          echo "고양이 [$name2]이 너무 귀여워서 [$name1]는 직업을 잃었다!<br><hr width=50px color=black noshade />";
        }

        for($i=5 ; $i<=9 ; $i++)
        {
          //1이 2를 때림
          fight(ord($name1Hash[$i]), $name1, $name2, $dam1, $def2, $job1, $hp1, $hp2);
          if($hp2<0)
          {
            echo "<hr width=50px color=black noshade />";
            $sen = jobname($job1)." [$name1]의 승리!";
            break;
          }
          //2가 1을 때림
          fight(ord($name2Hash[$i]), $name2, $name1, $dam2, $def1, $job2, $hp2, $hp1);
          if($hp1<0)
          {
            echo "<hr width=50px color=black noshade />";
            $sen = jobname($job2)." [$name2]의 승리!";
            break;
          }
          echo "<hr width=50px color=black noshade />";
        }
        if($hp1>=0 && $hp2>=0)
        {
          if($hp1 > $hp2) $sen = jobname($job1)." [$name1]의 승리!";
          else if($hp2 > $hp1) $sen = jobname($job2)." [$name2]의 승리!";
          else $sen = "무승부!";
        }
        
        echo "<big><b>$sen</b></big>";
      ?></p>
      <p>
      </p>
      <p>http://blcat.kr/fight/</p>
      <center>

</center>
      </div>
      <? $data ?>
      <center>
      <a href="javascript:;" id="kakao-link-btn" class='share'>
        <img src="img/result_kakao.png" width=300px />
      </a><br>
      <a href="javascript:sharetwitter(
        'http://blcat.kr/fight/',
        '[🤬 <? echo "$name1 vs $name2 가상전투 " ?>] ────────────────── \n
<? echo "$sen".chr(13).chr(10); ?>')"'>
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
              title: '<? echo "[$name1] VS [$name2]"; ?>',
              description: '<? echo "$sen"; ?>',
              imageUrl: 'http://blcat.kr/fight/img/logo.png',
              link: {
                mobileWebUrl: 'http://blcat.kr/fight/',
                webUrl: 'http://blcat.kr/fight/'
              }
            },
            buttons: [
              {
                title: '가 상 전 투',
                link: {
                  mobileWebUrl: 'http://blcat.kr/fight/',
                  webUrl: 'http://blcat.kr/fight/'
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
