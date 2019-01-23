<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hyperbyte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://cdn.jsdelivr.net/npm/animejs@3/lib/anime.min.js"></script>
</head>
<body>
        <div id="wrap">
            <span class="title">H</span>
            <span class="title">y</span>
            <span class="title">p</span>
            <span class="title">e</span>
            <span class="title">r</span>
            <span class="title">-</span>
            <span class="title">B</span>
            <span class="title">y</span>
            <span class="title">t</span>
            <span class="title">e</span>
        </div>
        <div id="line"></div>
        <div id="cover"></div>
        <div id="contact" style="opacity: 0">
            <a href="mailto:reillyhewitson@gmail.com" class="button"><button>Contact us</button></a>
            <a onclick="openWindow()" class="button"><button>Info</button></a>
        </div>
    <script>
        window.onload = function(){
            var t1 = anime.timeline({
            easing: 'easeOutExpo',
        })
        
        t1.add({
            targets: '#line',
            width: '100%',
            duration: 400,
            offset: '+=300'
        })
        .add({
            targets: '#line',
            width: '0%',
            left: '100%',
            duration: 400
        })
        .add({
            targets: '.title',
            opacity: [0,1],
            easing: "easeOutExpo",
            offset: "-=200",
            duration: 800,
        })
        .add({
            targets: '#wrap',
            translateY: -50,
            duration: 400,
            easing: "easeOutExpo"
        })
        .add({
            targets: '#contact',
            opacity: [0, 1],
            easing: "easeOutExpo",
            offset: "-=200"
        });
        }
        

        async function openWindow(){
            var t2 = anime.timeline({
                easing: "easeOutExpo"
            })

            t2.add({
                targets: '#cover',
                width: '100%',
                height: '100%',
                top: '0%',
                left: '0%',
                borderRadius: '0%',
                duration: 400
            })
            .add({
                targets: '.button',
                opacity: 0,
                duration: 0,
                offset: '-=400'
            })
            .add({
                targets: '.title',
                opacity: [1, 0],
                duration: 0,
                offset: '-=400'
            })
            
            await t2.finished
            window.location.href = './info.html'
            
        }
    </script>
</body>
</html>