<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="theme-color" content="#191919" />
       
       <title><?=$config['title']?></title>
        <link rel="icon" href="/themes/zanimix/icon.png" />
        <link rel="apple-touch-icon" href="/themes/zanimix/icon.png" />
        <link rel="manifest" href="/themes/zanimix/assets/s/manifest.json" />

        <link rel="stylesheet" href="/assets/fonts.css" />
        <link rel="stylesheet" href="/assets/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" type="text/css" />
    </head>
    <body>
		<div id="coverlight" style="z-index: 8; display: none;"></div>
		<div id="loadcontainer" style="display: none;">
			<div class="loadindicator"></div>
		</div>
		<div class="toppart">
			<div id="songContent" class="floattopsearch"> <a id="backiconhome" onclick="window.history.back()"><i class="glyphicon glyphicon-chevron-left"></i></a> <a id="homeicon" href="https://<?=$config['title']?>.best"><i class="glyphicon glyphicon-home"></i></a> <div id="searchbox"> <input type="text" style="display: none"> <input type="password" style="display: none"> <a href="https://<?=$config['title']?>.best"><img class="webtitle" alt="<?=$config['title']?>" src="/assets/logo.png"></a> <input class="form-control searchbar" placeholder="Search" autocomplete="off" id="q" type="search" onfocus="searchfocused()" onblur="searchblur()"> <button id="searchbutton" onclick="searchfull()"> <i class="glyphicon glyphicon-search"></i> </button> <a class="topmenubtn js-link" title="Random anime" href="#" data-href="/random"><i class="glyphicon glyphicon-random"></i>Random</a> <a class="topmenubtn js-link" title="A-Z List" href="#" data-href="/list">A-Z List</a> </div> <button id="menumobilebtn" onclick="showmobilemenu()"> <i class="glyphicon glyphicon-menu-hamburger"></i> </button> <button id="showsearchbtn" onclick="togglesearch()"> <i class="glyphicon glyphicon-search"></i> </button> </div>
		</div>
		<div class="quicksearchcontainer" style="display: none;">
			<div class="resultcontainer">
				<div id="fullresultbtn"> <a onclick="searchE1()">Main</a> <a onclick="zsearchE1(event)" href="/zsearch">Other</a> </div>
				<ul class="quickresult"><a href="<?=$config['domain']?>/eml/21353/clfrwbg0c02x2kslug5lz2so1" title="Tokyo ESP"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx19199-4fdT3ZNTPepS.jpg"></div>
							<div class="details">
								<p class="name">Tokyo ESP</p>
								<p class="infotext">Rinka is a financially struggling high school girl living with her single father in Tokyo. One day, while...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.1</span><span class="qsearch-season">SUMMER 2014</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/687/clfrxbqlp05vhksluga7a5qrh" title="Tokyo Mew Mew"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx687-ougpIBcWwva0.png"></div>
							<div class="details">
								<p class="name">Tokyo Mew Mew</p>
								<p class="infotext">On her first date with the cutest boy in school, Ichigo is zapped by a mysterious ray that scrambles her...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.8</span><span class="qsearch-season">SPRING 2002</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/22319/clfrwb45p02v5kslu5u5o2g6t" title="Tokyo Ghoul"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/nx20605-fmnHdfurM7m6.jpg"></div>
							<div class="details">
								<p class="name">Tokyo Ghoul</p>
								<p class="infotext">The suspense horror/dark fantasy story is set in Tokyo, which is haunted by mysterious "ghouls" who are d...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 7.5</span><span class="qsearch-season">SUMMER 2014</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/1860/clfrwwxum04t5ksluby85dj6c" title="Tokyo Majin"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/1860.jpg"></div>
							<div class="details">
								<p class="name">Tokyo Majin</p>
								<p class="infotext">Something evil is stirring in the shadows of Tokyo... During the spring of his senior year in high school...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.5</span><span class="qsearch-season">WINTER 2007</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/41589/clfrvaqdr0079kslu3dml2712" title="TOKYO MEW MEW NEW"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx117196-PtUScsEWrBED.png"></div>
							<div class="details">
								<p class="name">TOKYO MEW MEW NEW</p>
								<p class="infotext">The scientists of the μ(Mew) Project use DNA of endangered species to create a team of heroines imbued wi...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.4</span><span class="qsearch-season">SUMMER 2022</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/16011/clfrwh66903buksluejewerme" title="Tokyo Ravens"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx16011-orxVpks3jG9U.jpg"></div>
							<div class="details">
								<p class="name">Tokyo Ravens</p>
								<p class="infotext">Hautora was born into a family of onmyouji known for their mastery of the occult. Unfortunately, he didn’...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 7.1</span><span class="qsearch-season">FALL 2013</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/27899/clfrw16jr02dxkslua1k57mmk" title="Tokyo Ghoul √A"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx20850-HO9hwgvavYtw.jpg"></div>
							<div class="details">
								<p class="name">Tokyo Ghoul √A</p>
								<p class="infotext">The second season of Tokyo Ghoul.The ghouls of Anteiku invaded the Aogiri's site in order to rescue Ken K...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.6</span><span class="qsearch-season">WINTER 2015</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/36511/clfrvmyx401drkslu7pzbhvuf" title="Tokyo Ghoul:re"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/nx100240-vJNaKd5HwPJ2.jpg"></div>
							<div class="details">
								<p class="name">Tokyo Ghoul:re</p>
								<p class="infotext">Two years have passed since the CCG’s raid on Anteiku. Although the atmosphere in Tokyo has changed drast...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.1</span><span class="qsearch-season">SPRING 2018</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/50204/clfrv90jm001fksluav3p6zxo" title="Tokyo 24th Ward"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx140643-RpKlGdwDa7r7.jpg"></div>
							<div class="details">
								<p class="name">Tokyo 24th Ward</p>
								<p class="infotext">Enter the 24th Ward, a man-made island inside Tokyo Bay. Three of its inhabitants: Shuuta, Ran, and Kouki...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.1</span><span class="qsearch-season">WINTER 2022</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/42249/clfrvdfmi00g7ksluetvc0cs0" title="Tokyo Revengers"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx120120-mBmQUtMloszF.jpg"></div>
							<div class="details">
								<p class="name">Tokyo Revengers</p>
								<p class="infotext">Takemichi Hanagaki is a freelancer that's reached the absolute pits of despair in his life. He finds out...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 8</span><span class="qsearch-season">SPRING 2021</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/175/clfrxc0ey05wgkslu74zqbmf3" title="Tokyo Underground"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx175-ccHowbNQMcdm.png"></div>
							<div class="details">
								<p class="name">Tokyo Underground</p>
								<p class="infotext">Under the capital city of Tokyo, Japan, there exists a large, vast, and unknown world known as Undergroun...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6</span><span class="qsearch-season">SPRING 2002</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/37799/clfrvpmip01kakslu1h7n36ky" title="Tokyo Ghoul:re 2"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx102351-yD3Ty9YZFMsf.jpg"></div>
							<div class="details">
								<p class="name">Tokyo Ghoul:re 2</p>
								<p class="infotext">The second cour of Tokyo Ghoul:re. Kaneki Ken has finally regained memories of his former self, but this...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.2</span><span class="qsearch-season">FALL 2018</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/759/clfrxaock05s3kslu33hi3ac3" title="Tokyo Godfathers"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx759-vaiRxznGCi9T.jpg"></div>
							<div class="details">
								<p class="name">Tokyo Godfathers</p>
								<p class="infotext">In modern-day Tokyo, three homeless people’s lives are changed forever when they discover a baby girl at...<br><span>Movie</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 8.1</span><span class="qsearch-season">FALL 2003</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/34209/clfrvifmh00y8kslu8er6guvc" title="Meiji Tokyo Renka"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx99000-rVYGI3okjHQh.jpg"></div>
							<div class="details">
								<p class="name">Meiji Tokyo Renka</p>
								<p class="infotext">On the night of a crimson full moon, high school girl Ayazuki Mei enters into a box. When she awakens, sh...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.7</span><span class="qsearch-season">WINTER 2019</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/6211/clfrwt6lj04elksluf75lfby0" title="Tokyo Magnitude 8.0"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx6211-2MCqBUXvmBdB.png"></div>
							<div class="details">
								<p class="name">Tokyo Magnitude 8.0</p>
								<p class="infotext">The premise of the project is the 70% possibility that a magnitude 7.0 earthquake will occur in Tokyo in...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 7.7</span><span class="qsearch-season">SUMMER 2009</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/2683/clfrwy7hn04yakslu5ct20j98" title="Tokyo Majin Season 2"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx2683-fIXcWGY3QNcN.jpg"></div>
							<div class="details">
								<p class="name">Tokyo Majin Season 2</p>
								<p class="infotext">The second season of Tokyo Majin Gakuen Kenpucho. The battle against Tendou Kodzunu is over, and the Mag...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.6</span><span class="qsearch-season">SUMMER 2007</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/10417/clfrwi5vo03eikslu4emy9ihz" title="GYO: Tokyo Fish Attack"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx10417-0tPSLVLmnLZY.jpg"></div>
							<div class="details">
								<p class="name">GYO: Tokyo Fish Attack</p>
								<p class="infotext">Something in Okinawa reeks, and it isn't long before Kaori and her friends realize that the smell is comi...<br><span>OVA</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 4.7</span><span class="qsearch-season">WINTER 2012</span></p>
							</div>
						</li></a><a href="<?=$config['domain']?>/eml/53097/clfrutche003njsludkh14md1" title="TOKYO MEW MEW NEW Season 2"><li>
							<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx154876-x0RnLCgJ4mcy.jpg"></div>
							<div class="details">
								<p class="name">TOKYO MEW MEW NEW Season 2</p>
								<p class="infotext">The second season of Tokyo Mew Mew New~♡. The scientists of the μ(Mew) Project use DNA of endangered spe...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.3</span><span class="qsearch-season">SPRING 2023</span></p>
							</div>
						</li></a></ul>
			</div>
		</div>
		<div class="middle">
			<div id="flexcontainer">
				<div class="leftside">
					<div id="pwaContainer"> <?=$config['title']?> PWA available<button id="pwaButton" class="btn btn-primary"> Install PWA </button> </div>
					<div id="featuredcard" style="display: none;">
						<div id="featuredbgcont"> <img id="featuredbg" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx141911-LqaNFCgfcj3M.jpg"> </div>
						<div id="featuredcont"> <a href="https://<?=$config['title']?>.best/anime/skip-and-loafer-f3911"><img id="featuredimg" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx141911-LqaNFCgfcj3M.jpg"></a> <div id="featuredtitle"> <a href="https://<?=$config['title']?>.best/anime/skip-and-loafer-f3911">Skip and Loafer</a> </div>
							<div id="featuredtext"> This country girl is ready for the big city! Well, at least she thought she was. Mitsumi’s dream is to attend a prestigious school and make the world a better place. But when she finally gets to Tokyo, it turns out she isn’t exactly prepared for city life. Luckily, she runs into Shima, a sweet and handsome classmate who bec... </div>
							<div id="featuredgenre"> <i class="glyphicon glyphicon-tag"></i> <?=$config['title']?> - Watch HD Anime For Free </div> <a id="featuredNext" onclick="showFeatured(curFeatured + 1)"><i class="glyphicon glyphicon-chevron-right"></i></a> <a id="featuredBack" onclick="showFeatured(curFeatured - 1)"><i class="glyphicon glyphicon-chevron-left"></i></a> </div>
					</div>
					<div id="announcement" style="display: none;">
						<h1>Welcome to <span style="color: #c1ba93"><?=$config['title']?></span></h1> <?=$config['title']?> using 2 domain: <?=$config['title']?>.fun and <?=$config['title']?>.best, please bookmark and use both.<br> If you like this site, please support us by sharing the site to your friends on your social network blog forum... more people visit the website then we will have more motivation to keep the site alive and make more features for a better experience. Thank you for your support! <div class="heart-animation">
							<div id="heart"></div>
						</div>
						<div class="addthis_inline_share_toolbox" style="margin-top: 6px"></div> Read more info: <a href="<?=$config['domain']?>/about">here</a><br> Follow us for website updates: <a target="_blank" href="https://twitter.com/<?=$config['title']?>2023">https://twitter.com/<?=$config['title']?>2023</a><br> </div> <button type="button" id="readmorebtn" onclick="readless()" class="btn btn-secondary btn-sm btn-lg btn-block" style="display: none;"> <i class="glyphicon glyphicon-menu-up"></i> </button> <button type="button" id="openschedulebtn" onclick="showschedulemenu()" style="display: none;"> <i class="glyphicon glyphicon-time"></i> Schedule </button> <div id="navtab" style="display: none;">
						<ul class="nav nav-tabs">
							<li id="allbtn" class="active" onclick="showall()"> <a>Sub</a> </li>
							<li id="dubbtn" onclick="showdub()"> <a style="border-bottom: 1px solid #e36a6a">Dub</a> </li>
							<li id="recentbtn" onclick="showrecent()"> <a>All</a> </li>
							<li id="followedbtn" onclick="showfollow()"> <a>Followed</a> </li>
							<li id="popularbtn" onclick="showpopular()"> <a>Popular</a> </li>
							<li id="moviebtn" onclick="showmovie()"> <a>Movie</a> </li>
						</ul>
					</div>
					<div id="seasontopnav" style="display: none;">
						<div id="prevseasonbtn" onclick="seasonPrev()"> &lt; Previous season </div>
						<div id="nextseasonbtn" onclick="seasonNext()"> Next season &gt; </div> <select id="topfilterselect" onchange="seasonFilterChange()"> <option value="all">Show all</option>
							<option value="new">New</option>
							<option value="continuing">Continuing</option> </select> </div>
					<div id="genresortbtn" style="display: none;"> Sort by : <select id="topsortselect" onchange="filterSortChange()"> <option value="any">none</option>
							<option value="popular" selected="">Popularity</option>
							<option value="rating">Rating</option>
							<option value="latest">Latest update</option> </select> </div>
					<div id="resultplace" data-watch="www1.<?=$config['title']?>er.top" data-sync="1">
						<div id="result4">
							<div class="loadmoresearch2">Quick Search</div>
							<ul class="items"><a href="<?=$config['domain']?>/eml/21353/clfrwbg0c02x2kslug5lz2so1" title="Tokyo ESP"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx19199-4fdT3ZNTPepS.jpg"></div>
										<div class="details">
											<p class="name">Tokyo ESP</p>
											<p class="infotext">Rinka is a financially struggling high school girl living with her single father in Tokyo. One day, while...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.1</span><span class="qsearch-season">SUMMER 2014</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/687/clfrxbqlp05vhksluga7a5qrh" title="Tokyo Mew Mew"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx687-ougpIBcWwva0.png"></div>
										<div class="details">
											<p class="name">Tokyo Mew Mew</p>
											<p class="infotext">On her first date with the cutest boy in school, Ichigo is zapped by a mysterious ray that scrambles her...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.8</span><span class="qsearch-season">SPRING 2002</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/22319/clfrwb45p02v5kslu5u5o2g6t" title="Tokyo Ghoul"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/nx20605-fmnHdfurM7m6.jpg"></div>
										<div class="details">
											<p class="name">Tokyo Ghoul</p>
											<p class="infotext">The suspense horror/dark fantasy story is set in Tokyo, which is haunted by mysterious "ghouls" who are d...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 7.5</span><span class="qsearch-season">SUMMER 2014</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/1860/clfrwwxum04t5ksluby85dj6c" title="Tokyo Majin"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/1860.jpg"></div>
										<div class="details">
											<p class="name">Tokyo Majin</p>
											<p class="infotext">Something evil is stirring in the shadows of Tokyo... During the spring of his senior year in high school...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.5</span><span class="qsearch-season">WINTER 2007</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/41589/clfrvaqdr0079kslu3dml2712" title="TOKYO MEW MEW NEW"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx117196-PtUScsEWrBED.png"></div>
										<div class="details">
											<p class="name">TOKYO MEW MEW NEW</p>
											<p class="infotext">The scientists of the μ(Mew) Project use DNA of endangered species to create a team of heroines imbued wi...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.4</span><span class="qsearch-season">SUMMER 2022</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/16011/clfrwh66903buksluejewerme" title="Tokyo Ravens"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx16011-orxVpks3jG9U.jpg"></div>
										<div class="details">
											<p class="name">Tokyo Ravens</p>
											<p class="infotext">Hautora was born into a family of onmyouji known for their mastery of the occult. Unfortunately, he didn’...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 7.1</span><span class="qsearch-season">FALL 2013</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/27899/clfrw16jr02dxkslua1k57mmk" title="Tokyo Ghoul √A"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx20850-HO9hwgvavYtw.jpg"></div>
										<div class="details">
											<p class="name">Tokyo Ghoul √A</p>
											<p class="infotext">The second season of Tokyo Ghoul.The ghouls of Anteiku invaded the Aogiri's site in order to rescue Ken K...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.6</span><span class="qsearch-season">WINTER 2015</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/36511/clfrvmyx401drkslu7pzbhvuf" title="Tokyo Ghoul:re"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/nx100240-vJNaKd5HwPJ2.jpg"></div>
										<div class="details">
											<p class="name">Tokyo Ghoul:re</p>
											<p class="infotext">Two years have passed since the CCG’s raid on Anteiku. Although the atmosphere in Tokyo has changed drast...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.1</span><span class="qsearch-season">SPRING 2018</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/50204/clfrv90jm001fksluav3p6zxo" title="Tokyo 24th Ward"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx140643-RpKlGdwDa7r7.jpg"></div>
										<div class="details">
											<p class="name">Tokyo 24th Ward</p>
											<p class="infotext">Enter the 24th Ward, a man-made island inside Tokyo Bay. Three of its inhabitants: Shuuta, Ran, and Kouki...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.1</span><span class="qsearch-season">WINTER 2022</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/42249/clfrvdfmi00g7ksluetvc0cs0" title="Tokyo Revengers"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx120120-mBmQUtMloszF.jpg"></div>
										<div class="details">
											<p class="name">Tokyo Revengers</p>
											<p class="infotext">Takemichi Hanagaki is a freelancer that's reached the absolute pits of despair in his life. He finds out...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 8</span><span class="qsearch-season">SPRING 2021</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/175/clfrxc0ey05wgkslu74zqbmf3" title="Tokyo Underground"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx175-ccHowbNQMcdm.png"></div>
										<div class="details">
											<p class="name">Tokyo Underground</p>
											<p class="infotext">Under the capital city of Tokyo, Japan, there exists a large, vast, and unknown world known as Undergroun...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6</span><span class="qsearch-season">SPRING 2002</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/37799/clfrvpmip01kakslu1h7n36ky" title="Tokyo Ghoul:re 2"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx102351-yD3Ty9YZFMsf.jpg"></div>
										<div class="details">
											<p class="name">Tokyo Ghoul:re 2</p>
											<p class="infotext">The second cour of Tokyo Ghoul:re. Kaneki Ken has finally regained memories of his former self, but this...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.2</span><span class="qsearch-season">FALL 2018</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/759/clfrxaock05s3kslu33hi3ac3" title="Tokyo Godfathers"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx759-vaiRxznGCi9T.jpg"></div>
										<div class="details">
											<p class="name">Tokyo Godfathers</p>
											<p class="infotext">In modern-day Tokyo, three homeless people’s lives are changed forever when they discover a baby girl at...<br><span>Movie</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 8.1</span><span class="qsearch-season">FALL 2003</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/34209/clfrvifmh00y8kslu8er6guvc" title="Meiji Tokyo Renka"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx99000-rVYGI3okjHQh.jpg"></div>
										<div class="details">
											<p class="name">Meiji Tokyo Renka</p>
											<p class="infotext">On the night of a crimson full moon, high school girl Ayazuki Mei enters into a box. When she awakens, sh...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.7</span><span class="qsearch-season">WINTER 2019</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/6211/clfrwt6lj04elksluf75lfby0" title="Tokyo Magnitude 8.0"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx6211-2MCqBUXvmBdB.png"></div>
										<div class="details">
											<p class="name">Tokyo Magnitude 8.0</p>
											<p class="infotext">The premise of the project is the 70% possibility that a magnitude 7.0 earthquake will occur in Tokyo in...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 7.7</span><span class="qsearch-season">SUMMER 2009</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/2683/clfrwy7hn04yakslu5ct20j98" title="Tokyo Majin Season 2"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx2683-fIXcWGY3QNcN.jpg"></div>
										<div class="details">
											<p class="name">Tokyo Majin Season 2</p>
											<p class="infotext">The second season of Tokyo Majin Gakuen Kenpucho. The battle against Tendou Kodzunu is over, and the Mag...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.6</span><span class="qsearch-season">SUMMER 2007</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/10417/clfrwi5vo03eikslu4emy9ihz" title="GYO: Tokyo Fish Attack"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx10417-0tPSLVLmnLZY.jpg"></div>
										<div class="details">
											<p class="name">GYO: Tokyo Fish Attack</p>
											<p class="infotext">Something in Okinawa reeks, and it isn't long before Kaori and her friends realize that the smell is comi...<br><span>OVA</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 4.7</span><span class="qsearch-season">WINTER 2012</span></p>
										</div>
									</li></a><a href="<?=$config['domain']?>/eml/53097/clfrutche003njsludkh14md1" title="TOKYO MEW MEW NEW Season 2"><li>
										<div class="searchimg"><img class="resultimg2" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx154876-x0RnLCgJ4mcy.jpg"></div>
										<div class="details">
											<p class="name">TOKYO MEW MEW NEW Season 2</p>
											<p class="infotext">The second season of Tokyo Mew Mew New~♡. The scientists of the μ(Mew) Project use DNA of endangered spe...<br><span>TV Series</span> <span class="qsearch-rating"><i class="glyphicon glyphicon-star"></i> 6.3</span><span class="qsearch-season">SPRING 2023</span></p>
										</div>
									</li></a></ul>
						</div>
					</div>
				 <br> </div>
				<div class="rightside" id="rightsidee">
					
					<div class="rightcard mobilemenureplace"> <a class="topmenubtn" title="Random anime" href="/random"><i class="glyphicon glyphicon-random"></i>Random</a> <a class="topmenubtn js-link" title="A-Z List" href="#" data-href="/list">A-Z List</a> </div>
					
					<div class="rightcard">
						<div class="subtitleright">
							<h2><?=$config['title']?> Genres</h2>
						</div>
						<div class="flexrightcard" id="genreplace" style="visibility: visible;">
							<div class="genresgrid form-check">
								<div><input class="form-check-input" type="checkbox" id="gen-Action" value="Action"> <label class="form-check-label" for="gen-Action">Action</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Adventure" value="Adventure"> <label class="form-check-label" for="gen-Adventure">Adventure</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Cars" value="Cars"> <label class="form-check-label" for="gen-Cars">Cars</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Comedy" value="Comedy"> <label class="form-check-label" for="gen-Comedy">Comedy</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-DarkFantasy" value="Dark Fantasy"> <label class="form-check-label" for="gen-DarkFantasy">Dark Fantasy</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Dementia" value="Dementia"> <label class="form-check-label" for="gen-Dementia">Dementia</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Demons" value="Demons"> <label class="form-check-label" for="gen-Demons">Demons</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Drama" value="Drama"> <label class="form-check-label" for="gen-Drama">Drama</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Ecchi" value="Ecchi"> <label class="form-check-label" for="gen-Ecchi">Ecchi</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Fantasy" value="Fantasy"> <label class="form-check-label" for="gen-Fantasy">Fantasy</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Game" value="Game"> <label class="form-check-label" for="gen-Game">Game</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Harem" value="Harem"> <label class="form-check-label" for="gen-Harem">Harem</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Historical" value="Historical"> <label class="form-check-label" for="gen-Historical">Historical</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Horror" value="Horror"> <label class="form-check-label" for="gen-Horror">Horror</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Isekai" value="Isekai"> <label class="form-check-label" for="gen-Isekai">Isekai</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Josei" value="Josei"> <label class="form-check-label" for="gen-Josei">Josei</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Kids" value="Kids"> <label class="form-check-label" for="gen-Kids">Kids</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Magic" value="Magic"> <label class="form-check-label" for="gen-Magic">Magic</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-MartialArts" value="Martial Arts"> <label class="form-check-label" for="gen-MartialArts">Martial Arts</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Mecha" value="Mecha"> <label class="form-check-label" for="gen-Mecha">Mecha</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Military" value="Military"> <label class="form-check-label" for="gen-Military">Military</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Music" value="Music"> <label class="form-check-label" for="gen-Music">Music</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Mystery" value="Mystery"> <label class="form-check-label" for="gen-Mystery">Mystery</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Parody" value="Parody"> <label class="form-check-label" for="gen-Parody">Parody</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Police" value="Police"> <label class="form-check-label" for="gen-Police">Police</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Psychological" value="Psychological"> <label class="form-check-label" for="gen-Psychological">Psychological</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Romance" value="Romance"> <label class="form-check-label" for="gen-Romance">Romance</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Samurai" value="Samurai"> <label class="form-check-label" for="gen-Samurai">Samurai</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-School" value="School"> <label class="form-check-label" for="gen-School">School</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Sci-Fi" value="Sci-Fi"> <label class="form-check-label" for="gen-Sci-Fi">Sci-Fi</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Seinen" value="Seinen"> <label class="form-check-label" for="gen-Seinen">Seinen</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Shoujo" value="Shoujo"> <label class="form-check-label" for="gen-Shoujo">Shoujo</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-ShoujoAi" value="Shoujo Ai"> <label class="form-check-label" for="gen-ShoujoAi">Shoujo Ai</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Shounen" value="Shounen"> <label class="form-check-label" for="gen-Shounen">Shounen</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-ShounenAi" value="Shounen Ai"> <label class="form-check-label" for="gen-ShounenAi">Shounen Ai</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-SliceOfLife" value="Slice Of Life"> <label class="form-check-label" for="gen-SliceOfLife">Slice Of Life</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Sorcery" value="Sorcery"> <label class="form-check-label" for="gen-Sorcery">Sorcery</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Sports" value="Sports"> <label class="form-check-label" for="gen-Sports">Sports</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-SuperPower" value="Super Power"> <label class="form-check-label" for="gen-SuperPower">Super Power</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Supernatural" value="Supernatural"> <label class="form-check-label" for="gen-Supernatural">Supernatural</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-SwordFighting" value="Sword Fighting"> <label class="form-check-label" for="gen-SwordFighting">Sword Fighting</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Thriller" value="Thriller"> <label class="form-check-label" for="gen-Thriller">Thriller</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Vampire" value="Vampire"> <label class="form-check-label" for="gen-Vampire">Vampire</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Yaoi" value="Yaoi"> <label class="form-check-label" for="gen-Yaoi">Yaoi</label></div>
								<div><input class="form-check-input" type="checkbox" id="gen-Yuri" value="Yuri"> <label class="form-check-label" for="gen-Yuri">Yuri</label></div>
							</div>
						</div> <button type="button" id="expandbtn" onclick="expandgenre()" class="btn btn-secondary btn-sm btn-lg btn-block"> <i class="glyphicon glyphicon-menu-down"></i> </button> </div>
					<div class="rightcard" style="margin-bottom: 10px">
						<div class="subtitleright">
							<h2><?=$config['title']?> Weekly Top</h2>
						</div>
						<div id="ongoingplace" style="height: unset"> <a href="https://<?=$config['title']?>.best/anime/demon-slayer-kimetsu-no-yaiba-swordsmith-village-arc-f4022"><li class="topanimeli topanimea"> <img src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx145139-rRimpHGWLhym.png" class="topanimeimg"> <div>
										<div class="topanimenumber">#1</div> <span class="topanimename">Demon Slayer: Kimetsu no Yaiba Swordsmith Village Arc</span> <div class="topanimestats">
											<div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.8 </div>
											<div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 11783 </div>
										</div>
									</div>
								</li></a> <a href="https://<?=$config['title']?>.best/anime/one-piece-f9"><li class="topanimeli topanimea"> <img src="https://zanimee.github.io/anime/posters/1/2022/09/thumbs/one-piece-english-subbed-dubbed.jpg" class="topanimeimg"> <div>
										<div class="topanimenumber">#2</div> <span class="topanimename">ONE PIECE</span> <div class="topanimestats">
											<div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.6 </div>
											<div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 7644 </div>
										</div>
									</div>
								</li></a> <a href="https://<?=$config['title']?>.best/anime/i-got-a-cheat-skill-in-another-world-and-became-unrivaled-in-the-real-world-too-f3815"><li class="topanimeli topanimea"> <img src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx153845-C47aoKy7wf19.jpg" class="topanimeimg"> <div>
										<div class="topanimenumber">#3</div> <span class="topanimename">I Got a Cheat Skill in Another World and Became Unrivaled in The Real World, Too</span> <div class="topanimestats">
											<div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.0 </div>
											<div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 2589 </div>
										</div>
									</div>
								</li></a> <a href="https://<?=$config['title']?>.best/anime/black-clover-f139"><li class="topanimeli topanimea"> <img src="https://animeza.github.io/animee/posters/060223/1/2023/01/thumbs/black-clover-1675089878.jpg" class="topanimeimg"> <div>
										<div class="topanimenumber">#4</div> <span class="topanimename">Black Clover</span> <div class="topanimestats">
											<div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.6 </div>
											<div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 2313 </div>
										</div>
									</div>
								</li></a> <a href="https://<?=$config['title']?>.best/anime/hells-paradise-f3744"><li class="topanimeli topanimea"> <img src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx128893-l0R0GFHplDKW.jpg" class="topanimeimg"> <div>
										<div class="topanimenumber">#5</div> <span class="topanimename">Hell’s Paradise</span> <div class="topanimestats">
											<div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.8 </div>
											<div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 1481 </div>
										</div>
									</div>
								</li></a> <a href="https://<?=$config['title']?>.best/anime/mashle-magic-and-muscles-f3949"><li class="topanimeli topanimea"> <img src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx151801-wYg28dEaJAw3.png" class="topanimeimg"> <div>
										<div class="topanimenumber">#6</div> <span class="topanimename">MASHLE: MAGIC AND MUSCLES</span> <div class="topanimestats">
											<div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.5 </div>
											<div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 1409 </div>
										</div>
									</div>
								</li></a> <a href="https://<?=$config['title']?>.best/anime/vinland-saga-season-2-f85"><li class="topanimeli topanimea"> <img src="https://zanimee.github.io/anime/posters/1/2023/01/thumbs/vinland-saga-season-2-1673291453.jpg" class="topanimeimg"> <div>
										<div class="topanimenumber">#7</div> <span class="topanimename">Vinland Saga Season 2</span> <div class="topanimestats">
											<div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.7 </div>
											<div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 1400 </div>
										</div>
									</div>
								</li></a> <a href="https://<?=$config['title']?>.best/anime/the-aristocrats-otherworldly-adventure-servings-gods-who-go-too-far-f3785"><li class="topanimeli topanimea"> <img src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx153332-k3Jg04E9jNRo.png" class="topanimeimg"> <div>
										<div class="topanimenumber">#8</div> <span class="topanimename">The Aristocrat’s Otherworldly Adventure: Servings Gods Who Go Too Far</span> <div class="topanimestats">
											<div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 7.4 </div>
											<div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 1302 </div>
										</div>
									</div>
								</li></a> <a href="https://<?=$config['title']?>.best/anime/my-love-story-with-yamada-kun-at-lv999-f3748"><li class="topanimeli topanimea"> <img src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx154965-vZbBRjtmLp7S.jpg" class="topanimeimg"> <div>
										<div class="topanimenumber">#9</div> <span class="topanimename">My Love Story with Yamada-kun at Lv999</span> <div class="topanimestats">
											<div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.2 </div>
											<div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 1227 </div>
										</div>
									</div>
								</li></a> <a href="https://<?=$config['title']?>.best/anime/naruto-shippuden-f140"><li class="topanimeli topanimea"> <img src="https://animeza.github.io/animee/posters/060223/1/2023/01/thumbs/naruto-shippuden-1675090839.jpg" class="topanimeimg"> <div>
										<div class="topanimenumber">#10</div> <span class="topanimename">Naruto: Shippuden</span> <div class="topanimestats">
											<div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.6 </div>
											<div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 1122 </div>
										</div>
									</div>
								</li></a> </div> <button type="button" id="expandbtn2" onclick="expandweekly()" class="btn btn-secondary btn-sm btn-lg btn-block"> <i class="glyphicon glyphicon-menu-down"></i> </button> </div>
				</div>
			</div>
		</div>
		<div id="playerleftsidebar" class="schedulemenucontainer"> <button id="recomendedclosebtn" style="margin-left: 10px" onclick="showschedulemenu()"> <i class="glyphicon glyphicon-arrow-left"></i> </button> <div id="seasontitle"></div>
			<div id="scheduletimezone"></div>
			<div id="recomendedlist" style="padding-top: unset"></div>
			<div id="schedulenotice">Release time is estimated</div>
		</div>
		<footer>
			<div class="leftbottom"> <span id="donatelabel">RSS</span><a class="customicon rssicon" href="#"></a> <div class="floatright">
					<div class="togglelabel">Chat</div> <label class="switch"> <input type="checkbox" id="enablechat"> <span class="slider round"></span> </label> <a class="js-link" data-href="/info" href="#" style="font-size: 17px; margin-left: 4px"><i class="glyphicon glyphicon-info-sign"></i></a><br> </div>
			</div>
			<div class="footer"> <span class="bottomtext" data-wam="51thyb5tv9"> Watch HD Anime for Free ©2023 <?=$config['title']?> <img alt="Anime Online" src="https://whos.amung.us/widget/51thyb5tv9.png" class="hidden"></span> Disclaimer: This site does not store any files on its server. All contents are provided by non-affiliated third parties. </div>
			<div id="notifiaction"></div>
			<div id="lastwatch" style="animation-name: lastwatchout;"> <i onclick="lastwatchExpand()" id="lastwatchclosebtn" class="glyphicon glyphicon-chevron-right"></i> Continue watching :<br> <a id="lastwatchlink"> <div id="lastwatchtitle"></div>
					<div id="lastwatchurl"></div> </a> </div>
		</footer>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script type="text/javascript" src="/themes/zanimix/assets/main.js?zv=1.0.6" defer=""></script>
		<script type="text/javascript">
			var nowtime = "2023-06-21 14:51:34";
			    var envYear = 2023;
			    var envSeason = "Winter";
			    var curFeatured = 4;
		</script>
		<script>
			function zsearchE1()
			            {
			                var e = $("#q").val();
			                // alert(e);
			                if (e.length < 3) {
			                    shownotif("Keyword too short!");
			                    // alert('short');
			                }
			                else {
			                    window.location.href = `/zsearch?keyword=${e}`;
			                }
			                event.preventDefault();
			            }
			
			            $('.js-link').click(function() {
			                let url = $(this).data('href');
			                window.location.href = url;
			            });
		</script>
		<script src="/themes/animix/js/app2.js"></script>
		<script>
			$('.bottomtext').append(atob('PGltZyBhbHQ9IkFuaW1lIE9ubGluZSIgc3JjPSJodHRwczovL3dob3MuYW11bmcudXMvd2lkZ2V0LyR7d2FtfS5wbmciIGNsYXNzPSJoaWRkZW4iPg==').replace('${wam}', $('.bottomtext').data('wam')));
		</script> <!-- Google tag (gtag.js) -->
		<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-HXVMLG9EPN"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());
			
			  gtag('config', 'G-HXVMLG9EPN');
		</script>
		<script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-63b541a546ff41e7"></script>
		<script src="/assets/weeklytop.min.js?v=1.1"></script>
		<div id="backtotopbtn" style="opacity: 0;"><i class="glyphicon glyphicon-menu-up"></i></div>
	</body>

</html>