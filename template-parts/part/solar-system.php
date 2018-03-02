<?php if (get_theme_mod('show_solar_system', true)): ?>
<style>
@keyframes clockwise {
  0% {
    transform: rotate(0deg); }
  100% {
    transform: rotate(360deg); } }
@keyframes counter-clockwise {
  0% {
    transform: rotate(360deg); }
  100% {
    transform: rotate(0deg); } }
@media screen and (min-width: 300px) {
  .solar-system {
    margin: 32px auto; }
  @media screen and (max-width: 600px) {
    .solar-system {
      width: 200px;
      height: 200px;
      position: relative;
      display: none; }
      .solar-system#local {
        display: block; }
      .solar-system .orbit {
        float: left;
        position: absolute;
        border-radius: 50%;
        box-shadow: inset 0 0 8px #666666; }
        .solar-system .orbit#earth {
          width: 0;
          height: 0;
          top: 100px;
          left: 100px; }
        .solar-system .orbit#moon {
          width: 200px;
          height: 200px;
          top: -100px;
          left: -100px; }
        .solar-system .orbit .body {
          width: 100%;
          height: 0;
          position: absolute;
          background-color: rgba(0, 255, 0, 0.2);
          animation-timing-function: linear;
          animation-iteration-count: infinite; }
          .solar-system .orbit .body::after {
            content: '';
            display: block;
            position: absolute;
            border-radius: 50%; }
          .solar-system .orbit .body#earth {
            top: 0;
            animation: none; }
            .solar-system .orbit .body#earth:after {
              background: url("wp-content/themes/astrobotany-theme/assets/earth.png");
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
              border-radius: 50%;
              width: 64px;
              height: 64px;
              top: -32px;
              left: -32px;
              animation-name: counter-clockwise;
              animation-timing-function: linear;
              animation-iteration-count: infinite; }
          .solar-system .orbit .body#moon {
            top: 100px;
            animation-duration: 15s;
            animation-name: counter-clockwise; }
            .solar-system .orbit .body#moon:after {
              background: url("wp-content/themes/astrobotany-theme/assets/moon.png");
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
              border-radius: 50%;
              width: 24px;
              height: 24px;
              top: -12px;
              left: -12px;
              animation-name: counter-clockwise;
              animation-timing-function: linear;
              animation-iteration-count: infinite; } }
  @media screen and (min-width: 601px) {
    .solar-system {
      width: 540px;
      height: 540px;
      position: relative;
      display: none; }
      .solar-system#whole {
        display: block; }
      .solar-system .orbit {
        float: left;
        position: absolute;
        border-radius: 50%;
        box-shadow: inset 0 0 8px #666666; }
        .solar-system .orbit#sun {
          width: 0;
          height: 0;
          top: 270px;
          left: 270px; }
        .solar-system .orbit#mercury {
          width: 160px;
          height: 160px;
          top: -80px;
          left: -80px; }
        .solar-system .orbit#earth {
          width: 400px;
          height: 400px;
          top: -200px;
          left: -200px; }
        .solar-system .orbit#venus {
          width: 280px;
          height: 280px;
          top: -140px;
          left: -140px; }
        .solar-system .orbit#moon {
          width: 40px;
          height: 40px;
          top: -20px;
          left: -20px; }
        .solar-system .orbit#mars {
          width: 520px;
          height: 520px;
          top: -260px;
          left: -260px; }
        .solar-system .orbit .body {
          width: 100%;
          height: 0;
          position: absolute;
          background-color: rgba(0, 255, 0, 0.2);
          animation-timing-function: linear;
          animation-iteration-count: infinite; }
          .solar-system .orbit .body::after {
            content: '';
            display: block;
            position: absolute;
            border-radius: 50%; }
          .solar-system .orbit .body#sun {
            top: 0;
            animation: none; }
            .solar-system .orbit .body#sun:after {
              background: linear-gradient(135deg, #FEC163 0%, #DE4313 100%);
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
              border-radius: 50%;
              width: 64px;
              height: 64px;
              top: -32px;
              left: -32px;
              animation-name: counter-clockwise;
              animation-timing-function: linear;
              animation-iteration-count: infinite; }
          .solar-system .orbit .body#mercury {
            top: 80px;
            animation-duration: 10s;
            animation-name: counter-clockwise; }
            .solar-system .orbit .body#mercury:after {
              background: url("wp-content/themes/astrobotany-theme/assets/small-mercury.png");
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
              border-radius: 50%;
              width: 10px;
              height: 10px;
              top: -5px;
              left: -5px;
              animation-name: counter-clockwise;
              animation-timing-function: linear;
              animation-iteration-count: infinite; }
          .solar-system .orbit .body#earth {
            top: 200px;
            animation-duration: 50s;
            animation-name: counter-clockwise; }
            .solar-system .orbit .body#earth:after {
              background: url("wp-content/themes/astrobotany-theme/assets/small-earth.png");
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
              border-radius: 50%;
              width: 16px;
              height: 16px;
              top: -8px;
              left: -8px;
              animation-name: counter-clockwise;
              animation-timing-function: linear;
              animation-iteration-count: infinite; }
          .solar-system .orbit .body#venus {
            top: 140px;
            animation-duration: 30s;
            animation-name: counter-clockwise; }
            .solar-system .orbit .body#venus:after {
              background: url("wp-content/themes/astrobotany-theme/assets/small-venus.png");
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
              border-radius: 50%;
              width: 14px;
              height: 14px;
              top: -7px;
              left: -7px;
              animation-name: counter-clockwise;
              animation-timing-function: linear;
              animation-iteration-count: infinite; }
          .solar-system .orbit .body#moon {
            top: 20px;
            animation-duration: 5s;
            animation-name: counter-clockwise; }
            .solar-system .orbit .body#moon:after {
              background: url("wp-content/themes/astrobotany-theme/assets/small-moon.png");
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
              border-radius: 50%;
              width: 6px;
              height: 6px;
              top: -3px;
              left: -3px;
              animation-name: counter-clockwise;
              animation-timing-function: linear;
              animation-iteration-count: infinite; }
          .solar-system .orbit .body#mars {
            top: 260px;
            animation-duration: 100s;
            animation-name: counter-clockwise; }
            .solar-system .orbit .body#mars:after {
              background: url("wp-content/themes/astrobotany-theme/assets/small-mars.png");
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
              border-radius: 50%;
              width: 13px;
              height: 13px;
              top: -6.5px;
              left: -6.5px;
              animation-name: counter-clockwise;
              animation-timing-function: linear;
              animation-iteration-count: infinite; } } }
</style>

<div id="solar-systems">
  <div id="whole" class="solar-system">
    <div id="sun" class="orbit">
      <div id="sun" class="body">
        <div id="mercury" class="orbit">
          <div id="mercury" class="body"></div>
        </div>
        <div id="venus" class="orbit">
          <div id="venus" class="body"></div>
        </div>
        <div id="earth" class="orbit">
          <div id="earth" class="body">
            <div id="moon" class="orbit">
              <div id="moon" class="body"></div>
            </div>
          </div>
        </div>
        <div id="mars" class="orbit">
          <div id="mars" class="body"></div>
        </div>
      </div>
    </div>
  </div>
  <div id="local" class="solar-system">
    <div id="earth" class="orbit">
      <div id="earth" class="body">
        <div id="moon" class="orbit">
          <div id="moon" class="body"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
