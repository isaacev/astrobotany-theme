<style>
#solar-system {
  display: block;
  position: relative;
  width: 600px;
  height: 600px;
  background-color: black;
  border-radius: 50%;
  margin: 32px auto; }
  #solar-system .orbit {
    position: absolute;
    border-radius: 50%;
    border-style: dashed;
    border-width: 1px;
    border-color: rgba(255, 255, 255, 0.4); }
    #solar-system .orbit .planet {
      width: 100%;
      position: absolute; }
      #solar-system .orbit .planet::before {
        content: "";
        display: block;
        position: relative;
        border-radius: 50%; }
    #solar-system .orbit .orbit {
      border-color: rgba(255, 255, 255, 0.4); }
      #solar-system .orbit .orbit .satellite {
        width: 100%;
        position: absolute; }
        #solar-system .orbit .orbit .satellite::before {
          content: "";
          display: block;
          position: relative;
          border-radius: 50%; }
  #solar-system .orbit.sun {
    width: 0px;
    height: 0px;
    top: 300px;
    left: 300px;
    transform: rotate(0deg); }
    #solar-system .orbit.sun .planet {
      height: 80px;
      top: -40px;
      animation: spin 0s linear infinite; }
      #solar-system .orbit.sun .planet::before {
        width: 80px;
        height: 80px;
        right: 40px;
        background-image: linear-gradient(135deg, #FEC163 0%, #DE4313 100%); }
  #solar-system .orbit.mercury {
    width: 160px;
    height: 160px;
    top: 220px;
    left: 220px;
    transform: rotate(320deg); }
    #solar-system .orbit.mercury .planet {
      height: 8px;
      top: 76px;
      animation: spin 10s linear infinite; }
      #solar-system .orbit.mercury .planet::before {
        width: 8px;
        height: 8px;
        right: 4px;
        background-image: linear-gradient(135deg, #ECF0F1 0%, #95A5A6 100%); }
  #solar-system .orbit.venus {
    width: 280px;
    height: 280px;
    top: 160px;
    left: 160px;
    transform: rotate(116deg); }
    #solar-system .orbit.venus .planet {
      height: 18px;
      top: 131px;
      animation: spin 30s linear infinite; }
      #solar-system .orbit.venus .planet::before {
        width: 18px;
        height: 18px;
        right: 9px;
        background-image: linear-gradient(135deg, #FAD7A1 0%, #E96D71 100%); }
  #solar-system .orbit.earth {
    width: 400px;
    height: 400px;
    top: 100px;
    left: 100px;
    transform: rotate(32deg); }
    #solar-system .orbit.earth .planet {
      height: 20px;
      top: 190px;
      animation: spin 50s linear infinite; }
      #solar-system .orbit.earth .planet::before {
        width: 20px;
        height: 20px;
        right: 10px;
        background-image: linear-gradient(135deg, #5EFCE8 0%, #736EFE 100%); }
    #solar-system .orbit.earth .orbit.moon {
      width: 40px;
      height: 40px;
      left: -20px;
      top: -10px;
      transform: rotate(45deg); }
      #solar-system .orbit.earth .orbit.moon .satellite {
        width: 100%;
        height: 6px;
        top: 17px;
        animation: spin 5s linear infinite; }
        #solar-system .orbit.earth .orbit.moon .satellite::before {
          width: 6px;
          height: 6px;
          right: 3px;
          background-image: linear-gradient(135deg, #ECF0F1 0%, #95A5A6 100%); }

@keyframes spin {
  0% {
    transform: rotate(360deg); }
  100% {
    transform: rotate(0deg); } }

/*# sourceMappingURL=planets.css.map */
</style>

<div id="solar-system">
  <div class="orbit sun"><div class="planet"></div></div>
  <div class="orbit mercury"><div class="planet"></div></div>
  <div class="orbit venus"><div class="planet"></div></div>
  <div class="orbit earth"><div class="planet">
    <div class="orbit moon"><div class="satellite"></div></div>
  </div></div>
  <div class="orbit mars"><div class="planet">
    <div class="orbit deimos"><div class="satellite"></div></div>
    <div class="orbit phobos"><div class="satellite"></div></div>
  </div></div>
</div>
