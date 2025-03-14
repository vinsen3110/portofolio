<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photobooth</title>
    <link href={{ asset("cv/lib/lightbox/css/lightbox.min.css")}} rel="stylesheet">
    <link href={{ asset("cv/lib/owlcarousel/assets/owl.carousel.min.css")}} rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body { text-align: center; font-family: Arial, sans-serif; transition: background 1s ease-in-out; }
        .photobooth-container { display: flex; flex-direction: row; justify-content: center; align-items: center; gap: 20px; margin-top: 20px;margin-bottom: 50px; }
        .photo-strip {
            width: 15%;
            height: 15%;
            background: white;
            padding: 10px;
            border: 5px solid pink;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            position: relative;
        }
        .photo-frame {
            width: 100%;
            aspect-ratio: 4 / 3;
            background: lightgray;
            margin-bottom: 5px;
            border: 3px solid #ff69b4;
            border-radius: 5px;
            background-size: cover;
            background-position: center;
        }
        .logo-space {
            width: 100%;
            height: 70%;
            background: #ffd1dc;
            text-align: center;
            line-height: 80px;
            font-weight: bold;
            font-size: 18px;
            border-radius: 5px;
            border: none;
        }
        .controls { margin-top: 15px; display: flex; justify-content: center; gap: 10px; flex-wrap: wrap; }
        .countdown {
            font-size: 40px;
            font-weight: bold;
            color: #ff69b4;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 182, 193, 0.7);
            padding: 10px;
            border-radius: 10px;
        }
        .camera-container {
            position: relative;
            display: inline-block;
        }
        video {
            border: 4px solid #ff69b4;
            border-radius: 10px;
            max-width: 100%;
            height: auto;
        }
        button {
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #ff4785;
        }
        @media (max-width: 768px) {
            .photobooth-container {
                flex-direction: column;
                align-items: center;
            }
            .photo-strip {
                width: 100%;
                max-width: 300px;
            }
            .controls {
                flex-direction: row;
                align-items: center;
            }
        }
        .bottom-nav {
            position: fixed;
            bottom: 10px;
            left: 50%;
            width: 80%;
            justify-content: center;
            justify-items: center;
            transform: translateX(-50%);
            display: flex;
            background: rgba(255, 255, 255, 0.203);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            gap: 15px;
            z-index: 9999;
        }
        .nav-item1 {
            text-decoration: none;
            color: #ff69b4;
            font-size: 24px;
            padding: 10px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
            z-index: 9999;
        }
        .nav-item1:hover {
            background: #ffffff;
        }
        @media (max-width: 600px) {
            .bottom-nav {
                width: 90%;
                justify-content: space-around;
            }}
    </style>
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
      
</head>
<body>
    <nav class="bottom-nav">
        <a href="{{route('homepage')}}" class="nav-item1"><i class="fas fa-home"></i></a>
        <a href="{{route('homepage')}}" class="nav-item1"><i class="fas fa-user"></i></a>
        <a href="{{route('homepage')}}" class="nav-item1"><i class="fas fa-code"></i></a>
        <a href="{{route('homepage')}}" class="nav-item1"><i class="fas fa-clipboard"></i></a>
        <a href="{{route('homepage')}}" class="nav-item1"><i class="fas fa-comments"></i></a>
    </nav>
    <h1>MyPhotobooth</h1>
    <p>Abadikan moment mu bersama kami. Posting foto terbaik kamu di instagram :)</p>
    <div class="photobooth-container">
        <div  class="camera-container">
            <video id="camera" autoplay></video>
            <canvas id="canvas" style="display: none;"></canvas>
            <div class="countdown" id="countdown" style="display: none;"></div>
            <div class="controls">
                <button id="takePhoto">Ambil Foto</button>
                <button id="resetPhotos">Reset</button>
                <button id="download" disabled>Download</button>
                <select style=" background-color: #ff69b4;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;" id="frameColor">
                    <option value="#ff69b4">Pink</option>
                    <option value="#add8e6">Biru</option>
                    <option value="#90ee90">Hijau</option>
                    <option value="#9400D3">Ungu</option>
                </select>
                <select style=" background-color: #ff69b4;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 5px;
                cursor: pointer;" id="filter">
                    <option value="none">Normal</option>
                    <option value="sepia">Sepia</option>
                    <option value="grayscale">Grayscale</option>
                    <option value="brightness">Brightness</option>
                    <option value="contrast">Contrast</option>
                </select>
            </div>
        </div>
        <div class="photo-strip" id="photoStrip">
            <div class="photo-frame" id="photo1"></div>
            <div class="photo-frame" id="photo2"></div>
            <div class="photo-frame" id="photo3"></div>
                <img class="logo-space" src="{{asset('cv/img/photobooth.png')}}" alt="">
        </div>
    </div>
    <script>
        const video = document.getElementById('camera');
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');
        const countdownEl = document.getElementById('countdown');
        const frameColorSelect = document.getElementById('frameColor');
        const filterSelect = document.getElementById('filter');
        let photos = [];
        let frameColor = "#ff69b4";
        let currentFilter = "none";

        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => video.srcObject = stream)
            .catch(err => console.error("Akses kamera ditolak!", err));

        frameColorSelect.addEventListener('change', () => {
            frameColor = frameColorSelect.value;
            document.querySelectorAll('.photo-strip, .photo-frame, .logo-space').forEach(frame => {
                frame.style.border = `3px solid ${frameColor}`;
            });
        });

        filterSelect.addEventListener('change', () => {
            currentFilter = filterSelect.value;
            video.style.filter = getCSSFilter(currentFilter);
        });

        function getCSSFilter(filterName) {
            switch (filterName) {
                case "sepia": return "sepia(1)";
                case "grayscale": return "grayscale(1)";
                case "brightness": return "brightness(1.5)";
                case "contrast": return "contrast(1.5)";
                default: return "none";
            }
        }

        function countdown(callback) {
            let count = 3;
            countdownEl.innerText = count;
            countdownEl.style.display = 'block';
            const interval = setInterval(() => {
                count--;
                countdownEl.innerText = count > 0 ? count : '';
                if (count === 0) {
                    clearInterval(interval);
                    countdownEl.style.display = 'none';
                    callback();
                }
            }, 1000);
        }

        function takePhoto() {
            if (photos.length < 3) {
                countdown(() => {
                    canvas.width = video.videoWidth;
                    canvas.height = video.videoHeight;
                    ctx.filter = getCSSFilter(currentFilter);
                    ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
                    const imgData = canvas.toDataURL('image/png');
                    const photoFrame = document.getElementById(`photo${photos.length + 1}`);
                    photoFrame.style.backgroundImage = `url(${imgData})`;
                    photos.push(imgData);
                    if (photos.length === 3) {
                        document.getElementById('download').disabled = false;
                    }
                });
            }
        }

        function downloadPhotos() {
            const photoStrip = document.getElementById('photoStrip');
            html2canvas(photoStrip).then(canvas => {
                const a = document.createElement('a');
                a.href = canvas.toDataURL('image/png');
                a.download = 'photo_strip.png';
                a.click();
            });
        }
        function resetPhotos() {
            photos = [];
            document.querySelectorAll('.photo-frame').forEach(frame => {
                frame.style.backgroundImage = '';
            });
            document.getElementById('download').disabled = true;
        }
        document.getElementById('resetPhotos').addEventListener('click', resetPhotos);
        document.getElementById('takePhoto').addEventListener('click', takePhoto);
        document.getElementById('download').addEventListener('click', downloadPhotos);
        //background
        const colors = [
            "#f5f7fa", "#e3f2fd", "#fce4ec", "#e8f5e9", "#fff3e0",
            "#ede7f6", "#f9fbe7", "#e1f5fe", "#f3e5f5", "#ffebee"
        ];

        function changeBackground() {
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            document.body.style.background = randomColor;
        }

        setInterval(changeBackground, 5000);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
