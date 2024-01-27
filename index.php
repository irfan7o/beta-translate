<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/modal.css" />
    <link href="img/logo.ico" rel="icon">
    <title>Beta Translate</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <style type="text/css">
      .autocomplete-suggestions { border: 1px solid #999; background: #FFF; overflow: auto; }
      .autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
      .autocomplete-selected { background: #F0F0F0; }
      .autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }
      .autocomplete-group { padding: 2px 5px; }
      .autocomplete-group strong { display: block; border-bottom: 1px solid #000; }

      input {
          width: 100%;
          padding: 1em !important;
          margin: 0em !important;
      }

      .input-container {
        padding-bottom: 10px;
      }

      .left-and-right-inner-addon {
          position: relative;
          max-width: 380px;
          width: 100%;
      }

      .left-and-right-inner-addon input {
          padding-right: 35px !important;
          padding-left: 60px !important;
          background-color: #f0f0f0;
          border-radius: 55px;
          border: none;
          height: 55px;
          outline: none;
          border: none;
          line-height: 1;
          font-weight: 600;
          font-size: 1.1rem;
          color: #333;
      }

      .left-and-right-inner-addon i.left {
          position: absolute;
          color: #acacac;
          padding: 15px 15px;
          padding-left: 25px;
          padding-top: 18px;
          cursor: pointer;
          font-size: 1.1rem;
      }
      
      .left-and-right-inner-addon i.right {
          position: absolute;
          right: 0px;
          color: #acacac;
          padding: 15px 15px;
          padding-right: 25px;
          padding-top: 19px;
          cursor: pointer;
          font-size: 1rem;
      }

      .button-feed {
        display: inline-block;
        border-radius: 30px;
        background-color: #289cfc;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 15px;
        padding: 8px;
        width: 140px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }
    </style>

    <!-- Script Connection to translate.php -->
    <script>
    function getXMLHttpRequest() {
        if (window.ActiveXObject) {
            return new ActiveXObject("Microsoft.XMLHTTP");
        } else if (window.XMLHttpRequest) {
            return new XMLHttpRequest();
        } else alert("Status : Can not create XMLHttpRequest Object");
    }
    var xmlhttp = getXMLHttpRequest();

    function sendRequest(pageURL, bahasa) {
        if (xmlhttp.readyState == 4 || xmlhttp.readyState == 0) {

            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //  console.log(xmlhttp);
                    resp = JSON.parse(xmlhttp.responseText);
                    console.log(resp);
                    if (bahasa == 'indonesia') {
                        document.getElementById('konversumbawa').value = resp.kata;
                        if(resp.status == true) {
                          document.getElementById('info-data1').innerHTML = resp.ket;
                          document.getElementById('id01-icon').style = '';
                        }
                    } else if (bahasa == 'sumbawa') {
                        document.getElementById('konverindonesia').value = resp.kata;
                        if(resp.status == true) {
                          document.getElementById('info-data2').innerHTML = resp.ket;
                          document.getElementById('id02-icon').style = '';
                        }
                    } 
                }
            } 
            xmlhttp.open('GET', pageURL, true);
            xmlhttp.send(null);
        }
    }

    function konversi(bahasa) {
        if (bahasa == 'indonesia') {
            sendRequest('translate.php?kata=' + document.getElementById('bahasaindonesia').value + '&bahasa=indonesia', 'indonesia');
        } else if (bahasa == 'sumbawa') {
            sendRequest('translate.php?kata=' + document.getElementById('bahasasumbawa').value + '&bahasa=sumbawa', 'sumbawa');
        }
    }
  </script>

  </head>

  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Terjemahin!</h2>

            <div class="left-and-right-inner-addon input-container">
              <i id="volSpeak" onclick="volSpeak(this)" class="fas fa-volume-up left"></i>
              <input type="text" name="bahasaindonesia" id="bahasaindonesia" placeholder="Indonesia" />
            </div>
            <input type="button" name="Submit" value="Artinya" onclick="konversi('indonesia');" class="btn solid" />
            <div class="left-and-right-inner-addon input-container" style="margin: 10px 0;">
              <i id="volSpeak" onclick="volSpeak2(this)" class="fas fa-volume-up left"></i>
              <i onclick="document.getElementById('id01').style.display='block'" id="id01-icon" style="display: none;" class="fa-solid fa-circle-info right"></i>
              <input type="text" name="konversumbawa" id="konversumbawa" placeholder="Sumbawa" disabled/>
            </div>
            
            <p class="social-text">Creator</p>
            <div class="social-media">
              <a href="https://github.com/irfan7o" target="_blank" class="social-icon">
                <i class="fab fa-github"></i>
              </a>
              <a href="https://www.instagram.com/irfan.0z" target="_blank" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/in/irfan0z" target="_blank" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <br style="margin-top: 20px">
              <a href="https://forms.office.com/r/Kxjq5HsnsS" class="button-feed" target="_blank" style="vertical-align:middle; text-decoration:none;">
                feedback <i class="fas fa-comment-dots"></i>
              </a>
          </form>

          <form action="#" class="sign-up-form">
            <h2 class="title">Terjemahin!</h2>

            <div class="left-and-right-inner-addon input-container">
              <i id="volSpeak" onclick="volSpeak2(this)" class="fas fa-volume-up left"></i>
              <input type="text" name="bahasasumbawa" id="bahasasumbawa" placeholder="Sumbawa" />
            </div>
            <input type="button" name="Submit" class="btn" value="Artinya" onclick="konversi('sumbawa');" />
            <div class="left-and-right-inner-addon input-container" style="margin: 10px 0;">
              <i id="volSpeak" onclick="volSpeak(this)" class="fas fa-volume-up left"></i>
              <i onclick="document.getElementById('id02').style.display='block'" id="id02-icon" style="display: none;" class="fa-solid fa-circle-info right"></i>
              <input type="text" name="konverindonesia" id="konverindonesia" placeholder="Indonesia" disabled/>
            </div>

            <p class="social-text">Creator</p>
            <div class="social-media">
              <a href="https://github.com/irfan7o" target="_blank" class="social-icon">
                <i class="fab fa-github"></i>
              </a>
              <a href="https://www.instagram.com/irfan.0z" target="_blank" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/in/irfan0z" target="_blank" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <br style="margin-top: 20px">
              <a href="https://forms.office.com/r/Kxjq5HsnsS" class="button-feed" target="_blank" style="vertical-align:middle; text-decoration:none;">
                feedback <i class="fas fa-comment-dots"></i>
              </a>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">

          <!-- Modal 1 -->
          <div id="id01" class="modal-info">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
            <form class="modal-info-content" action="#">
            <div class="container-info"> 
              <i class="fa-solid fa-circle-info" style="font-size: 5em;"></i>
              <h2 style="color: #444; padding-bottom: 5px;">Info</h2>
              <p id="info-data1" class="modal-1">Muncul info disini! indo</p>
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="padding-top: 10px;">Oke, paham</button>
            </div>
            </form>
          </div>
          <!-- End of Modal 1 -->

          <div class="content">
            <h3>Beta Translate</h3>
            <p>
               Yuk! Coba terjamahin arti kata bahasa indonesia ke bahasa sumbawa. Pasti asik!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Switch
            </button>
          </div>
          <img src="img/gambar-indonesia.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">

        <!-- Modal 2 -->
        <div id="id02" class="modal-info">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
          <form class="modal-info-content" action="#">
          <div class="container-info"> 
            <i class="fa-solid fa-circle-info"></i>
            <h2 style="color: #444; padding-bottom: 5px;">Info</h2>
            <p id="info-data2">Muncul info disini! sumbaw</p>
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Oke, paham</button>
          </div>
          </form>
        </div>
        <!-- End of Modal 2 -->

          <div class="content">
            <h3>Beta Translate</h3>
            <p>
                Tem tu coba terjamah arti kata bahasa semawa ko bahasa indonesia. Pasti maras!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Switch
            </button>
          </div>
          <img src="img/gambar-sumbawa.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <!-- Script for Autocomplete -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.11/jquery.autocomplete.min.js"></script>
    
    <!-- TTS Voice -->
    <script type="text/javascript">
      function volSpeak(e) {
          let kata = document.getElementById('bahasaindonesia').value;
          let fileName = (Math.random() + 1).toString(36).substring(7);

          if(localStorage.getItem(kata)) {
            console.log('local localStorage use');
            new Audio(`audio/${localStorage.getItem(kata)}`).play();
          } else {
              fetch( `http://127.0.0.1:3000/generate?text=${kata}&lang=id&fileName=${fileName}`).then(data => data.json()).then((resp) => {
                if(resp.success) {
                    console.log('api use');
                  new Audio(`audio/${resp.audioName}`).play();
                  localStorage.clear();
                  localStorage.setItem(kata, resp.audioName);
                }
            });
          }
      }

        function volSpeak2(e) {
          let kata = document.getElementById('konversumbawa').value;
          let fileName = (Math.random() + 1).toString(36).substring(7);

          if(localStorage.getItem(kata)) {
            console.log('local localStorage use');
            new Audio(`audio/${localStorage.getItem(kata)}`).play();
          } else {
              fetch( `http://127.0.0.1:3000/generate?text=${kata}&lang=id&fileName=${fileName}`).then(data => data.json()).then((resp) => {
                if(resp.success) {
                    console.log('api use');
                  new Audio(`audio/${resp.audioName}`).play();
                  localStorage.clear();
                  localStorage.setItem(kata, resp.audioName);
                }
            });
          }
      }
    </script>
    
    <!-- Autocomplete Indonesia -->
    <script type="text/javascript">
      $(document).ready(function() {
        $( "#bahasaindonesia" ).autocomplete({
          serviceUrl: "data-indonesia.php",   
          dataType: "JSON",          
          onSelect: function (suggestion) {
              $( "#bahasaindonesia" ).val(suggestion.indonesia);
          }
      });
    })
    </script>

    <!-- Autocomplete Sumbawa -->
    <script type="text/javascript">
      $(document).ready(function() {
        $( "#bahasasumbawa" ).autocomplete({
          serviceUrl: "data-sumbawa.php",   
          dataType: "JSON",          
          onSelect: function (suggestion) {
              $( "#bahasasumbawa" ).val(suggestion.sumbawa);
          }
      });
    })
    </script>

    <!-- Get Modal 1  -->
    <script>
    var modal = document.getElementById('id01');
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>

    <!-- Get modal 2 -->
    <script>
    var modal2 = document.getElementById('id02');
    window.onclick = function(event) {
      if (event.target == modal2) {
        modal.style.display = "none";
      }
    }
    </script>

    <!-- Switch  -->
    <script src="js/app.js"></script>

  </body>
</html>
