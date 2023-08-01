<?php 
include 'inc/config.php';
?>
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
        <div id="coverlight" style="z-index: 8;"></div>
        <div id="loadcontainer"><div class="loadindicator"></div></div>
        <div class="toppart">
            <div id="songContent" class="floattopsearch">
                <a id="backiconhome" onclick="window.history.back()"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a id="homeicon" href="<?=$config['domain']?>"><i class="glyphicon glyphicon-home"></i></a>
                <div id="searchbox">
                    <input type="text" style="display: none;" />
                    <input type="password" style="display: none;" />
                    <a href="<?=$config['domain']?>"><img class="webtitle" alt="<?=$config['title']?>" src="/assets/logo.png" /></a>

                    <input class="form-control searchbar" placeholder="Search" autocomplete="off" id="q" type="search" onfocus="searchfocused()" onblur="searchblur()" />
                    <button id="searchbutton" onclick="searchfull()">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                    <a class="topmenubtn js-link" title="Random anime" href="#" data-href="/random"><i class="glyphicon glyphicon-random"></i>Random</a>

                    <a class="topmenubtn js-link" title="A-Z List" href="#" data-href="/list">A-Z List</a>
                </div>
                <button id="showsearchbtn" onclick="togglesearch()">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
        <div class="quicksearchcontainer">
            <div class="resultcontainer">
                <div id="fullresultbtn">
                    <a onclick="searchE1()">Main</a>

                    <a onclick="zsearchE1(event)" href="/zsearch">Other</a>
                </div>
                <ul class="quickresult"></ul>
            </div>
        </div>
        <div class="middle">
            <div id="flexcontainer">
                <div class="leftside">
                    <div id="pwaContainer">
                        <?=$config['title']?> PWA available
                        <button id="pwaButton" class="btn btn-primary">
                            Install PWA
                        </button>
                    </div>
                    <div id="featuredcard">
                        <div id="featuredbgcont">
                            <img id="featuredbg" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx140754-JHwGp7NrAj9m.png" />
                        </div>
                        <div id="featuredcont">
                            <a href="<?=$config['domain']?>/anime/summoned-to-another-world-for-a-second-time-f3986"><img id="featuredimg" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx140754-JHwGp7NrAj9m.png" /></a>
                            <div id="featuredtitle">
                                <a href="<?=$config['domain']?>/anime/summoned-to-another-world-for-a-second-time-f3986">Summoned to Another World for a Second Time</a>
                            </div>
                            <div id="featuredtext">
                                There was once a hero who was summoned to another world, and he saved that world. However, the man was caught in a &quot;trap&quot; and was forcibly returned to his original world. On top of that, he had to
                                start over as a baby… This is the story of a crazy journey in another world where a former hero who was reincarnated into a slig...
                            </div>
                            <div id="featuredgenre"><i class="glyphicon glyphicon-tag"></i> <?=$config['title']?> - Watch HD Anime For Free</div>
                            <a id="featuredNext" onclick="showFeatured(curFeatured + 1)"><i class="glyphicon glyphicon-chevron-right"></i></a>
                            <a id="featuredBack" onclick="showFeatured(curFeatured - 1)"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        </div>
                    </div>
                    <div id="announcement">
                        <h1>Welcome to <span style="color: #c1ba93;"><?=$config['title']?></span></h1>
                        <?=$config['description']?>
                    </div>
                    <button type="button" id="openschedulebtn" onclick="showschedulemenu()"><i class="glyphicon glyphicon-time"></i> Schedule</button>

                    <div id="navtab">
                        <ul class="nav nav-tabs">
                            <li id="allbtn" class="active" onclick="showall()">
                                <a>Sub</a>
                            </li>
                            <li id="dubbtn" onclick="showdub()">
                                <a style="border-bottom: 1px solid #e36a6a;">Dub</a>
                            </li>
                            <li id="recentbtn" onclick="showrecent()">
                                <a>All</a>
                            </li>
                            <li id="followedbtn" onclick="showfollow()">
                                <a>Followed</a>
                            </li>
                            <li id="popularbtn" onclick="showpopular()">
                                <a>Popular</a>
                            </li>
                            <li id="moviebtn" onclick="showmovie()">
                                <a>Movie</a>
                            </li>
                        </ul>
                    </div>
                    <div id="seasontopnav">
                        <div id="prevseasonbtn" onclick="seasonPrev()">
                            &lt; Previous season
                        </div>
                        <div id="nextseasonbtn" onclick="seasonNext()">
                            Next season &gt;
                        </div>
                        <select id="topfilterselect" onchange="seasonFilterChange()">
                            <option value="all">Show all</option>
                            <option value="new">New</option>
                            <option value="continuing">Continuing</option>
                        </select>
                    </div>
                    <div id="genresortbtn">
                        Sort by :
                        <select id="topsortselect" onchange="filterSortChange()">
                            <option value="any">none</option>
                            <option value="popular" selected>Popularity</option>
                            <option value="rating">Rating</option>
                            <option value="latest">Latest update</option>
                        </select>
                    </div>
                    <div id="resultplace" data-watch="www1.<?=$config['title']?>er.top" data-sync="1">
                        <ul class="searchresult">
                            <li>
                                <a href="<?=$config['domain']?>/watch/summoned-to-another-world-for-a-second-time-episode-11-e40793" title="Summoned to Another World for a Second Time Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx140754-JHwGp7NrAj9m.png" />
                                        <div class="timetext">
                                            16 hours ago
                                        </div>
                                        <div class="rating">6.2</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name">
                                        <a href="<?=$config['domain']?>/watch/summoned-to-another-world-for-a-second-time-episode-11-e40793" title="Summoned to Another World for a Second Time Episode 11">
                                            Summoned to Another World for a Second Time
                                        </a>
                                    </span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/a-galaxy-next-door-episode-11-e40794" title="A Galaxy Next Door Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx148098-MI9Rm8JVhSh0.jpg" />
                                        <div class="timetext">
                                            17 hours ago
                                        </div>
                                        <div class="rating">7.0</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/a-galaxy-next-door-episode-11-e40794" title="A Galaxy Next Door Episode 11">A Galaxy Next Door</a></span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/my-love-story-with-yamada-kun-at-lv999-episode-12-e40777" title="My Love Story with Yamada-kun at Lv999 Episode 12">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx154965-vZbBRjtmLp7S.jpg" />
                                        <div class="timetext">
                                            18 hours ago
                                        </div>
                                        <div class="rating">8.0</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name">
                                        <a href="<?=$config['domain']?>/watch/my-love-story-with-yamada-kun-at-lv999-episode-12-e40777" title="My Love Story with Yamada-kun at Lv999 Episode 12">
                                            My Love Story with Yamada-kun at Lv999
                                        </a>
                                    </span>
                                    <span class="infotext">EP 12/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/heavenly-delusion-episode-12-e40781" title="Heavenly Delusion Episode 12">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx155783-X23WQwPmI9Sh.jpg" />
                                        <div class="timetext">
                                            19 hours ago
                                        </div>
                                        <div class="rating">8.9</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/heavenly-delusion-episode-12-e40781" title="Heavenly Delusion Episode 12">Heavenly Delusion</a></span>
                                    <span class="infotext">EP 12/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/hells-paradise-episode-11-e40778" title="Hell’s Paradise Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx128893-l0R0GFHplDKW.jpg" />
                                        <div class="timetext">
                                            19 hours ago
                                        </div>
                                        <div class="rating">8.7</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/hells-paradise-episode-11-e40778" title="Hell’s Paradise Episode 11">Hell’s Paradise</a></span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/aishang-ta-de-liyou-episode-17-e40780" title="Aishang Ta De Liyou Episode 17">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx156111-ZABTgci6m9sN.png" />
                                        <div class="timetext">
                                            1 day ago
                                        </div>
                                        <div class="rating">6.0</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/aishang-ta-de-liyou-episode-17-e40780" title="Aishang Ta De Liyou Episode 17">Aishang Ta De Liyou</a></span>
                                    <span class="infotext">EP 17/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/mai-mai-miracle-episode-1-e40770" title="Mai-Mai Miracle Episode 1">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx5084-rm8FNL5yYOIv.jpg" />
                                        <div class="timetext">
                                            1 day ago
                                        </div>
                                        <div class="rating">6.8</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/mai-mai-miracle-episode-1-e40770" title="Mai-Mai Miracle Episode 1">Mai-Mai Miracle</a></span>
                                    <span class="infotext">EP Full</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/the-tunnel-to-summer-the-exit-of-goodbyes-episode-1-e40763" title="The Tunnel to Summer, the Exit of Goodbyes Episode 1">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx142769-kNyyqpwC9gGV.jpg" />
                                        <div class="timetext">
                                            1 day ago
                                        </div>
                                        <div class="rating">6.6</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name">
                                        <a href="<?=$config['domain']?>/watch/the-tunnel-to-summer-the-exit-of-goodbyes-episode-1-e40763" title="The Tunnel to Summer, the Exit of Goodbyes Episode 1">
                                            The Tunnel to Summer, the Exit of Goodbyes
                                        </a>
                                    </span>
                                    <span class="infotext">EP Full</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/zhenwu-dianfeng-2-episode-13-e40764" title="Zhenwu Dianfeng 2 Episode 13">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx155322-ZGG59ZJtgUq8.png" />
                                        <div class="timetext">
                                            1 day ago
                                        </div>
                                        <div class="rating">3.5</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/zhenwu-dianfeng-2-episode-13-e40764" title="Zhenwu Dianfeng 2 Episode 13">Zhenwu Dianfeng 2</a></span>
                                    <span class="infotext">EP 13/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/pokemon-horizons-the-series-episode-11-e40749" title="Pokémon Horizons: The Series Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx158871-FmWU8dacXDiA.jpg" />
                                        <div class="timetext">
                                            1 day ago
                                        </div>
                                        <div class="rating">7.8</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/pokemon-horizons-the-series-episode-11-e40749" title="Pokémon Horizons: The Series Episode 11">Pokémon Horizons: The Series</a></span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/doraemon-episode-52-e40784" title="Doraemon Episode 52">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/nx2471-EGZIEn6YT6kn.jpg" />
                                        <div class="timetext">
                                            1 day ago
                                        </div>
                                        <div class="rating">7.4</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/doraemon-episode-52-e40784" title="Doraemon Episode 52">Doraemon</a></span>
                                    <span class="infotext">EP 52/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/the-cafe-terrace-and-its-goddesses-episode-11-e40740" title="The Café Terrace and Its Goddesses Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx154412-bEMQkJWOStDR.jpg" />
                                        <div class="timetext">
                                            1 day ago
                                        </div>
                                        <div class="rating">8.3</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name">
                                        <a href="<?=$config['domain']?>/watch/the-cafe-terrace-and-its-goddesses-episode-11-e40740" title="The Café Terrace and Its Goddesses Episode 11">The Café Terrace and Its Goddesses</a>
                                    </span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/otaku-elf-episode-11-e40730" title="Otaku Elf Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx150957-VFsWSLJgW9Bu.jpg" />
                                        <div class="timetext">
                                            1 day ago
                                        </div>
                                        <div class="rating">6.0</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/otaku-elf-episode-11-e40730" title="Otaku Elf Episode 11">Otaku Elf</a></span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/rokudos-bad-girls-episode-11-e40741" title="Rokudo&#039;s Bad Girls Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx160442-NI2ajJ0F0gbp.jpg" />
                                        <div class="timetext">
                                            1 day ago
                                        </div>
                                        <div class="rating">6.0</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/rokudos-bad-girls-episode-11-e40741" title="Rokudo&#039;s Bad Girls Episode 11">Rokudo&#039;s Bad Girls</a></span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/tonikawa-over-the-moon-for-you-season-2-episode-11-e40729" title="TONIKAWA: Over The Moon For You Season 2 Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx141208-On0qHKxo6P5t.png" />
                                        <div class="timetext">
                                            1 day ago
                                        </div>
                                        <div class="rating">7.6</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name">
                                        <a href="<?=$config['domain']?>/watch/tonikawa-over-the-moon-for-you-season-2-episode-11-e40729" title="TONIKAWA: Over The Moon For You Season 2 Episode 11">
                                            TONIKAWA: Over The Moon For You Season 2
                                        </a>
                                    </span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/mashle-magic-and-muscles-episode-10-e40723" title="MASHLE: MAGIC AND MUSCLES Episode 10">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx151801-wYg28dEaJAw3.png" />
                                        <div class="timetext">
                                            1 day ago
                                        </div>
                                        <div class="rating">8.5</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/mashle-magic-and-muscles-episode-10-e40723" title="MASHLE: MAGIC AND MUSCLES Episode 10">MASHLE: MAGIC AND MUSCLES</a></span>
                                    <span class="infotext">EP 10/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/too-cute-crisis-episode-11-e40742" title="TOO CUTE CRISIS Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx155070-OtFDdBlXX4zI.jpg" />
                                        <div class="timetext">
                                            1 day ago
                                        </div>
                                        <div class="rating">8.0</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/too-cute-crisis-episode-11-e40742" title="TOO CUTE CRISIS Episode 11">TOO CUTE CRISIS</a></span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/my-one-hit-kill-sister-episode-11-e40695" title="My One-Hit Kill Sister Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx146234-vSYvPfLwjYXX.jpg" />
                                        <div class="timetext">
                                            1 day ago
                                        </div>
                                        <div class="rating">7.6</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/my-one-hit-kill-sister-episode-11-e40695" title="My One-Hit Kill Sister Episode 11">My One-Hit Kill Sister</a></span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/ni-tian-zhizun-episode-206-e40703" title="Ni Tian Zhizun Episode 206">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx136862-s2HpY8Lg8qTS.jpg" />
                                        <div class="timetext">
                                            2 days ago
                                        </div>
                                        <div class="rating">6.2</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/ni-tian-zhizun-episode-206-e40703" title="Ni Tian Zhizun Episode 206">Ni Tian Zhizun</a></span>
                                    <span class="infotext">EP 206/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/wu-shang-shen-di-2-episode-219-e40782" title="Wu Shang Shen Di 2 Episode 219">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx134107-oJ9eQNwxM5fg.jpg" />
                                        <div class="timetext">
                                            2 days ago
                                        </div>
                                        <div class="rating">6.3</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/wu-shang-shen-di-2-episode-219-e40782" title="Wu Shang Shen Di 2 Episode 219">Wu Shang Shen Di 2</a></span>
                                    <span class="infotext">EP 219/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/bai-lian-cheng-shen-episode-34-e40664" title="Bai Lian Cheng Shen Episode 34">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx150950-h1BekOOJ0YK0.png" />
                                        <div class="timetext">
                                            2 days ago
                                        </div>
                                        <div class="rating">9.5</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/bai-lian-cheng-shen-episode-34-e40664" title="Bai Lian Cheng Shen Episode 34">Bai Lian Cheng Shen</a></span>
                                    <span class="infotext">EP 34/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/xyrin-empire-episode-11-e40666" title="Xyrin Empire Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx141865-otFygxZNbmHI.png" />
                                        <div class="timetext">
                                            2 days ago
                                        </div>
                                        <div class="rating">10.0</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/xyrin-empire-episode-11-e40666" title="Xyrin Empire Episode 11">Xyrin Empire</a></span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/the-legendary-hero-is-dead-episode-11-e40637" title="The Legendary Hero is Dead! Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx148109-cwAINDGwAHB2.jpg" />
                                        <div class="timetext">
                                            2 days ago
                                        </div>
                                        <div class="rating">5.3</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/the-legendary-hero-is-dead-episode-11-e40637" title="The Legendary Hero is Dead! Episode 11">The Legendary Hero is Dead!</a></span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/the-ancient-magus-bride-season-2-episode-11-e40644" title="The Ancient Magus’ Bride Season 2 Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx154364-ZFPtr9F1sW60.png" />
                                        <div class="timetext">
                                            2 days ago
                                        </div>
                                        <div class="rating">7.0</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name">
                                        <a href="<?=$config['domain']?>/watch/the-ancient-magus-bride-season-2-episode-11-e40644" title="The Ancient Magus’ Bride Season 2 Episode 11">The Ancient Magus’ Bride Season 2</a>
                                    </span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/dr-stone-new-world-episode-11-e40629" title="Dr. STONE New World Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx131518-RU7RoUmGb2sP.jpg" />
                                        <div class="timetext">
                                            2 days ago
                                        </div>
                                        <div class="rating">8.6</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/dr-stone-new-world-episode-11-e40629" title="Dr. STONE New World Episode 11">Dr. STONE New World</a></span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/yuri-is-my-job-episode-11-e40638" title="Yuri Is My Job! Episode 11">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx149028-RrE2FX1FGIMv.png" />
                                        <div class="timetext">
                                            2 days ago
                                        </div>
                                        <div class="rating">7.0</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/yuri-is-my-job-episode-11-e40638" title="Yuri Is My Job! Episode 11">Yuri Is My Job!</a></span>
                                    <span class="infotext">EP 11/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/the-idolm-at-ster-cinderella-girls-u149-episode-10-e40869" title="THE IDOLM@STER CINDERELLA GIRLS U149 Episode 10">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx146975-CUs3i5aU8KsU.png" />
                                        <div class="timetext">
                                            3 days ago
                                        </div>
                                        <div class="rating">6.5</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name">
                                        <a href="<?=$config['domain']?>/watch/the-idolm-at-ster-cinderella-girls-u149-episode-10-e40869" title="THE IDOLM@STER CINDERELLA GIRLS U149 Episode 10">
                                            THE <span class="__cf_email__" data-cfemail="aae3eee5e6e7eaf9feeff8">[email&#160;protected]</span> CINDERELLA GIRLS U149
                                        </a>
                                    </span>
                                    <span class="infotext">EP 10/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/jian-yu-chuanqi-2-episode-45-e40618" title="Jian Yu Chuanqi 2 Episode 45">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx147133-IzW6Tm6FvTtQ.png" />
                                        <div class="timetext">
                                            3 days ago
                                        </div>
                                        <div class="rating">9.5</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/jian-yu-chuanqi-2-episode-45-e40618" title="Jian Yu Chuanqi 2 Episode 45">Jian Yu Chuanqi 2</a></span>
                                    <span class="infotext">EP 45/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/biaoren-episode-3-e40863" title="Biaoren Episode 3">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx122508-yLRQuo5FskpL.png" />
                                        <div class="timetext">
                                            3 days ago
                                        </div>
                                        <div class="rating">9.5</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name"><a href="<?=$config['domain']?>/watch/biaoren-episode-3-e40863" title="Biaoren Episode 3">Biaoren</a></span>
                                    <span class="infotext">EP 3/??</span>
                                </div>
                            </li>
                            <li>
                                <a href="<?=$config['domain']?>/watch/kamikatsu-working-for-god-in-a-godless-world-episode-10-e40537" title="KamiKatsu: Working for God in a Godless World Episode 10">
                                    <div class="searchimg">
                                        <img class="resultimg" alt="" src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx148048-IaEk51Wtu07L.jpg" />
                                        <div class="timetext">
                                            3 days ago
                                        </div>
                                        <div class="rating">6.2</div>
                                    </div>
                                </a>
                                <div class="details">
                                    <span class="name">
                                        <a href="<?=$config['domain']?>/watch/kamikatsu-working-for-god-in-a-godless-world-episode-10-e40537" title="KamiKatsu: Working for God in a Godless World Episode 10">
                                            KamiKatsu: Working for God in a Godless World
                                        </a>
                                    </span>
                                    <span class="infotext">EP 10/??</span>
                                </div>
                            </li>
                        </ul>
                        <div id="bottommsg">
                            <div id="loadmorelist" onclick="loadmorenewep();">
                                <i class="glyphicon glyphicon-menu-down"></i>
                                Load more
                            </div>
                        </div>
                    </div>
                    <div id="loadingtext">
                        <svg class="spinner" width="75px" height="75px" viewbox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                            <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
                        </svg>
                        <br />
                        <br />
                        Loading...
                    </div>
                    <div id="resultAlt">
                        <div id="loadmoresearch">Loading...</div>
                    </div>
                    <br />
                </div>
                <div class="rightside" id="rightsidee">
                    <div class="rightcard">
                        <div class="subtitleright"><h2><?=$config['title']?> Genres</h2></div>
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
                    </div>

                    <div class="rightcard" style="margin-bottom: 10px;">
                        <div class="subtitleright"><h2><?=$config['title']?> Weekly Top</h2></div>
                        <div id="ongoingplace" style="height: unset"> <a href="<?=$config['domain']?>/anime/one-piece-f9"><li class="topanimeli topanimea"> <img src="https://zanimee.github.io/anime/posters/1/2022/09/thumbs/one-piece-english-subbed-dubbed.jpg" class="topanimeimg"> <div>
                            <div class="topanimenumber">#1</div> <span class="topanimename">ONE PIECE</span> <div class="topanimestats">
                                <div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.6 </div>
                                <div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 19681 </div>
                            </div>
                        </div>
                    </li></a> <a href="<?=$config['domain']?>/anime/demon-slayer-kimetsu-no-yaiba-swordsmith-village-arc-f4022"><li class="topanimeli topanimea"> <img src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx145139-rRimpHGWLhym.png" class="topanimeimg"> <div>
                            <div class="topanimenumber">#2</div> <span class="topanimename">Demon Slayer: Kimetsu no Yaiba Swordsmith Village Arc</span> <div class="topanimestats">
                                <div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.7 </div>
                                <div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 11470 </div>
                            </div>
                        </div>
                    </li></a> <a href="<?=$config['domain']?>/anime/black-clover-f139"><li class="topanimeli topanimea"> <img src="https://animeza.github.io/animee/posters/060223/1/2023/01/thumbs/black-clover-1675089878.jpg" class="topanimeimg"> <div>
                            <div class="topanimenumber">#3</div> <span class="topanimename">Black Clover</span> <div class="topanimestats">
                                <div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.6 </div>
                                <div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 4633 </div>
                            </div>
                        </div>
                    </li></a> <a href="<?=$config['domain']?>/anime/oshi-no-ko-f4100"><li class="topanimeli topanimea"> <img src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx150672-2WWJVXIAOG11.png" class="topanimeimg"> <div>
                            <div class="topanimenumber">#4</div> <span class="topanimename">Oshi No Ko</span> <div class="topanimestats">
                                <div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 9.0 </div>
                                <div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 4269 </div>
                            </div>
                        </div>
                    </li></a> <a href="<?=$config['domain']?>/anime/i-got-a-cheat-skill-in-another-world-and-became-unrivaled-in-the-real-world-too-f3815"><li class="topanimeli topanimea"> <img src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx153845-C47aoKy7wf19.jpg" class="topanimeimg"> <div>
                            <div class="topanimenumber">#5</div> <span class="topanimename">I Got a Cheat Skill in Another World and Became Unrivaled in The Real World, Too</span> <div class="topanimestats">
                                <div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.0 </div>
                                <div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 4110 </div>
                            </div>
                        </div>
                    </li></a> <a href="<?=$config['domain']?>/anime/hells-paradise-f3744"><li class="topanimeli topanimea"> <img src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx128893-l0R0GFHplDKW.jpg" class="topanimeimg"> <div>
                            <div class="topanimenumber">#6</div> <span class="topanimename">Hell’s Paradise</span> <div class="topanimestats">
                                <div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.7 </div>
                                <div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 3677 </div>
                            </div>
                        </div>
                    </li></a> <a href="<?=$config['domain']?>/anime/mashle-magic-and-muscles-f3949"><li class="topanimeli topanimea"> <img src="https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/bx151801-wYg28dEaJAw3.png" class="topanimeimg"> <div>
                            <div class="topanimenumber">#7</div> <span class="topanimename">MASHLE: MAGIC AND MUSCLES</span> <div class="topanimestats">
                                <div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.5 </div>
                                <div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 3617 </div>
                            </div>
                        </div>
                    </li></a> <a href="<?=$config['domain']?>/anime/bleach-f141"><li class="topanimeli topanimea"> <img src="https://animeza.github.io/animee/posters/060223/1/2023/01/thumbs/bleach-1675092621.jpg" class="topanimeimg"> <div>
                            <div class="topanimenumber">#8</div> <span class="topanimename">Bleach</span> <div class="topanimestats">
                                <div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.8 </div>
                                <div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 2866 </div>
                            </div>
                        </div>
                    </li></a> <a href="<?=$config['domain']?>/anime/naruto-shippuden-f140"><li class="topanimeli topanimea"> <img src="https://animeza.github.io/animee/posters/060223/1/2023/01/thumbs/naruto-shippuden-1675090839.jpg" class="topanimeimg"> <div>
                            <div class="topanimenumber">#9</div> <span class="topanimename">Naruto: Shippuden</span> <div class="topanimestats">
                                <div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.6 </div>
                                <div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 2862 </div>
                            </div>
                        </div>
                    </li></a> <a href="<?=$config['domain']?>/anime/naruto-f159"><li class="topanimeli topanimea"> <img src="https://animeza.github.io/animee/posters/060223/1/2023/02/thumbs/naruto-1675283285.jpg" class="topanimeimg"> <div>
                            <div class="topanimenumber">#10</div> <span class="topanimename">Naruto</span> <div class="topanimestats">
                                <div class="topanimerating"> <i class="glyphicon glyphicon-star"></i> 8.6 </div>
                                <div class="topanimeuser"> <i class="glyphicon glyphicon-stats"></i> 2772 </div>
                            </div>
                        </div>
                    </li></a> </div> <button type="button" id="expandbtn2" onclick="expandweekly()" class="btn btn-secondary btn-sm btn-lg btn-block"> <i class="glyphicon glyphicon-menu-down"></i> </button> </div>

                    </div>
                </div>
            </div>
            <div id="topmid"></div>
        </div>

        <div id="playerleftsidebar" class="schedulemenucontainer">
            <button id="recomendedclosebtn" style="margin-left: 10px;" onclick="showschedulemenu()">
                <i class="glyphicon glyphicon-arrow-left"></i>
            </button>
            <div id="seasontitle"></div>
            <div id="scheduletimezone"></div>
            <div id="recomendedlist" style="padding-top: unset;"></div>
            <div id="schedulenotice">Release time is estimated</div>
        </div>

        <footer>
            <div class="leftbottom">
                <span id="donatelabel">RSS</span><a class="customicon rssicon" href="#"></a>
                <div class="floatright">
                    <div class="togglelabel">Chat</div>
                    <label class="switch">
                        <input type="checkbox" id="enablechat" />
                        <span class="slider round"></span>
                    </label>
                    <a class="js-link" data-href="/info" href="#" style="font-size: 17px; margin-left: 4px;"><i class="glyphicon glyphicon-info-sign"></i></a><br />
                </div>
            </div>
            <div class="footer">
                <span class="bottomtext" data-wam="51thyb5tv9">
                    Watch HD Anime for Free ©2023 <?=$config['title']?>
                </span>
                Disclaimer: This site does not store any files on its server. All contents are provided by non-affiliated third parties.
            </div>
            <div id="notifiaction"></div>
            <div id="lastwatch">
                <i onclick="lastwatchclose();" id="lastwatchclosebtn" class="glyphicon glyphicon-remove"></i>
                Continue watching :<br />
                <a id="lastwatchlink">
                    <div id="lastwatchtitle"></div>
                    <div id="lastwatchurl"></div>
                </a>
            </div>
        </footer>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script type="text/javascript" src="/themes/zanimix/assets/main.js?zv=1.0.6" defer></script>

        <script type="text/javascript">
            var nowtime = "2023-06-18 11:48:32";
            var envYear = 2023;
            var envSeason = "Winter";
            var curFeatured = 4;
        </script>
        <script>
            function zsearchE1() {
                var e = $("#q").val();
                // alert(e);
                if (e.length < 3) {
                    shownotif("Keyword too short!");
                    // alert('short');
                } else {
                    window.location.href = `/zsearch?keyword=${e}`;
                }
                event.preventDefault();
            }

            $(".js-link").click(function () {
                let url = $(this).data("href");
                window.location.href = url;
            });
        </script>
        <script src="/themes/animix/js/app2.js"></script>
        <script>
            $(".bottomtext").append(atob("PGltZyBhbHQ9IkFuaW1lIE9ubGluZSIgc3JjPSJodHRwczovL3dob3MuYW11bmcudXMvd2lkZ2V0LyR7d2FtfS5wbmciIGNsYXNzPSJoaWRkZW4iPg==").replace("${wam}", $(".bottomtext").data("wam")));
        </script>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-HXVMLG9EPN"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "G-HXVMLG9EPN");
        </script>
        <script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-63b541a546ff41e7"></script>
    </body>
</html>
