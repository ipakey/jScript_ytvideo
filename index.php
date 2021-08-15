<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rotate an image</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="scripts.js"></script>

</head>
<body>
    <div class="wrapper">
        <img src="rotatingArrow.png" class='zero' alt="" >
        <div class="btn__wrapper">
            <button class="btn" id="btnLeft"><i class="fas fa-undo">Left</i>
            </button>
            <button class="btn" id="btnRight"><i class="fas fa-redo">Right</i></button>
        </div>
        
    </div>
    <script>
        const img = document.getElementById('img')
        const btnLeft = document.getElementById('btnLeft')
        const btnRight = document.getElementById('btnRight')

        let rotateL = 0
        let rotateR = 0
        let rotatea = 60
        let rotate = 0
    
        btnLeft.addEventListener('click',()=>{
            rotate = rotate - rotatea
            img.classList.add('rotate')
        })
    </script>
</body>
</html>