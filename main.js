let md = new MobileDetect(window.navigator.userAgent)

if(md.mobile()){
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
        translateY: -75,
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
}
else{
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