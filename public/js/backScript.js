$("#article-image").click(function() {
    $("input[id='chooseFiles']").click();
});

$(".checkbox-toggle").click( (e) => {
    if ($("input[type='checkbox']:checked").length == $('input[type=\'checkbox\']').length) {
        $("input[type='checkbox']").prop("checked", false)
    }else{
        $("input[type='checkbox']").prop("checked", true)

    }
})

$('.fa-sync-alt').click(() =>{
    location.reload();
});

(function (global) {
    var imagesPerRow = 3,
        chooseFiles,
        columns,
        previews;

    function PreviewImages() {
        var row;

        Array.prototype.forEach.call(chooseFiles.files, function (file, index) {
            var cindex = index % imagesPerRow,
                oFReader = new FileReader(),
                cell,
                image;

            if (cindex === 0) {
                row = previews.insertRow(Math.ceil(index / imagesPerRow));
            }

            image = document.createElement("img");
            image.id = "img_" + index;
            image.style.width = "100%";
            image.style.height = "auto";
            cell = row.insertCell(cindex);
            cell.appendChild(image);

            oFReader.addEventListener("load", function assignImageSrc(evt) {
                document.getElementById('arrowPrev').style.display = "block";
                image.src = evt.target.result;
                this.removeEventListener("load", assignImageSrc);
            }, false);

            oFReader.readAsDataURL(file);
        });
    }

    global.addEventListener("load", function windowLoadHandler() {
        global.removeEventListener("load", windowLoadHandler);
        chooseFiles = document.getElementById("chooseFiles");
        columns = document.getElementById("columns");
        previews = document.getElementById("previews");

        var row = columns.insertRow(-1),
            header,
            i;

        for (i = 0; i < imagesPerRow; i += 1) {
            header = row.insertCell(-1);
            header.style.width = (100 / imagesPerRow) + "%";
        }

        chooseFiles.addEventListener("change", PreviewImages, false);
    }, false);
}(window));
