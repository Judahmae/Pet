<html>
    <head>
    <title>Pet Society</title>
        <link rel = "stylesheet" href="css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Fredoka+One&family=Open+Sans:wght@500&family=Palette+Mosaic&family=Rubik:wght@500&family=Varela+Round&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php 
            include ("inc/db.php");
            include ("inc/function.php");
            include ("inc/header.php"); 
            ?>
              <div class = "ko">
                <div class="inners">
                    <a class = 'lengkong' href = 'index.php'>My services</a>
                    <a class = 'lengk' href = 'addService.php'>Add services</a>
                    <a class = 'lengk' href = 'confirmRequests.php'>Requests(<?php echo count_requests();?>)</a>
                </div>
                    <div id = 'bodyleft'>
                        <br><br>
                        <?php
                            call_user_func('edit_service');
                        ?>
                    </div>   
  
    </body>
    <style>
        .lebels{
            font-size: 12px;
            font-family: "Varela Round", sans-serif;
            color: #888;
            margin-bottom: 2px;
        }
        .dataLebs{
            padding: 10px;
            font-family: "Varela Round", sans-serif;
            border-radius: 4px;
            outline: none;
            border: 1px solid black;
            width: 50%;
            margin-bottom: 2vh;
            width: 100%;
        }
        .profImg{
            width: 70%;
            margin-left: 15%;
        }
        .hldr{
            margin-left: 25%;
            width: 50%;
            padding-bottom: 3vh;
        }
        .asd{
            width: 90%;
            margin-top: 2vh;
            margin-left: 5%;
            padding: 10px;
            border-left: 1px solid #aaa;
            border-right: 1px solid #aaa;
        }
        .btnUp{
            border: none;
            outline: none;
            background: #ffb830;
            padding: 10px;
            border-radius: 4px;
            float: right;
        }
        .btnDiv{
            height: 50px;
        }
        .btn2{
            padding: 10px;
            border: 1px solid #ffb830;
            background: none;
            border-radius: 4px;
            float: right;
            margin-right: 15%;
        }
        .btns{
            height: 50px;
        }

        .drop-zone {
            width: 80%;;
  height: 50px;
  padding: 6px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  font-family: "Quicksand", sans-serif;
  font-weight: 500;
  font-size: 14px;
  cursor: pointer;
  color: #777;
  border: 2px dashed #009578;
  border-radius: 10px;
  margin-left: 5%;
            margin-bottom: 10px;
}

.drop-zone--over {
  border-style: solid;
}

.drop-zone__input {
  display: none;
}

.drop-zone__thumb {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  overflow: hidden;
  background-color: #cccccc;
  background-size: cover;
  position: relative;
}

.drop-zone__thumb::after {
  content: attr(data-label);
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 5px 0;
  color: #ffffff;
  background: rgba(0, 0, 0, 0.75);
  font-size: 14px;
  text-align: center;
}
    </style>
    <script>
          document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}
    </script>
</html>
