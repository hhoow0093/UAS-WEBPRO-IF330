<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<style>
.loader {
    background: radial-gradient(#ffffff, #ffffff);
    bottom: 0;
    left: 0;
    overflow: hidden;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 99999;
    opacity: 1;
    transition: opacity 0.5s ease-in-out;
}

    .loader-inner {
        bottom: 0;
        height: 60px;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0;
        width: 100px;
    }

    .loader-line-wrap {
        animation:
            spin 2000ms cubic-bezier(.175, .885, .32, 1.275) infinite;
        box-sizing: border-box;
        height: 50px;
        left: 0;
        overflow: hidden;
        position: absolute;
        top: 0;
        transform-origin: 50% 100%;
        width: 100px;
    }

    .loader-line {
        border: 4px solid transparent;
        border-radius: 100%;
        box-sizing: border-box;
        height: 100px;
        left: 0;
        margin: 0 auto;
        position: absolute;
        right: 0;
        top: 0;
        width: 100px;
    }

    .loader-line-wrap:nth-child(1) {
        animation-delay: -50ms;
    }

    .loader-line-wrap:nth-child(2) {
        animation-delay: -100ms;
    }

    .loader-line-wrap:nth-child(3) {
        animation-delay: -150ms;
    }

    .loader-line-wrap:nth-child(4) {
        animation-delay: -200ms;
    }

    .loader-line-wrap:nth-child(5) {
        animation-delay: -250ms;
    }

    .loader-line-wrap:nth-child(1) .loader-line {
        border-color: #125A95;
        height: 90px;
        width: 90px;
        top: 7px;
    }

    .loader-line-wrap:nth-child(2) .loader-line {
        border-color: #009bb3;
        height: 76px;
        width: 76px;
        top: 14px;
    }

    .loader-line-wrap:nth-child(3) .loader-line {
        border-color: #125A95;
        height: 62px;
        width: 62px;
        top: 21px;
    }

    .loader-line-wrap:nth-child(4) .loader-line {
        border-color: #009bb3;
        height: 48px;
        width: 48px;
        top: 28px;
    }

    .loader-line-wrap:nth-child(5) .loader-line {
        border-color: #125A95;
        height: 34px;
        width: 34px;
        top: 35px;
    }

    @keyframes spin {

        0%,
        15% {
            transform: rotate(0);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
<div class="loader">
    <div class="loader-inner">
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
    </div>
</div>

<body>
    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
<script src="/js/index.js"></script>
<script>
    window.onload = function() {
        setTimeout(function() {
            document.querySelector('.loader').style.opacity = "0";
            setTimeout(function() {
                document.querySelector('.loader').style.display = "none";
            }, 500); // Wait for the transition to complete
        }, 2000);
    };
</script>

</html>
