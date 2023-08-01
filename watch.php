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
        <header class="toppart">
            <div id="playertopmenu" class="floattopsearch">
                <a id="backicon" onclick="window.history.back()"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a id="homeicon" href="<?=$config['domain']?>/"><i class="glyphicon glyphicon-home"></i></a>
                <div id="searchbox">
                    <input type="text" style="display: none;" />
                    <input type="password" style="display: none;" />
                    <a href="<?=$config['domain']?>"><img class="webtitle" alt="<?=$config['title']?>" src="/assets/logo.png" /></a>
                    <input class="form-control searchbar" pattern=".{3,}" placeholder="Search" id="q" type="search" autocomplete="off" onfocus="searchfocused()" onblur="searchblur()" />
                    <button id="searchbutton" onclick="dosearchfromplayer()"><i class="glyphicon glyphicon-search"></i></button>
                    <a class="topmenubtn js-link" title="Random anime" data-href="/random"><i class="glyphicon glyphicon-random"></i>Random</a>

                    <a class="topmenubtn js-link" title="A-Z List" data-href="/list">A-Z List</a>
                </div>
                <span id="usernametop"></span>
                <button id="showsearchbtn" onclick="togglesearch()"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </header>
        <div class="quicksearchcontainer">
            <div class="resultcontainer">
                <div id="fullresultbtn">
                    <a onclick="searchE1()">Main</a>

                    <a onclick="zsearchE1(event)" href="/zsearch">Other</a>
                </div>
                <ul class="quickresult"></ul>
            </div>
        </div>
        <div id="tips"></div>
        <div id="topmid"></div>
        <div class="playersidebar"></div>
        <div id="playerleftsidebar"></div>
        <article class="content">
            <div class="playerpage" style="background-color: rgb(35, 35, 35);">
                <div id="iframecontainer">
                    <div id="video-player">
                        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                            <iframe
                                scrolling="no"
                                style="width: 100%; height: 100%; position: absolute; left: 0px; top: 0px; overflow: hidden;"
                                frameborder="0"
                                type="text/html"
                                src="https://theorder.cyou/p/13252-2"
                                width="100%"
                                height="100%"
                                allowfullscreen
                                allow="autoplay fullscreen"
                            >
                            </iframe>
                        </div>
                    </div>
                </div>
                <select id="srcselect" onchange="srcChange()" style="display: none;"></select>
                <div id="lowerplayerpage">
                    <div id="aligncenter">
                        <div id="streamtypecontainer">
                            <div id="item-info" style="display: inline-block;">
                                <a href="<?=$config['domain']?>/anime/my-love-story-with-yamada-kun-at-lv999-f3748"><i class="glyphicon glyphicon-list"></i> <span id="changetext">Info</span></a>
                            </div>
                            <div id="prev-ep" style="display: inline-block;"><i class="glyphicon glyphicon-chevron-left"></i> <span id="changetext">Prev</span></div>
                            <div id="next-ep" style="display: inline-block;"><span id="changetext">Next</span> <i class="glyphicon glyphicon-chevron-right"></i></div>
                            <div id="sharebtn"><i class="glyphicon glyphicon-share-alt"></i> <span id="shareText" style="display: inline;">Share</span></div>
                            <div id="openreport" onclick="reportError()" style="display: block;"><i class="glyphicon glyphicon-exclamation-sign"></i> <span id="btn-report" class="reportText">Report</span></div>

                            <div id="widescreenbtn">
                                <span id="btn-download" data-href="<?=$config['domain']?>/download/40777-my-love-story-with-yamada-kun-at-lv999-episode-12">
                                    <i class="glyphicon glyphicon-download-alt"></i> <span class="downloadText">Download</span>
                                </span>
                            </div>
                        </div>
                        <h1 class="animetitle">My Love Story with Yamada-kun at Lv999 Episode 12 Eng Sub</h1>
                        <button id="trackbtn" onclick="startTrack();"><i class="glyphicon glyphicon-plus"></i> Watchlist</button> <button id="followbtn" onclick="followtoggle();"><i class="glyphicon glyphicon-bell"></i> Follow</button>
                        <br />
                        <div id="animeimage"></div>
                    </div>
                    <aside class="list-ep" id="list-ep-1">
                        <div id="list_sv" class="ah-bg-bd ah-pd py-2 row content-section">
                            <div class="col-md-4 col-sm-12 text-center align-middle if-server content-section-col">
                                <span class="align-middle">If current server doesn't work, please try other servers:</span>
                            </div>
                            <div class="col-md-8 col-sm-12 text-left content-section-col sv_container">
                            <div class="player-servers">
                                <div id="servers-content"><div class="ps_-status">
    <div class="content">
        <div class="server-notice">
            
                <strong>You are watching <b>Episode 1</b></strong>
            
            If current server doesn't work please try other servers beside.
        </div>
    </div>
</div>

    <div class="ps_-block ps_-block-sub servers-sub">
        
            <div class="ps__-title"><i class="fas fa-closed-captioning mr-2"></i>SUB:</div>
        
        
        
        
        <div class="ps__-list">
            
                <div class="item server-item" data-type="sub" data-id="1033193" data-server-id="4">
                    <a href="javascript:;" class="btn active">Vidstreaming</a>
                </div>
            
                <div class="item server-item" data-type="sub" data-id="1033187" data-server-id="1">
                    <a href="javascript:;" class="btn">Vidcloud</a>
                </div>
            
        </div>
        <div class="clearfix"></div>
        
    </div>

    <div class="ps_-block ps_-block-sub servers-dub">
        
        
            <div class="ps__-title"><i class="fas fa-microphone-alt mr-2"></i>DUB:</div>
        
        
        
        <div class="ps__-list">
            
                <div class="item server-item" data-type="dub" data-id="1033194" data-server-id="4">
                    <a href="javascript:;" class="btn">Vidstreaming</a>
                </div>
            
                <div class="item server-item" data-type="dub" data-id="1033188" data-server-id="1">
                    <a href="javascript:;" class="btn">Vidcloud</a>
                </div>
            
        </div>
        <div class="clearfix"></div>
        
    </div>

</div>
                            </div>
                            </div>
                        </div>
                        <div id="epslistplace2" class="list-episode" style="display: grid;"></div>
                    </aside>

                    <aside id="flexbottom" style="display: flex;">
                        <div id="bottomleft">
                            <span id="genres">
                                Genres : <a href="#">Comedy</a>
                                <a href="#">Drama</a>
                                <a href="#">Romance</a>
                            </span>
                            <br />
                            <span id="status">Status : Ongoing</span>
                          
                            <br />
                        </div>
                        <div class="epsavailable">
                            Ep total : <span id="epsavailable"></span> <a onclick="updatecheck()" id="updatebtn"><i class="glyphicon glyphicon-refresh"></i></a>
                            <div id="playercountdown"></div>
                        </div>
                    </aside>
                </div>
            </div>
            <div id="flexstreambottom">
                <div style="flex: 1;">
                    <div id="disquscommentnew" style="display: block;">
                        <aside class="share-area">
                            <div class="adsterra">
                                <iframe
                                    scrolling="no"
                                    class="gh-fit gh-fullwidth"
                                    id="adsterra"
                                    src="/native/sterra/<?=$config['title']?>er-top.html"
                                    style="width: 100%; border: 0px; padding: 0; overflow: hidden; background-color: transparent;"
                                ></iframe>
                            </div>
                            <br />
                            If you want <?=$config['title']?> alive and grow, Please support the site by share My Love Story with Yamada-kun at Lv999 Episode 12:
                            <div class="addthis_inline_share_toolbox" style="margin-top: 6px;"></div>
                        </aside>

                        <div id="disqus_thread">
                            <div class="spacer" data-height="50"></div>

                            <!-- section header -->
                            <!-- <div class="section-header">
						<h3 class="section-title">Comments (3)</h3>
						<img src="/themes/anime/images/wave.svg" class="wave" alt="Anime">
					</div> -->

                            <!-- section header -->
                            <div class="section-header">
                                <h3 class="section-title"><?=$config['title']?> Comments (0)</h3>
                                <!-- <img src="/themes/anime/images/wave.svg" class="wave" alt="Anime"> -->
                            </div>
                            <!-- <div class="spacer" data-height="50"></div> -->
                            <!-- post comments -->
                            <div class="comments bordered padding-16 rounded pl-sm-2" id="comments">
                                <ul class="comments">
                                    <!-- comment item -->
                                    <li class="comment rounded hidden" id="comment-form">
                                        <div class="thumb"></div>
                                        <div class="details">
                                            <form action="<?=$config['domain']?>/comments/create" method="POST" class="comment-form text-right" id="main-form">
                                                <div class="span6"><textarea name="content" id="emojis" class="form-control comment-textarea" required rows="2" placeholder="Type your comment here"></textarea></div>

                                                <div class="btn-area mt-2 text-right">
                                                    <input type="hidden" value="" name="comment_parent_id" />
                                                    <input type="hidden" value="40777" name="sub_parent_id" id="sub_parent_id" />
                                                    <input type="hidden" value="3748" name="parent_id" id="parent_id" />
                                                    <input type="hidden" name="_token" value="gcHqMu8NZI6Eb9nJtZGPhWAyI6gvI8qHL0gzDY0H" /> <button type="submit" class="btn btn-sm btn-primary">Post Comment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="comment rounded login-to-comment">
                                        <div class="details">
                                            <div class="btn-area text-center">
                                                <a
                                                    class="btn btn-sm btn-secondary login-link js-link"
                                                    id="auth_link3"
                                                    data-href="/login?ref=<?=$config['domain']?>/watch/my-love-story-with-yamada-kun-at-lv999-episode-12-e40777"
                                                    href="javascript:void(0)"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#loginModal"
                                                >
                                                    Login to comment & Autotracking watchlist
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- comment item -->
                                </ul>
                            </div>

                            <div class="spacer" data-height="50"></div>
                        </div>
                    </div>
                </div>
                <div id="streambottomright"></div>
            </div>
        </article>

       
        <footer>
            
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <script src="/themes/zanimix/assets/common.min.js?zv=1.0.6"></script>
        <script src="/themes/animix/js/app.js?zv=1.0.6"></script>
        <!-- stats -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="/themes/animix/js/sub-item.js?zv=1.0.6"></script>

        <script src="/ajax/stats.js?item=3748&sub_item=40777&sv=166570&eid=clfrusvdk0014jslu0n3fh7ki&slug=my-love-story-with-yamada-kun-at-lv999&v=2911687089031"></script>

        <script type="text/javascript">
            function fit() {
                var iframes = document.querySelectorAll("iframe.gh-fit");

                for (var id = 0; id < iframes.length; id++) {
                    var win = iframes[id].contentWindow;
                    var doc = win.document;
                    var html = doc.documentElement;
                    var body = doc.body;
                    var ifrm = iframes[id]; // or win.frameElement

                    if (body) {
                        body.style.overflowX = "scroll"; // scrollbar-jitter fix
                        body.style.overflowY = "hidden";
                    }
                    if (html) {
                        html.style.overflowX = "scroll"; // scrollbar-jitter fix
                        html.style.overflowY = "hidden";
                        var style = win.getComputedStyle(html);
                        ifrm.width = parseInt(style.getPropertyValue("width")); // round value
                        ifrm.height = parseInt(style.getPropertyValue("height"));
                    }
                }

                requestAnimationFrame(fit);
            }

            addEventListener("load", requestAnimationFrame.bind(this, fit));
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
    </body>
</html>
