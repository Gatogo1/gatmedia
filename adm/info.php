

                <!--info-->
            <!--info-->
           
               
                    <div class="content col-sm-10 bg-light"  id="link_wrapper">
                       
                    </div>
                    <script>
                          function loadXMLDoc() {
                            var xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function() {
                              if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("link_wrapper").innerHTML =
                                this.responseText;
                              }
                            };
                            xhttp.open("GET", "system.php", true);
                            xhttp.send();
                          }
                          setInterval(function(){
                          	loadXMLDoc();
                          	// 1sec
                          },1000);

                          window.onload = loadXMLDoc;
                    </script>
                    
                
                <!-- end info-->
                
    
                

