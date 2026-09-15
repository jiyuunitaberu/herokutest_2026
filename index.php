<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>일러스트레이터 포트폴리오</title>
    <style>
        /* 변수 설정: 연보라색과 노란색 조합 */
        :root {
            --bg-lavender: #E8E5F7;      /* 연보라 배경 */
            --main-purple: #7B68EE;     /* 포인트 보라 */
            --accent-yellow: #FFDE4D;   /* 강조 노란색 */
            --text-dark: #333333;       /* 어두운 텍스트 */
            --white: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Noto Sans KR', sans-serif;
            background-color: var(--bg-lavender);
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* 상단 네비게이션 바 */
        header {
            position: fixed;
            top: 0; left: 0; width: 100%;
            background-color: rgba(232, 229, 247, 0.9);
            backdrop-filter: blur(10px);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 8%;
            z-index: 1000;
            border-bottom: 2px solid var(--main-purple);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--main-purple);
            text-decoration: none;
        }

        nav a {
            margin-left: 30px;
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: var(--main-purple);
            border-bottom: 2px solid var(--accent-yellow);
        }

        /* 섹션 공통 */
        section {
            padding: 120px 8% 80px 8%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .section-title {
            font-size: 36px;
            margin-bottom: 40px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -5px; left: 0;
            width: 60px; height: 5px;
            background-color: var(--accent-yellow);
        }

        /* 1. 정보 섹션 */
        .profile-container {
            display: flex;
            align-items: center;
            gap: 50px;
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        .profile-img {
            width: 200px; height: 200px;
            border-radius: 50%;
            background-color: var(--accent-yellow);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            border: 4px solid var(--main-purple);
        }

        /* 2. 포트폴리오 섹션 */
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
        }

        .portfolio-item {
            background-color: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }

        .portfolio-item:hover {
            transform: translateY(-10px);
        }

        .art-placeholder {
            width: 100%; height: 250px;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
        }

        .portfolio-info {
            padding: 15px;
        }

        /* 3. 실적 섹션 */
        .timeline {
            background: var(--white);
            padding: 30px;
            border-radius: 20px;
            border-left: 4px solid var(--main-purple);
        }

        .timeline-item {
            margin-bottom: 25px;
        }

        .timeline-date {
            font-weight: bold;
            color: var(--main-purple);
        }

        /* 4. 의뢰 섹션 */
        .contact-form {
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid var(--bg-lavender);
            border-radius: 8px;
            outline: none;
        }

        .form-group input:focus, .form-group textarea:focus {
            border-color: var(--main-purple);
        }

        .submit-btn {
            background-color: var(--accent-yellow);
            color: var(--text-dark);
            border: none;
            padding: 15px 30px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        footer {
            text-align: center;
            padding: 30px;
            background-color: var(--main-purple);
            color: var(--white);
        }
    </style>
</head>
<body>

    <header>
        <a href="#" class="logo">ILLUST HONG</a>
        <nav>
            <a href="#about">정보</a>
            <a href="#portfolio">포트폴리오</a>
            <a href="#achievements">실적</a>
            <a href="#contact">의뢰</a>
        </nav>
    </header>

    <section id="about">
        <h2 class="section-title">ABOUT ME</h2>
        <div class="profile-container">
            <div class="profile-img">프로필 사진</div>
            <div class="profile-text">
                <h3>안녕하세요, 일러스트레이터 홍길동입니다.</h3>
                <p style="margin-top: 15px;">
                    연보라색 꿈을 노란색 따뜻함으로 그리는 작가입니다. 디지털 페인팅 작업을 주로 하고 있습니다.
                </p>
            </div>
        </div>
    </section>

    <section id="portfolio" style="background-color: #F1EFFB;">
        <h2 class="section-title">PORTFOLIO</h2>
        <div class="portfolio-grid">
            <div class="portfolio-item">
                <div class="art-placeholder">작품 이미지 1</div>
                <div class="portfolio-info"><h4>여름의 기억</h4><p>Digital Painting</p></div>
            </div>
            <div class="portfolio-item">
                <div class="art-placeholder">작품 이미지 2</div>
                <div class="portfolio-info"><h4>노란 방</h4><p>Concept Art</p></div>
            </div>
        </div>
    </section>

    <section id="achievements">
        <h2 class="section-title">ACHIEVEMENTS</h2>
        <div class="timeline">
            <div class="timeline-item">
                <p class="timeline-date">2026.03</p>
                <p>외주 프로젝트 일러스트 참여</p>
            </div>
            <div class="timeline-item">
                <p class="timeline-date">2025.11</p>
                <p>일러스트레이션 페어 참여</p>
            </div>
        </div>
    </section>

    <section id="contact" style="background-color: #F1EFFB;">
        <h2 class="section-title">CONTACT</h2>
        <div class="contact-form">
            <form action="contact-process.php" method="POST">
                <div class="form-group">
                    <label for="name">성함 / 기업명</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">답변받을 이메일</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">의뢰 내용</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-btn">의뢰 신청하기</button>
            </form>
        </div>
    </section>
<!-- フォームハンドラー連携フォーム: フォームハンドラーTEST（ライラックデザイン） -->
<style>
  .lilac-form-wrapper {
    max-width: 420px;
    margin: 0 auto;
    background: #ffffff;
    border: 1px solid #e4d9f5;
    border-radius: 16px;
    padding: 32px 28px;
    box-shadow: 0 8px 24px rgba(147, 112, 219, 0.15);
    font-family: "Hiragino Sans", "Noto Sans JP", -apple-system, sans-serif;
  }
  .lilac-form-wrapper h2 {
    margin: 0 0 8px;
    color: #6b4ba1;
    font-size: 20px;
    font-weight: 700;
  }
  .lilac-form-wrapper p.lilac-sub {
    margin: 0 0 24px;
    color: #9a8fb5;
    font-size: 13px;
  }
  .lilac-field {
    margin-bottom: 18px;
  }
  .lilac-field label {
    display: block;
    margin-bottom: 6px;
    font-size: 13px;
    font-weight: 600;
    color: #5b4b7a;
  }
  .lilac-field .required {
    color: #b48ce0;
    margin-left: 2px;
  }
  .lilac-field input {
    width: 100%;
    padding: 11px 14px;
    box-sizing: border-box;
    border: 1.5px solid #d9c8f0;
    border-radius: 8px;
    font-size: 14px;
    color: #4a3a63;
    background: #faf7ff;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
  }
  .lilac-field input::placeholder {
    color: #bcaed8;
  }
  .lilac-field input:focus {
    outline: none;
    border-color: #a97fd6;
    box-shadow: 0 0 0 3px rgba(169, 127, 214, 0.2);
    background: #ffffff;
  }
  .lilac-submit-btn {
    width: 100%;
    padding: 13px 0;
    margin-top: 6px;
    background: linear-gradient(135deg, #b48ce0, #8a6bc1);
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 0.5px;
    cursor: pointer;
    transition: transform 0.15s ease, box-shadow 0.15s ease;
    box-shadow: 0 4px 14px rgba(138, 107, 193, 0.35);
  }
  .lilac-submit-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 6px 18px rgba(138, 107, 193, 0.45);
  }
  .lilac-submit-btn:active {
    transform: translateY(0);
  }
  .lilac-note {
    margin-top: 14px;
    font-size: 11px;
    color: #b3a6cf;
    text-align: center;
  }
</style>

<div class="lilac-form-wrapper">
  <h2>お問い合わせフォーム</h2>
  <p class="lilac-sub">必要事項をご入力のうえ送信してください</p>

  <form id="marketoForm" action="https://go.kiruaruka.xyz/l/961462/2024-03-18/5gbx6" method="POST">
    <div class="lilac-field">
      <label for="name">お名前<span class="required">*</span></label>
      <input type="text" id="name" name="name" placeholder="山田 太郎" required>
    </div>

    <div class="lilac-field">
      <label for="email">メールアドレス<span class="required">*</span></label>
      <input type="email" id="email" name="email" placeholder="example@mail.com" required>
    </div>

    <div class="lilac-field">
      <label for="kanri">管理コード</label>
      <input type="text" id="kanri" name="kanri" placeholder="任意">
    </div>

    <!-- キャンペーンは固定値を送る想定。必要に応じて value を変更してください -->
    <input type="hidden" id="campaign" name="campaign" value="c">

    <!-- 参照元URLをエラー発生場所として送りたい場合はこちらを利用 -->
    <input type="hidden" name="referrer" id="referrer" value="">

    <button type="submit" class="lilac-submit-btn">送信する</button>
  </form>

  <p class="lilac-note">送信いただいた情報は適切に管理されます</p>
</div>

<script>
(function () {
  var form = document.getElementById("marketoForm");
  var referrerField = document.getElementById("referrer");
  if (referrerField) {
    referrerField.value = window.location.href;
  }
  form.addEventListener("submit", function () {
    console.log("Form submitted to endpoint:", form.action);
  });
})();
</script>


    <footer>
        <p>&copy; 2026 ILLUST HONG. All rights reserved.</p>
    </footer>
<script type='text/javascript'>
piAId = '962462';
piCId = '';
piHostname = 'go.kiruaruka.xyz';

(function() {
	function async_load(){
		var s = document.createElement('script'); s.type = 'text/javascript';
		s.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + piHostname + '/pd.js';
		var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
	}
	if(window.attachEvent) { window.attachEvent('onload', async_load); }
	else { window.addEventListener('load', async_load, false); }
})();
</script>
</body>
</html>
