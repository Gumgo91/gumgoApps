<!DOCTYPE html>
<?
//이름 모음
$ran1 = [
  '배용준',
  '양현석',
  '박진영',
  '이수만',
  '제니',
  '화사',
  '조이',
  '태연',
  '나은',
  '아이린',
  '손나은',
  '예지',
  '슬기',
  '소원',
  '리아',
  '신비',
  '유나',
  '츄',
  '하주연',
  '나연',
  '엄지',
  '세정',
  '예리',
  '치바에리이',
  '은하',
  '수영',
  '지수',
  '웬디',
  '류진',
  '미나',
  '리사',
  '장원영',
  '하니',
  '설현',
  '사나',
  '모모',
  '솔라',
  '핫펠트',
  '강다니엘',
  '지민',
  '김우석',
  '박지훈',
  '뷔',
  '옹성우',
  '하성운',
  '정국',
  '디오',
  '진',
  '민현',
  '김재환',
  '박우진',
  '이대휘',
  '이진혁',
  '배리나',
  '백호',
  'JR',
  '백현',
  '제이홉',
  '슈가',
  '조권',
  '성종',
  '이효리',
  '비',
  '엄정화',
  '키디비',
  '카디비',
  '헤이즈',
  '레이디가가',
  '트럼프',
  '전지현',
  '서장훈',
  '송승헌',
  '이국주',
  '권상우',
  '장근석',
  '서태지',
  '오징어',
  '빌게이츠',
  '메간트레이너',
  '알레시아카라',
  '할시',
  '비욘세',
  '테일러스위프트',
  '아리아나그란데',
  '셀레나고메즈',
  '리아나',
  '아델',
  '저스틴팀버레이크',
  '에드시런',
  '싸이',
  '강동원',
  '김수현',
  '공유',
  '장동건',
  '현빈',
  '이종석',
  '지창욱',
  '박서준',
  '이병헌',
  '박보검',
  '유승호',
  '김우빈',
  '소지섭',
  '이승기'
];
$ran2 = [
  '강남구',
  '강동구',
  '강북구',
  '강서구',
  '관악구',
  '광진구',
  '구로구',
  '금천구',
  '노원구',
  '도봉구',
  '동대문구',
  '서울동구',
  '마포구',
  '서대문구',
  '서초구',
  '성동구',
  '성북구',
  '송파구',
  '양천구',
  '영등포구',
  '과천시',
  '판교',
  '위례시',
  '광교시',
  '분당구',
  '안양시',
  '평촌',
  '광명시',
  '하남시',
  '송도구',
  '별내',
  '의왕시',
  '동탄시',
  '구리시',
  '청라구',
  '일산시',
  '대구수성구',
  '부산수영구',
  '부산해운대구',
  '산본',
  '부천시',
  '용인시',
  '인천시',
  '고양시',
  '안산시',
  '부산동래구',
  '부산연제구',
  '대구중구',
  '울산남구',
  '화성시',
  '부산금정구',
  '대구달서구',
  '경남창원',
  '강원도영월',
  '전북순창시',
  '전북무주시',
  '경북청도시',
  '전남영광시',
  '강원정선시',
  '경남고성시',
  '전남진도시',
  '경북울진시',
  '강화도',
  '천사의섬신안',
  '신안염전',
  '신안압태도',
  '신안자은도',
  '신안증도',
  '신안팔금도',
  '네팔',
  '라오스',
  '몽골',
  '미얀마',
  '북한',
  '평양',
  '예멘',
  '아프가니스탄',
  '우즈베키스탄',
  '타슈켄트',
  '카자흐스탄',
  '이라크',
  '이란',
  '이스라엘',
  '인도',
  '인도네시아',
  '일본',
  '도쿄',
  '중국',
  '베이징',
  '카자흐스탄',
  '태국',
  '터키',
  '필리핀',
  '팔레스타인',
  '예루살렘',
  '이스라엘',
  '가나',
  '네덜란드',
  '미국',
  '영국',
  '아일랜드',
  '런던'
];
$ran3 = [
  '발라드가수',
  '랩퍼',
  '감독',
  '건축가',
  '게임개발자',
  '프로그래머',
  '게임기획자',
  '경비지도사',
  '9급공무원',
  '8급공무원',
  '7급공무원',
  '6급공무원',
  '5급공무원',
  '대통령',
  '회계사',
  '선생님',
  '궁수',
  '마법사',
  '기상캐스터',
  '회사원',
  '농부',
  '댄서',
  '동물훈련사',
  '라운드걸',
  '라이트노벨편집자',
  '마술사',
  '메이드',
  '메이크업아티스트',
  '모델',
  '무술인',
  '미술가',
  '바둑기사',
  '발명가',
  '방송PD',
  '방송각본가',
  '방송인',
  '배우',
  '번역가',
  '법조인',
  '사진가',
  '서비스직',
  '선장',
  '성우',
  '스포츠인',
  '알바생',
  '안무가',
  '애니덕후',
  '언론인',
  '영화배우',
  '영화제작자',
  '예술가',
  '외교관',
  '요리사',
  '운전수',
  '유투버',
  '응원단장',
  '의료기사',
  '의료인',
  '작가',
  '정치인',
  '최면술사',
  '치어리더',
  '코미디언',
  '코스어',
  '탐정',
  '탐험가',
  '통역사',
  '평론가',
  '프로그래머',
  '페미니스트',
  '프로듀서',
  '플로리스트',
  '학자',
  '교수',
  '해커',
  '해적',
  'DJ',
  '의사',
  '가맹거래사',
  '나무꾼',
  '노무사',
  '노예',
  '경리',
  '광대',
  '교무부장',
  '관제사',
  '구급대원',
  '교통캐스터',
  '강사',
  '망나니',
  '머슴',
  '장의사',
  '디지털장의사',
  '등대지기',
  '정령술사',
  '도살자',
  '모험가',
  '묘지기',
  '물리치료사',
  '간호조무사',
  '레이서',
  '딜러',
  '구두닦이',
  '고문관',
  '염전노예'
];


$name = $_POST['name'];

$nameHash = base64_encode(hash('sha256',$name, true));
        
$sum = ord($nameHash[0]) + ord($nameHash[1]) + ord($nameHash[2]);
$sum = $sum % count($ran2);
$buke = $ran2[$sum];

$sum = ord($nameHash[3]) + ord($nameHash[4]) + ord($nameHash[5]);
$sum = $sum % count($ran3);
$buke = $buke.' '.$ran3[$sum];

$sum = ord($nameHash[6]) + ord($nameHash[7]) + ord($nameHash[8]);
$sum = $sum % count($ran1);
$buke = $buke.' '.$ran1[$sum];

?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <?
      if($name=='')
      {
        echo "<meta http-equiv='refresh' content='0;URL=http://blcat.kr/chara/'>";
      }
    ?>

    <title>운명의 부캐</title>

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
    <center><a href="index.html"><img src="img/result.png" width=300px></a></center>
    <br>
    <div class='result'>
      <p><? 
      date_default_timezone_set('Asia/Seoul');
      echo "$name 님의 운명의 부캐는..."; ?></p>
      <h2>
      <?
        echo "$buke";
      ?></h2>
      <p>
      </p>
      <p>http://blcat.kr/chara/</p>
      </div>
      <? $data ?>
      <center>
      <a href="javascript:;" id="kakao-link-btn" class='share'>
        <img src="img/result_kakao.png" width=300px />
      </a>
      <br>
      <a href="javascript:sharetwitter(
        'http://blcat.kr/chara/',
        '[🙈 나의 운명의부캐 ] ────────────────── \n
<? echo "[$name]님의 부캐는 [$buke]입니다".chr(13).chr(10); ?>')"'>
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
              title: '<? echo "$name 님의 부캐: $buke"; ?>',
              description: '#이름으로보는 #운명의 #부캐',
              imageUrl: 'http://blcat.kr/chara/img/result.png',
              link: {
                mobileWebUrl: 'http://blcat.kr/chara/',
                webUrl: 'http://blcat.kr/chara/'
              }
            },
            buttons: [
              {
                title: '나의 부캐는?',
                link: {
                  mobileWebUrl: 'http://blcat.kr/chara/',
                  webUrl: 'http://blcat.kr/chara/'
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
