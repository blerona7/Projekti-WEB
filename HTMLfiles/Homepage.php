<!DOCTYPE html>
<html>
<?php
include_once '../backend/Mapper/articleMapper.php';
include_once '../backend/logic/articleLogic.php';

$mapper=new ArticleMapper();
$articles=$mapper->getAllArticles();
?>

<head>
    <link rel="stylesheet" href="../style/HomeStyle.css">
    <link rel="stylesheet" href="../style/FooterStyle.css">
    <link rel="stylesheet" href="../style/HomeStyle.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/HeaderStyle.css">
    <script type="text/javascript" src="../js/slider.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <title>Homepage</title>
</head>

<body>

    <body>
        <?php
        include('../Re-Usable/header.php');
        ?>
        <main>
            <div class="social-icons">
                <ul>
                    <li>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <div class="backgroundColorsss">
                <div class="displayRow">
                    <div class="oneDiv">
                        <img src="https://media.gettyimages.com/id/1673063202/vector/breaking-news-globe-background.jpg?s=1024x1024&w=gi&k=20&c=ZNNjdbVby7z-ofIvm0Nqrx3P0p0u2XSRvTCy8nTnWTw=" alt="" style="width:73%;">
                    </div>
                    <div class="secondDiv">
                        <h3>PEPFAR gets a yearlong reauthorization, but questions and uncertainties still remain. Plus, how “megatrends” factor into your development...
                        </h3>

                            <h5>L'You won't beat government. If there's a will to make something happen at a higher level, that's probably what's going to happen,' says Ken... <br> 
                           Chemistry researchers found as much as 90% of tattoo inks in the U.S. might be mislabled, with some containing substances that could cause...
                       Aaron Taylor-Johnson is the latest actor reportedly offered a license to kill and succeed Daniel Craig as the new James Bond.  </h5>
                    </div>
                </div>
            </div>
            <section class="banner">
                <div class="banner-main-content">
                    <h2 style="margin-top: 59px">NJOFTOHU ME LAJMET ME TE REJA</h2>
                    <h3>Lajmet rreth botes</h3>

                    <button>
                        <a href="#" style="text-decoration:none">Shiko me shume</a>
                    </button>

                    <div class="current-news-head">
                        <?php
                        $article = $mapper->showTop4MostRead();
                        foreach ($article as $articles) {
                        ?>
                            <h3>
                                <?php echo $articles['headline']; ?><br>
                            </h3>
                            <span>
                                <?php echo $articles['journalists']; ?><br>
                            </span>
                        <?php
                        }
                        ?>

                        <div class="banner-sub-content">
                            <div class="hot-topic">
                                <img src="https://images.unsplash.com/photo-1574856344991-aaa31b6f4ce3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8&w=1000&q=80" alt="" style="width: 102%;">

                                <div class="hot-topic-content">
                                    <h2>Sa ndikojne frutat ne shendetin tone</h2>

                                    <h3>Frutat</h3>
                                    <p>E preferuara e stinëve të fundit është bërë një varietet luleshtrydhesh i edukuar në Itali -
                                        Jolie....</p>
                                    <a href="HealthCategory.php">Lexo</a>
                                </div>
                            </div>

                            <div class="hot-topic">
                                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8a/Eurovision_Song_Contest_2023_logo.svg/1200px-Eurovision_Song_Contest_2023_logo.svg.png" alt="">

                                <div class="hot-topic-content">
                                    <h2>Kush do te perfaqesoje Shqiperine ne Eurovision 2024? </h2>

                                    <h3>Eurovision 2024</h3>
                                    <p>Kush eshte Albina Kelmendi, qe rrembeu vendin e dyte dhe te pare ne Eurovision 2023.</p>
                                    <a href="Readmore.php">Lexo</a>
                                </div>
                            </div>

                            <div class="hot-topic">
                                <img src="https://yt3.googleusercontent.com/ytc/AMLnZu9X0I_rv6PlC0FPlF3893vaH-QPFiERqfBGQu68uA=s900-c-k-c0x00ffffff-no-rj" alt="">

                                <div class="hot-topic-content">
                                    <h2>Kur do te filloje BBV4 ne Shqiperi</h2>
                                    <h3>Big Brother VIP</h3>
                                    <p>Cili do te jete i ftuari i pare ne BBV4, kush do te udheheqe kete edicion te BBV4? Sa do te
                                        jete shuma per fituesin?</p>
                                    <a href="#">Lexo</a>
                                </div>
                            </div>

                            <div class="hot-topic">
                                <img src="https://img.olympicchannel.com/images/image/private/f_auto/t_s_pog_staticContent_hero_lg_2x/primary/yk2f8tqpjxzdnw3e5b1n" alt="">

                                <div class="hot-topic-content">
                                    <h2>Kush do te fitoje WorldCup 2026?</h2>

                                    <h3>World Cup 2026</h3>
                                    <p>Argjentine vs France, cila do te jete fituese kete vite? Kush do te rrembeje kupen e botes?
                                    </p>
                                    <a href="#">Lexo</a>
                                </div>
                            </div>
                        </div>
            </section>
            <div class="onlyText">
                <h2>Top news of the wrold</h2>
            </div>
            <div class="BottomBoxes">
                <div class="BoxHoldr1">
                    <img src="https://media.sot.com.al/sot.com.al/media3/-800-0-639994452bca5.png" style="width: 100%;
    height: 250px;" />
                    <h3>
                        Sport
                    </h3>
                    <div>
                        <a href="#">
                            Lionel Messi është shpallur si lojtari më i mirë i Kampionatit Botëror të mbajtur në Katar.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse voluptates iste impedit labore 
                            nesciunt voluptatibus maxime ipsum a! Commodi odio explicabo nisi doloribus
                             vero esse quibusdam incidunt amet nesciunt totam!
                        </a>
                    </div>
                </div>

                <div class="BoxHoldr1">
                    <img src="https://cdn.hswstatic.com/gif/csi-lead.jpg" style="width:100%;
    height: 250px;" />
                    <h3>
                        Kronika e zeze
                    </h3>
                    <div>
                        <a href="#">
                            Pas vitesh gjahtarësh të egër të pamëshirshëm, i shpëtuan të dënuarit Riddick papritmas e gjen
                            veten të kapur midis
                            forcave kundërshtare në një luftë për të ardhmen e racës njerëzore Lorem
                            , ipsum dolor sit amet consectetur adipisicing elit. Deleniti eligendi vitae
                             ipsam, sequi expedita illo ad, iusto excepturi minima, doloribus assumenda 
                            molestias ducimus dolore atque vero voluptatem repudiandae qui impedit?
                        </a>
                    </div>
                </div>

                <div class="BoxHoldr1">
                    <img src="https://img.freepik.com/free-vector/medical-science-healthcare-blue-banner_1017-23667.jpg?w=2000" style="width: 100%;
    height: 250px;" />
                    <h3>Shendetesi</h3>

                    <div>
                        <a href="#">
                            Në të kaluarën, mundësitë e Kosovës për të zhvilluar një sistem modern të kujdesit shëndetësor
                            ishin të kufizuara . Deleniti eligendi vitae
                             ipsam, sequi expedita illo ad, iusto excepturi minima, doloribus assumenda 
                            molestias ducimus dolore atque vero voluptatem repudiandae qui impedit?
                        </a>
                    </div>
                </div>

            </div>

<div class="slideshow-container" style="margin-top: 10%; width:50%">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://cdnimpuls.com/alfapress.al/media3/-640-0-unnamed-2-828.jpg" style="width:100%">
  <div class="text">Lajmet me te reja</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://graziamagazine.com/wp-content/uploads/2022/04/GettyImages-1389382981.jpg?resize=1024%2C693" style="width:100%">
  <div class="text">Hailey Bieber/ Justin Bieber</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2022/11/896/500/Selena-Gomez-Hailey-Bieber.jpg?ve=1&tl=1" style="width:100%">
  <div class="text">Selena Gomes && Hailey Bieber</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


        </main>

        <?php
        include('../Re-Usable/footer.php');
        ?>
    <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>