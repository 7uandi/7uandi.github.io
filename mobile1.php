<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">
	<script src="jquery.min.js"></script>

<head>
    <style>
@import url("https://fonts.googleapis.com/css?family=Muli:300,400,700,900");
html .frame {
  width: 340px;
  height: 620px;
  background: #f7f7f7;
  border-radius: 13px;
  display: flex;
  align-items: flex-end;
  overflow: hidden;
  box-shadow: 0 0 90px 7px #ffbca5;
}

html {
  display: flex;
  justify-content: center;
  align-items: center;
  background: #ffe2d8;
  height: 100vh;
  font-family: "Muli", sans-serif;
}
.bar {
  width: 340px;
  height: 70px;
  background: #fff;
  box-shadow: 0 10px 40px rgba(51, 51, 51, 0.4);
  display: flex;
  align-items: center;
  flex-wrap: nowrap;
  justify-content: space-between;
  flex-direction: row;
  padding: 0 15px;
}

.els-wrap {
  display: flex;
  align-items: center;
  width: 33px;
  background-size: 1200px;
  background-position: 100% 50%;
  color: #333333;
  padding: 0 9px;
  border-radius: 100px;
  overflow: hidden;
  text-decoration: none;
  cursor: pointer;
  transition: width 200ms, padding 200ms, border-radius 300ms, background-position 900ms;
  transition-timing-function: ease-in-out;
}
.els-wrap:hover {
  background-position: 0 50%;
  padding: 3px 13px;
  border-radius: 50px;
}
.els-wrap:hover .icon {
  font-size: 27px;
  margin-right: 10px;
}
.els-wrap:hover .label {
  opacity: 1;
}
.els-wrap:focus {
  background-position: 0 50%;
  padding: 3px 13px;
  border-radius: 50px;
}
.els-wrap:focus .icon {
  font-size: 27px;
  margin-right: 10px;
}
.els-wrap:focus .label {
  opacity: 1;
}
.els-wrap .icon {
  font-size: 33px;
  margin-right: 25px;
  position: relative;
  z-index: 2;
  transition: font-size 250ms, margin-right 200ms;
  transition-timing-function: ease-out;
}
.els-wrap .label {
  font-weight: 600;
  letter-spacing: 0.15em;
  opacity: 0;
  position: relative;
  z-index: 2;
  font-size: 11px;
  transition: opacity 400ms;
  transition-delay: 130ms;
  transition-timing-function: ease-out;
}

.el-0 {
  background-image: radial-gradient(circle at right, #fff, rgb(216,216,255));
}

.el-1 {
  background-image: radial-gradient(circle at right, #fff, rgb(216,216,255));
}

.el-2 {
  background-image: radial-gradient(circle at right, #fff, rgb(255,216,216));
}

.el-3 {
  background-image: radial-gradient(circle at right, #fff, rgb(255,236,216));
}

.el-4 {
  background-image: radial-gradient(circle at right, #fff, rgb(255,255,216));
}

.el-0:hover {
  width: 82.5px;
}

.el-0:focus {
  width: 82.5px;
}

.el-1:hover {
  width: 82.5px;
}

.el-1:focus {
  width: 82.5px;
}

.el-2:hover {
  width: 72.6px;
}

.el-2:focus {
  width: 72.6px;
}

.el-3:hover {
  width: 66px;
}

.el-3:focus {
  width: 66px;
}

.el-4:hover {
  width: 87.45px;
}

.el-4:focus {
  width: 87.45px;
}
    </style>
</head>
<body style="max-width:600px">
<div class='container'>

  <div class='frame'>





    <div class='bar'>
      <a href='#' class='els-wrap el-1'>
        <div class='icon'>
          <i class="far fa-user-circle"></i>
        </div>
        <p class='label'>Profile</p>
      </a>
      <a href='#' class='els-wrap el-2'>
        <div class='icon'>
          <i class="fas fa-align-center"></i>
        </div>
        <p class='label'>Feeds</p>
      </a>
      <a href='#' class='els-wrap el-3'>
        <div class='icon'>
          <i class="far fa-comment-dots"></i>
        </div>
        <p class='label'>Chat</p>
      </a>
      <a href='#' class='els-wrap el-4'>
        <div class='icon'>
          <i class="far fa-bell"></i>
        </div>
        <p class='label'>Updates</p>
      </a>

    </div>
  </div>
</div>

<script>

</script>

</body>
</html>
