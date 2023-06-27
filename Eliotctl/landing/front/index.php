
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eliot Courtel</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Eliot Courtel, Tech Innovations" />
  <meta name="keywords" content="eliot courtel, developper, freelance, kubernetes, elasticsearch, python, bigdata, dialogflow, docker, devops, sigfox, wellcheck, nodejs, vuejs" />
  <link rel="icon" href="assets/img/logo.webp" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body style="opacity: 0">
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["emailinput"])) {
    $message = "Email: " . $_POST["emailinput"];
    $message .= "Project type(s):";
    $message .= (isset($_POST["opt-1"]) ? $_POST["opt-1"] : "") . (isset($_POST["opt-2"]) ? $_POST["opt-2"] : "") . (isset($_POST["opt-3"]) ? $_POST["opt-3"] : "");
    $file = '/contact.txt';
    $handle = fopen($file, 'a');
    fwrite($handle, $message . PHP_EOL);
    fclose($handle);
    unset($_POST);
}
?>
  <!-- notification for small viewports and landscape oriented smartphones -->
  <div class="device-notification">
    <a class="device-notification--logo" href="/" style="width: 100%">
      <div style="margin: auto">
        <p>eliot.courtel.tech</p>
        <img src="assets/img/logo.webp" style="width: 68px;z-index: -1;position: relative;left: 62px;top: -46px;" alt="logo" />
      </div>
    </a>
    <p class="device-notification--message" style="width: 100%">
      Looks like your unable to load this website on this device
    </p>
  </div>
  <div class="perspective effect-rotate-left">
    <div class="containerp">
      <div class="outer-nav--return"></div>
      <div id="viewport" class="l-viewport">
        <div class="l-wrapper">
          <header class="header">
            <a class="header--logo" href="/">
            <p>eliot.courtel.tech</p>
              <img src="assets/img/logo.webp" style="width: 69px;position: absolute;z-index: -1;left: 50px;" alt="logo" />
            </a>
            <button class="header--cta cta">Contact</button>
            <div class="header--nav-toggle"><span></span></div>
          </header>
          <nav class="l-side-nav">
            <ul class="side-nav">
              <li class="is-active"><span>Home</span></li>
              <li><span>Why</span></li>
              <li><span>Projects</span></li>
              <li><span>Contact</span></li>
            </ul>
          </nav>
          <ul class="l-main-content main-content">
            <li class="l-section section" id="home">
              <div class="intro">
                <div class="intro--banner">
                  <h1>
                    Innovative <br />
                    devops <br />
                    work
                  </h1>
                  <button class="cta">
                    Contact
                    <svg version="1.1" id="Layer_1" x="0px" y="0px" viewbox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                      <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                        <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"></path>
                      </g>
                    </svg>
                    <div class="btn-background"></div>
                  </button>
                  <img src="assets/img/home.svg" alt="Welcome" />
                </div>
<!--
                <div class="intro--options">
                  <a href="#projects" onclick="scrollTozone('#projects')">
                    <h3></h3>
                    <p>
                      Front & Backend,<br/>
                      Creating custom solution
                    </p>
                  </a>
                  <a href="#projects" onclick="scrollTozone('#projects')">
                    <h3>Micro services</h3>
                    <p>Creating containerisable solutions allowing scalability and continuous integration</p></a> <a href="#projects" onclick="scrollTozone('#projects')">
                    <h3>New technologies</h3>
                    <p>Chat bot, Data Science<br/>
                    Amplify your customer experience</p>
                  </a>
                </div>
-->
              </div>
            </li>
            <li class="l-section section" id="why">
              <div class="about">
                <div class="about--banner">
                  <h2>
                    New<br/>
                    Technologies<br/>
                    based on<br/>
                    your needs
                  </h2>
                  <img src="assets/img/about-visual.webp" alt="About Us" />
                </div>
                <div class="about--text"></div>
              </div>
            </li>
            <li class="l-section section" id="projects">
              <div class="work">
                <h2>Selected work</h2>
                <div class="work--lockup">
                  <ul class="slider">
                    <li class="slider--item slider--item-center">
                      <a href="/wellcheck/">
                      <div class="slider--item-image"><img src="assets/img/logo_v2.webp" alt="Wellcheck" /></div>
                      <p class="slider--item-title">Wellcheck</p>
                      <p class="slider--item-description">Wellcheck is a water quality analyser using 0G's IoT Network<br /><br />2019-2020<br /><b style="color: red">Discontinued</b> - open source</p></a>
                    </li>
                    <li class="slider--item slider--item-right">
                      <a href="/newtechstack/">
                      <div class="slider--item-image"><img src="assets/img/nts_logo.webp" alt="Newtechstack logo" /></div>
                      <p class="slider--item-title">Newtechstack</p>
                      <p class="slider--item-description">We provide custom web solutions, support and IT professional training<br /><br />2020-2023<br /><b style="color: red">Discontinued</b></p></a>
                    </li>
                  </ul>
                  <div class="slider--prev">
                    <svg version="1.1" id="Layer_2" x="0px" y="0px" viewbox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29 c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180 c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z"></path>
                    </g></svg>
                  </div>
                  <div class="slider--next">
                    <svg version="1.1" id="Layer_3" x="0px" y="0px" viewbox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"></path>
                    </g></svg>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-section section" id="contact">
              <div class="hire">
                <h2>Business <span style="color:#0f33ff">contact</span> only</h2>
                  <form class="work-request" id="not_sent" method="post" action="#contact" name="not_sent">
                    <div class="work-request--options">
                      <span class="options-a">
                        <input id="emailinput" name="emailinput" type="text" oninput="update_mail()" placeholder="Your email" style="display: block; width: 300px; margin-bottom: 30px; line-height: 50px; font-size: 16px; font-weight: 700; text-align: center; background-color: transparent;border: 2px solid #fff; cursor: pointer;outline: none; margin-left: calc(50% - 150px)" />
                      </span>
                      <span class="options-b">
                        <input id="opt-1" type="checkbox" name="opt-1" value="opt-1" onchange="update_mail()" />
                        <label for="opt-1">
                          <svg version="1.1" id="Layer_4" x="0px" y="0px" viewbox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                            <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                              <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"></path>
                            </g>
                          </svg>
                          Consulting
                        </label>
                        <input id="opt-2" type="checkbox" name="opt-2" value="opt-2" onchange="update_mail()" />
                        <label for="opt-2"><svg version="1.1" id="Layer_5" x="0px" y="0px" viewbox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"></path>
                      </g></svg>Coding</label> <input id="opt-3" type="checkbox" name="opt-3" value="opt-3" onchange="update_mail()" /> <label for="opt-3"><svg version="1.1" id="Layer_6" x="0px" y="0px" viewbox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"></path>
                      </g></svg>Teaching</label></span>
                    </div>
                    <button id="contact_button" type="submit"disabled>Send a work request</button>
                  </form>
                  <!--
                    <div style="margin-top: 20px; text-align:center; color: white">
                      For any other request see:<a style="margin-left: 5px; color: white" href="https://newtechstack.fr">NewTechStack.fr</a>
                    </div>
                  -->
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <ul class="outer-nav">
      <li class="is-active">Home</li>
      <li>Why</li>
      <li>Projects</li>
      <li>Contact</li>
    </ul>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/functions.min.js"></script>
  <script src="assets/js/particles.min.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>
