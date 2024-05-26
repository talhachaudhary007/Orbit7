
    
        </div>
            </div> 
    <!-- Jquery Core Js -->      
    <script src="assets/bundles/libscripts.bundle.js"></script>

    <!-- Jquery Plugin -->  
    <script src="assets/plugin/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js --> 
    <script src="assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js --> 
    <script src="assets/bundles/dropify.bundle.js"></script>
    <script src="assets/bundles/dataTables.bundle.js"></script>

    <!-- Jquery Page Js -->   
    <script src="js/template.js"></script>

<!-- to active selected items on Product/Service Details page -->
    <script>
        // =========== select-item-1 active 
        selectItem1=document.querySelectorAll("#select-item-1 .single-item");
            for(var i=0; i<selectItem1.length; i++){
                selectItem1[i].onclick=function(){
                var el=selectItem1[0];
                while(el){
                    if(el.tagName==="DIV"){
                    el.classList.remove("active");
                    }
                    el=el.nextSibling;
                }
                this.classList.add("active");
                };
            }
            // =========== select-color-1 active
            selectColor1=document.querySelectorAll("#select-color-1 li");
            for(var i=0; i<selectColor1.length; i++){
                selectColor1[i].onclick=function(){
                var el=selectColor1[0];
                while(el){
                    if(el.tagName==="LI"){
                    el.classList.remove("active");
                    }
                    el=el.nextSibling;
                }
                this.classList.add("active");
                };
            }
    </script>
    
</body>

</html> 