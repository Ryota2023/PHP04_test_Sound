<?php
$data = file_get_contents('sound/beep_04.wav');
$base64 = base64_encode($data);
echo $base64;
?>

<html>
<script>
window.onload = async function() {
    try {
        let response = await fetch('encode_sound.php');
        let base64 = await response.text();

        var sound = new Audio("data:audio/wav;base64," + base64);
        sound.play();
    } catch (error) {
        console.error('An error occurred:', error);
    }
}
</script>
<body>
ページを開いたときに、「ピッ」という音が聞こえればテストOKです。<br>
必要に応じてページのリロードをおこなって下さい。
</body>
</html>
