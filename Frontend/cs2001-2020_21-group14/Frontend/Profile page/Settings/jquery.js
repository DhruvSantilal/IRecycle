 const tabBtn = document.querySelectorAll(".tab");
    const tab = document.querySelectorAll(".tabShow");

    function tabs(panelindex) {
        tab.forEach(function(node) {
            node.style.display = "none";
            });
    tab[panelindex].style.display = "block"; 
        }
        tabs(0);
        

        /// ---------------------------------------------
        const file = document.querySelector('#file');

        file.addEventListener('change', function() {
 
 const chosenfile = this.files[0];
 const img = document.querySelector('#photo');
 
 if (chosenfile) {
     const reader = new FileReader();
     reader.addEventListener('load', function(){
 
 img.setAttribute('src', reader.result);
     });
     reader.readAsDataURL(chosenfile);
 }
        });