<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love note to my baby</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            min-height: 100svh;
            margin: 0;
        }
        /* Main container to control size and responsiveness */
        .insta-post {
            width: 100%;
            max-width: 480px;
            aspect-ratio: 1 / 1;
            position: relative;
            overflow: hidden;
            margin: auto;
        }

        /* Background image styling */
        .background-image {
            width: 100%;
            height: 100%;
            background-image: url('{{ asset("assets/img/lovenotesbg.png") }}');
            background-size: cover;
            background-position: center;
            filter: brightness(0.6);
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        /* Centered white box overlay for text */
        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            max-height: 70%;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            padding: 10px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #333;
            overflow-y: auto;
            z-index: 2;
            box-sizing: border-box;
        }


        .text-overlay {
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
            font-size: clamp(10px, 2vw, 14px);
        }

        .text-overlay p {
            margin: 0;
        }

        /* Heart icon styling (positioned on top of the text overlay)*/
        .heart-icon {
            position: absolute;
            top: calc(50% - 33%);
            right: 5%;
            font-size: 48px;
            color: red;
            z-index: 3;
            transform: rotate(30deg);
        }

    </style>
</head>
<body>
    <!-- Main post container -->
    <div class="insta-post">
        <div class="background-image"></div> <!-- Background image -->

        <!-- White text overlay container -->
        <div class="text-overlay">
            <p>
             <strong>
                {{ $lovenote->name }}
                {{ $lovenote->age > 0 ? $lovenote->age . ' years' : '' }}
                {{ ($lovenote->gender && strtolower($lovenote->gender) !== 'none') ? $lovenote->gender : '' }}
              </strong>
            <p>
                {!! $lovenote->message !!}
            </p>
        </div>

        <!-- Heart icon (optional) -->
        <div class="heart-icon">❤️</div>
    </div>
</body>
</html>
