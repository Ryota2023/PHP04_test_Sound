<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
</head>
<body>
    <!-- Other menu.php content -->

    <audio id="beep" src="sound/beep_04.wav" preload="auto"></audio>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var audioElement = document.getElementById('beep');
            audioElement.play();
        });
    </script>
</body>
</html>
