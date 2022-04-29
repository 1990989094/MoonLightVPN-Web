<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moon Light VPN</title>
    <link rel="stylesheet" href="style.css">
</head>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<body>

<?php require "header.php" ?>

<div class="sec" id="sec">
    <h2>Lightweight & Secure VPN</h2>
    <ul style="color: #fff;">
        <li> ကျွန်ုပ်တို့၏ မူပိုင် VPN Accelerator နည်းပညာများနှင့် ပေါင်းစပ်ထားသော 10 Gbps ဆာဗာကွန်ရက်သည် အမြန်နှုန်းကို 400% ထက်ပို၍ မြှင့်တင်နိုင်သည်။ ကျွန်ုပ်တို့သည် ပြိုင်ဘက်ကင်းသောစွမ်းဆောင်ရည်နှင့် ချိတ်ဆက်မှုတည်ငြိမ်မှုကိုပေးဆောင်သည့် အဆင့်မြင့်ကွန်ရက် TCP စီးဆင်းမှုထိန်းချုပ်မှု Algorithm ကို အသုံးပြုပါသည်။</li>
        <li>  ကျွန်ုပ်တို့သည် 256-bit သော့များ—AES-256 ဟုလည်းသိကြသည့် AES (အဆင့်မြင့်လျှို့ဝှက်ကုဒ်စံနှုန်း) ကိုအသုံးပြုသည်။ ၎င်းသည် အမျိုးအစားခွဲထားသော အချက်အလက်များကို ကာကွယ်ရန်အတွက် အမေရိကန်အစိုးရမှ လက်ခံကျင့်သုံးသည့် တူညီသော ကုဒ်ဝှက်စံနှုန်းတစ်ခုဖြစ်သည်။</li>
        <li> ISP ပိတ်ဆို့ခြင်းကို ရှောင်ရှားရန် သင်၏အကောင်းဆုံးနည်းလမ်းမှာ ကောင်းမွန်သော VPN ဝန်ဆောင်မှုကို အသုံးပြုခြင်းဖြစ်သည်။ Moon light VPN ကဲ့သို့သော ကောင်းမွန်သော VPN ဝန်ဆောင်မှုတစ်ခုသို့ ချိတ်ဆက်သည့်အခါ သင့်ဒေတာကို ကုဒ်ဝှက်ထားသည်။ အဲဒါတွေအကုန်လုံး။ ဆိုလိုသည်မှာ သင်၏ ISP သည် သင့်ဒေတာကို ခွဲခြမ်းစိတ်ဖြာရန် ကြိုးပမ်းသောအခါတွင် ၎င်းတို့မြင်ရသမျှသည် မရှင်းလင်းသော စာလုံးများနှင့် နံပါတ်များဖြစ်သည်။ ဤနည်းဖြင့် သင်အသုံးပြုနေသည့် ဝန်ဆောင်မှုများကို ၎င်းတို့မသိနိုင်ဘဲ သင့်အသုံးပြုမှုကို နှောင့်နှေးစေမည်မဟုတ်ပါ။ အကောင်းဆုံးအပိုင်းမှာ Moon Light VPN သည် အခမဲ့ဖြစ်သည်။ ချိတ်ဆက်မှု အလွန်နှေးကွေးသည့်အတွက် စိတ်ပျက်နေမည့်အစား ၎င်းကို စမ်းကြည့်ပါ။ မင်းရဲ့အင်တာနက်က ဘယ်လောက်မြန်လဲဆိုတာကို မင်းအံ့သြသွားလိမ့်မယ်။</li>
    </ul>

</div>
<script>
    let stars = document.getElementById('stars');
    let moons = document.getElementById('moon');
    let mountain_behind = document.getElementById('mountain_behind');
    let text = document.getElementById('text');
    let btn = document.getElementById('btn');
    let mountain_front = document.getElementById('mountain_front');
    let header = document.querySelector('header');

    window.addEventListener('scroll', function() {
        let value = window.scrollY;
        stars.style.left = value * 0.2 + "px";
        moons.style.top = value * 1.05 + "px";
        mountain_behind.style.top = value * 0.5 + "px";
        mountain_front.style.top = value * 0 + "px";
        text.style.marginRight = value * 3 + "px";
        text.style.marginTop = value * 1.5 + "px";
        btn.style.marginTop = value * 1.5 + "px";
        header.style.top = value * 0.5 + "px";
    })

</script>
</body>
</html>