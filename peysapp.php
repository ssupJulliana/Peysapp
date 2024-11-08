<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peys App</title>
    <style>
        #profileImage {
            width: 100%;
            max-width: 300px;
            height: auto;
            border: 5px solid black;
            border-radius: 8px;
            transition: transform 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }
    </style>
</head>
<body>
    <h2>Peys App</h2>

    <form id="form">
        <label for="txtVolume">Select Volume:</label>
        <input type="range" name="txtvolume" id="txtvolume" min="0" max="50"> <br>

        <label for="clrTheme">Select a Color: </label>
        <input type="color" name="clrTheme" id="clrTheme"> <br>

        <button type="button" id="btnSend">Process</button> <br> <br> <br>

        <img src="profile.jpg" alt="Profile Image" id="profileImage">

    <script>
        const colorInput = document.getElementById('clrTheme');
        const volumeSlider = document.getElementById('txtvolume');
        const profileImage = document.getElementById('profileImage');
        const btnSend = document.getElementById('btnSend');

        let selectedZoomLevel = 0.6;

        profileImage.style.transform = `scale(${selectedZoomLevel})`;

        colorInput.addEventListener('input', function() {});

        volumeSlider.addEventListener('input', function() {
            let volume = parseInt(volumeSlider.value);
            selectedZoomLevel = 0.1 + (volume * 2) / 100;
        });

        document.addEventListener('keydown', function(event) {
            if (event.key >= '1' && event.key <= '9') {
                selectedZoomLevel = parseInt(event.key) * 0.1;
                volumeSlider.value = (selectedZoomLevel * 100 - 10) / 2;
            } else if (event.key === '0') {
                selectedZoomLevel = 1;
                volumeSlider.value = 50;
            }
        });

        btnSend.addEventListener('click', function() {
            profileImage.style.transform = `scale(${selectedZoomLevel})`;
            profileImage.style.borderColor = colorInput.value;
        });

        volumeSlider.value = 25;
    </script>
     </form>
</body>
</html>
