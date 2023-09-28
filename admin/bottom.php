<?php
ob_end_flush();
?>
</div>
     <div id="footer">
        <div class="accout">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            
            <i class="fa-brands fa-instagram"></i>
            <i class="ti-dropbox"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-youtube"></i>
        </div>
    </div>
    </body>
    <script>
         const show=document.querySelector(".ti-angle-down")
         const close=document.querySelector(".ti-close")
         const out=document.querySelector(".out")
         const main=document.querySelector(".content");
        //  close.onclick=function(e) 
        //  {
        //     e.stopPropagation();
        //     out.classList.remove('open');
        //  }

        function showdangxuat(){
            out.classList.add('open')
        }
        function hidedangxuat(e){
            e.stopPropagation();
            out.classList.remove('open')
        }
        
        show.addEventListener('click',showdangxuat)
        close.addEventListener('click',hidedangxuat)
        main.addEventListener('click',hidedangxuat)
    </script>
</html>