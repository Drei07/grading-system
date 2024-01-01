
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
</head>
<style>
body {
  display: flex;
  width: 100%;
  height: 100vh;
  background: #222;
  justify-content: center;
  align-items: center;
}
body .circle {
  width: 325px;
  height: 325px;
  display: block;
  background: #fff;
  border-radius: 500%;
  position: relative;
  -webkit-animation: rotation 2s linear infinite;
          animation: rotation 2s linear infinite;
}
@-webkit-keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
body .circle .inner {
  width: 200px;
  height: 200px;
  background: #222;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  border-radius: 100%;
  box-shadow: 0 -130px 0 -75px #222;
  -webkit-animation: switch 8s ease-in-out infinite;
          animation: switch 8s ease-in-out infinite;
}
@-webkit-keyframes switch {
  0% {
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    width: 200px;
    height: 200px;
    box-shadow: 0 -130px 0 -75px #222;
  }
  25% {
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    width: 200px;
    height: 200px;
    box-shadow: 0 -130px 0 -75px #222;
  }
  50% {
    top: calc(100% - 55px);
    width: 50px;
    height: 50px;
    box-shadow: 0 -130px 0 75px #222;
    transform: translateX(-50%) translateY(0);
  }
  75% {
    top: calc(100% - 55px);
    width: 50px;
    height: 50px;
    box-shadow: 0 -130px 0 75px #222;
    transform: translateX(-50%) translateY(0);
  }
  100% {
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    width: 200px;
    height: 200px;
    box-shadow: 0 -130px 0 -75px #222;
  }
}
@keyframes switch {
  0% {
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    width: 200px;
    height: 200px;
    box-shadow: 0 -130px 0 -75px #222;
  }
  25% {
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    width: 200px;
    height: 200px;
    box-shadow: 0 -130px 0 -75px #222;
  }
  50% {
    top: calc(100% - 55px);
    width: 50px;
    height: 50px;
    box-shadow: 0 -130px 0 75px #222;
    transform: translateX(-50%) translateY(0);
  }
  75% {
    top: calc(100% - 55px);
    width: 50px;
    height: 50px;
    box-shadow: 0 -130px 0 75px #222;
    transform: translateX(-50%) translateY(0);
  }
  100% {
    top: 50%;
    transform: translateX(-50%) translaxateY(-50%);
    width: 200px;
    height: 200px;
    box-shadow: 0 -130px 0 -75px #222;
  }
}
</style>
<body>
    <div class='circle'>
        <div class='inner'></div>
      </div>
</body>
</html>

