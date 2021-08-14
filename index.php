<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotations youTube</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="wrapper">
        <img src="rightarrowbutton.gif" alt="">
        <div class="btn__wrapper">
            <button class="btn" id="btnLeft">Left</button>
            <button class="btn" id="btnRight">Right</button>
        </div>
    </div>
    <script>
        const img=document.getElementById('img')
        const btnLeft= document.getElementById('btnLeft')
        const btnRight= document.getElementById('btnRight')

        let rotateL = 0
        let rotateR = 0
        btnLeft.addEventListener('click',()=>{
            rotateL = rotateL + - 90;
            img.style.transform = 'rotate(${rotateL}deg)';
        })

        btnRight.addEventListener('click',()=>{
            rotateR = rotateR +  90;
            img.style.transform = 'rotate(${rotateR}deg)';
        })
    </script>
    
</body>
</html>