    var btnContainer = Document.getElementById("menu");
    var btzs = btnContainer.getElementsByClassName("btz");

    for (var i = 0; i < btzs.length; i++) {
        btzs[i].addEventListener('click', function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active");
            this.className += " active";
        })
    }