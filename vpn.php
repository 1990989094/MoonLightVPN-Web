<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require "header.php" ?>

<div class="sec" id="sec">
    <h2>vpn ဆိုတာဘာလဲ</h2>
    <ul style="color: #fff">
        <li>VPN (virtual private network) သည် လူများအတွက် ၎င်းတို့၏ အင်တာနက် လမ်းကြောင်းကို ကာကွယ်ရန်နှင့် ၎င်းတို့၏ အထောက်အထားများကို အွန်လိုင်းတွင် သီးသန့်ထားရန် အလွယ်ကူဆုံးနှင့် အထိရောက်ဆုံး နည်းလမ်းဖြစ်သည်။ လုံခြုံသော VPN ဆာဗာသို့ ချိတ်ဆက်သည့်အခါတွင်၊ ဟက်ကာများ၊ အစိုးရများနှင့် သင်၏အင်တာနက်ဝန်ဆောင်မှုပေးသူ အပါအဝင် မည်သူမျှ ဝင်ရောက်ကြည့်ရှုနိုင်သည့် ကုဒ်ဝှက်ထားသော ဥမင်လိုဏ်ခေါင်းတစ်ခုမှတစ်ဆင့် သင်၏အင်တာနက်လမ်းကြောင်းသည် ဖြတ်သန်းသွားပါသည်။</li>
        <li>VPN ကိုအသုံးပြုခြင်းသည် သင့် IP လိပ်စာ၊ သင်နှင့် ကမ္ဘာပေါ်ရှိ သင့်တည်နေရာကို ခွဲခြားသတ်မှတ်ပေးသည့် သီးသန့်နံပါတ်ကို ပြောင်းလဲပေးပါသည်။ VPN ဝန်ဆောင်မှုတွင် ဆာဗာများရှိပါက၊ သင်သည် UK၊ ဂျာမနီ၊ ကနေဒါ၊ ဂျပန်၊ သို့မဟုတ် မည်သည့်နိုင်ငံ၌မဆို IP လိပ်စာအသစ်ဖြင့် အင်တာနက်ကို ကြည့်ရှုနိုင်ပါသည်။</li>
        <li>သင်၏ IP လိပ်စာကို VPN တစ်ခုဖြင့် ပြောင်းလဲခြင်းသည် သင့်အား ခြေရာခံလိုသော ဝဘ်ဆိုက်များ၊ အက်ပ်များနှင့် ဝန်ဆောင်မှုများမှ သင့်အထောက်အထားကို အကာအကွယ်ပေးပါသည်။ ကောင်းမွန်သော VPN များသည် သင့်အင်တာနက်ဝန်ဆောင်မှုပေးသူ၊ မိုဘိုင်းဝန်ဆောင်မှုပေးသူနှင့် သင့်လုပ်ဆောင်ချက်ကို အားကောင်းသည့် ကုဒ်ဝှက်စနစ်အလွှာတစ်ခုကြောင့် နားထောင်နေသည့် အခြားမည်သူ့ကိုမဆို တားဆီးပေးပါသည်။</li>
        <li>VPN ကိုအသုံးပြုခြင်းသည် ပက်ကတ်ကို အနံ့ခံခြင်း၊ မိုက်မဲသော Wi-Fi ကွန်ရက်များနှင့် လူအချင်းချင်း အလယ်အလတ်တိုက်ခိုက်မှုများအပါအဝင် ပုံစံများစွာဖြင့် လုံခြုံရေးချိုးဖောက်မှုများမှ ကာကွယ်ပေးပါသည်။ ခရီးသွားများ၊ ဝေးလံခေါင်သီသော အလုပ်သမားများနှင့် ခရီးသွားလာသူ အမျိုးမျိုးတို့သည် အများသူငှာ အခမဲ့ Wi-Fi ကဲ့သို့သော စိတ်မချရသော ကွန်ရက်ပေါ်တွင် ရှိနေသည့်အခါတိုင်း VPN ကို အသုံးပြုပါသည်။</li>
        <li>အကယ်၍ သင်သည် Google၊ Wikipedia၊ YouTube သို့မဟုတ် အခြားဝဘ်ဆိုက်များနှင့် ဝန်ဆောင်မှုများသို့ ဝင်ရောက်ခွင့်ကို ကန့်သတ်ထားသည့် ကမ္ဘာ၏အစိတ်အပိုင်းတစ်ခုတွင် ရှိနေပါက VPN ကိုအသုံးပြုခြင်းဖြင့် အခမဲ့အင်တာနက်ကို ပြန်လည်ရရှိနိုင်မည်ဖြစ်သည်။ ကျောင်း သို့မဟုတ် ရုံးကွန်ရက်များရှိ firewalls များကိုဖြတ်ဖောက်ရန် VPN ကိုသုံးနိုင်သည်။</li>
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