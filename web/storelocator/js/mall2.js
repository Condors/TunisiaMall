$(function(){
    $('#mall-map2').vectorMap({
        map: 'map2',
        backgroundColor: 'transport',
        series: {
            regions: [{
                values: {
                    L201: 'US POLO',
                    L202: '50 NUANCES BLEU',
                    L203: 'I AM',
                    L204: 'YAMAMAY',
                    L205: 'ANDRE',
                    L206: 'JULES',
                    L207: 'DEGRENNE PARIS',
                    L208: 'JENNYFER',
                    L209: 'TAPE A L OEIL',
                    L210: 'MAHA MODEN',
                    L211: 'ZEN',
                    L212: 'STRASS',
                    L213: 'STAR WATCHES',
                    L214: 'EXIST',
                    L215: 'PRIMADONNA',
                    L216: 'CRK',
                    L217: 'NEW PORT',
                    L218: 'EXTREME',
                    L219: 'BRODWAY NY FASHION',
                    L220: 'OVS KIDS',
                    L221: 'HOME SWEET HOME',
                    L222: 'EVATEK',
                    L223: 'BARGAOUI',
                    L224: 'RAYHANA',
                    L225: 'BCBG MAXZAZRIA',
                    L226: 'LUFIAN',
                    L227: 'LOCCITANE'
                },
                scale: {
                    "US POLO": "#C01923",
                    "YAMAMAY": "#C01923",
                    "ANDRE": "#C01923",
                    "JULES": "#C01923",
                    "JENNYFER": "#C01923",
                    "TAPE A L OEIL": "#C01923",
                    "MAHA MODEN": "#C01923",
                    "ZEN": "#C01923",
                    "PRIMADONNA": "#C01923",
                    "NEW PORT": "#C01923",
                    "EXTREME": "#C01923",
                    "BRODWAY NY FASHION": "#C01923",
                    "OVS KIDS": "#C01923",
                    "BCBG MAXZAZRIA": "#C01923",
                    "LUFIAN": "#C01923",
                    "I AM": "#E98C87",
                    "STRASS": "#E98C87",
                    "STAR WATCHES": "#E98C87",
                    "CRK": "#E98C87",
                    "BARGAOUI": "#E98C87",
                    "RAYHANA": "#E98C87",
                    "EXIST": "#E98C87",
                    "50 NUANCES BLEU": "#3FA9F5",
                    "DEGRENNE PARIS": "#3FA9F5",
                    "HOME SWEET HOME": "#3FA9F5",
                    "EVATEK": "#007C88",
                    "LOCCITANE": "#4BC0AE"




                }
            }]
        },
        onRegionTipShow: function(e, el, code){
            if (el.html() === '') {
                e.preventDefault();
            }
        },
        onRegionClick: function (event, code) {
            window.location.href = "aaa.html?regionCode="+t1
        },
        onRegionClick: function (event, code) {
            //alert("11");
            // window.location.replace("http://www.google.com");
            var myWindow = window.open("", "MsgWindow", "width=200,height=100");
            myWindow.document.write("description:<br>")

            myWindow.document.write("tel:22437084");
        }
    });
});
