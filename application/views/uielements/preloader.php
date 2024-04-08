<section class="preloader">
  <div class="loader-animation">
  <div class="loading-bar"></div>
  </div>
</section>
<style>
  section.preloader {
    z-index: 9999;
    background-color: #121212;
    width: 100%;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    overflow: hidden;
    display: block;
  }
  section.preloader .loader-animation {
    width: 100%;
    position: absolute;
    top: 50%;
    display: flex;
    justify-content: center;
  }
  
  @keyframes bluebar {
    50% {
      left: 96px;
    }
  }

  .loading-bar {
    width: 130px;
    height: 2px;
    background: #cfcfcf;
    margin-top: 22px;
    position: relative;
    overflow: hidden;
  }

  .loading-bar::before {
    content: '';
    width: 68px;
    height: 2px;
    background: #0073b1;
    position: absolute;
    left: -34px;
    animation: bluebar 1.5s infinite ease;
  }
</style>