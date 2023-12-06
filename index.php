<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yuify | Home</title>
    <link rel="shortcut icon" href="y.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-49W7075SS1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-49W7075SS1');
</script>

<style>
  .container {
    <?php
         $page = isset($_GET['page']) ? $_GET['page'] : 'home';
         switch($page) {
          case 'home':
            case 'payment':
                echo 'background-color: #f0f0f0;';
                break;
            default:
                echo 'background-color: #fff;'; 
                echo 'z-index: 1000;';
                echo 'width: 100%;';
                echo 'height 100%;';
                break;
         }
    ?>
  }

  .a {
    <?php
         $page = isset($_GET['page']) ? $_GET['page'] : 'home';
         switch($page) {
          case 'home':
            case 'payment':
                echo 'background-color: #f0f0f0;';
                break;
            default:
                echo 'display: none;';
                break;
         }
    ?>
  }

  .sidebar {
    <?php
         $page = isset($_GET['page']) ? $_GET['page'] : 'home';
         switch($page) {
          case 'home':
            case 'payment':
                echo 'background-color: #f0f0f0;';
                break;
            default:
                echo 'display: none;';
                break;
         }
    ?>
  }

  .aoisdj2-niasd {
    <?php
         $page = isset($_GET['page']) ? $_GET['page'] : 'home';
         switch($page) {
          case 'home':
            echo 'display: none;';
            break;
            case 'payment':
                echo 'display: none;';
                break;
            default:
                echo 'display: block;';
                break;
         }
    ?>
  }

  .nbiaosd-xcvkjaw-3nidsf-3nisdf {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            break;
          case 'payment':
            break;
          default: 
            echo 'border: 2px solid #000;';
            echo 'color: #000;';
            echo 'margin-left: -130px;';
            break;
      }
    ?>
  }

  .bnxcv-32jzx-asd20asdiasd-nhoiafs {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            break;
          case 'payment':
            break;
          default: 
            echo 'color: #000;';
            echo 'margin-left: 0px;';
            break;
      }
    ?>
  }

  .niasd-2nisdf-3niasd-2niasd {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            break;
          case 'payment':
            break;
          default: 
            echo 'position: relative;';
            echo 'left: 62px;';
            echo 'top: 166px;';
            echo 'height: 300px;';
            break;
      }
    ?>
  }
</style>

</head>
<body>
    <div class="container">
      <div class="aoisdj2-niasd">
        404
      </div>
      <p class="mniaosd-2niasd-2niasd-2">Oops! Page not found</p>
      <a href="index.php?page=home">
      <button class="mnasd-2niasd-2niasd0">Home</button>
      </a>
      <div class="sidebar">

        <!--Do usuniecia-->
        <div class="a">


        <a href="index.php?page=payment">Payment</a>


        </div>
        <!--Do usuniecia-->


      </div>
      <div class="top">
        <img src="img.png" id="bjxcv-2nbasd-nasd" class="bxncv-2jkasd-2bnjaskdf" alt="Can't load">
        
        <a href="index.php?page=home">
        <div class="joisdf-sdafmno3-sdfno3">
          Home
        </div>
      </a>

        <div class="naisd-3niaosd-3niawsd-3nioasd">
          Guides
        </div>

        <div class="nioadsf-3nasd-3nas-dn3iasd">
          Pricing
        </div>

        <span class="material-symbols-outlined nasid02iad-2iasd-2iasd">
          menu
          </span>

        <div class="nkxzc-bnmxzbxhcmv-asjd-asjd">
          <span class="material-symbols-outlined niasd-2niasd-2nasd-3niasd">
            dark_mode
            </span>
            <p class="shief-3iosdf-3nisdf-3">Theme</p>
        </div>

        <div class="niasd-2nisdf-3niasd-2niasd">
          .
        </div>

        <input type="text" class="nbiaosd-xcvkjaw-3nidsf-3nisdf">
        <span class="material-symbols-outlined bnxcv-32jzx-asd20asdiasd-nhoiafs">
          search
          </span>
      </div>
      <div class="page">
        

        <main>

        <?php
         $page = isset($_GET['page']) ? $_GET['page'] : 'home';
         switch ($page) {
          case 'home':
              echo '<h1></h1>';
              echo '<p></p>';
              break;
          case 'payment':
              
              break;
          default:
              echo '<h1>Błąd: Strona nie istnieje</h1>';

              break;
          }
        ?>

        </main>
        <div class="nias-d2niasd-nicx-qwnifsad">
          <div class="niasd02nisa02-asbud2-asbdu">
            <span class="material-symbols-outlined iaosdho2-asdni2-asdin2-ansd">
              light_mode
              </span>
              <p class="naidfs2-naids-2niasd-2nidsf">Light Mode</p>
          </div>
          <div class="nasd-2niasd-2uasd">
            <span class="material-symbols-outlined asdnio2-asni2-df-21niasd-asdf">
              dark_mode
              </span>
              <p class="aodjsoj21-asjdoas-12jisad-2joasd">Dark Mode</p>
          </div>
        </div>
      </div>
    </div>
</body>
<script src="index.js"></script>



</html>
