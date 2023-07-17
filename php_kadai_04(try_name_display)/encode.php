<html>
<script>
window.onload = async function() {
    let response = await fetch('encode_sound.php');
    let base64 = await response.text();

    var sound = new Audio("data:audio/wav;base64," + base64);
    sound.play();
}
</script>
<body>
ページを開いたときに、「ピッ」という音が聞こえればテストOKです。<br>
必要に応じてページのリロードをおこなって下さい。
</body>
</html>
