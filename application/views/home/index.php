
        <style>
            #myBtn {
              display: none;
              position: fixed;
              bottom: 20px;
              right: 30px;
              z-index: 99;
              font-size: 18px;
              border: none;
              outline: none;
              background-color: black;
              color: white;
              cursor: pointer;
              padding: 15px;
              border-radius: 4px;
            }
            
            #myBtn:hover {
              background-color: #555;
            }
            </style>

       <!-- slider -->
       <!-- <section id="index" class="" >        -->
       <div class="slider" id="index">
            <ul class="slides">
              <li>
                <!-- <img src="img/web1.jpg">  -->
                <img src="assets/img/web1.jpg"> <!-- random image -->

                <div class="caption center-align black-text">
                  <h3><font color="white" size="4">
                      <script language="JavaScript">
var text="Payung Anak Bangsa For IT Solution";
var delay=20;
var currentChar=1;
var destination="[none]";
function type()
{
//if (document.all)
{
var dest=document.getElementById(destination);
if (dest)// && dest.innerHTML)
{
dest.innerHTML=text.substr(0, currentChar)+"<blink>_</blink>";
currentChar++;
if (currentChar>text.length)
{
currentChar=1;
setTimeout("type()", 80000);
}
else
{
setTimeout("type()", delay);
}
}
}
}
function startTyping(textParam, delayParam, destinationParam)
{
text=textParam;
delay=delayParam;
currentChar=1;
destination=destinationParam;
type();
}
</script> <b><div 0px="" 12px="" arial="" color:="" ff0000="" font:="" id="textDestination" margin:="" style="background-color: none;"></div></b> <script language="JavaScript">
javascript:startTyping(text, 50, "textDestination");
</script>

We Build Integrated Software Development Solution</font></h3>
                </div>
              </li>
              <li>
                <img src="<?php echo base_url('assets/img/2.jpg'); ?>" /> <!-- random image -->
                <div class="caption left-align black-text">
                    <h3><font color="white" size="4">We Support Network ,Enterprise Infrastructure and DevOps</font></h3>
                </div>
                </li>

                  <li>
                <img src="assets/img/3.jpg"> <!-- random image -->
                <div class="caption right-align black-text">
                <h3><font color="white" size="4">We Give You IT Consultant Professional</font></h3>
                </div>
            </li>
        </ul>
    </div>
<!-- </section> -->

      


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js'); ?>"></script>


      <script>
        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
          scrollOffset: 50
        });

       const sideNav = document.querySelectorAll('.sidenav');
       M.Sidenav.init(sideNav);

       const slider = document.querySelectorAll('.slider');
       M.Slider.init(slider, {
        indicators: false,
        height: 500,
        transition: 600,
        interval: 3000

       });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

      </script>

<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>

    </body>
  </html>