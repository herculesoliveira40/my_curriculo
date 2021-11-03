</div>
<script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
        </script>

        <script>
            localStorage.removeItem('blipSdkUAccount');
            (function () {
                window.onload = function () {
                    new BlipChat()
                    .withAppKey('key')
                    .withButton({"color":"#23f948","icon":""})
                    .withCustomCommonUrl('https://chat.blip.ai/')
                    .build();
                }              
            })();
        
        </script>     
         
    </body>
    <footer class="text-center bg-danger text-light">2021; Rua Nm  <strong class=""> <a href="https://github.com/herculesoliveira40" target="_blank">HDev &copy;</a> </strong>   </footer>
     <?php mysqli_close($connect); //Fecha conexão    ?>  
</html>




