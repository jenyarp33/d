<html>
<head><title></title>
<meta name="referrer" content="no-referrer">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head> 
<body oncontextmenu="return false"> 


<script type="text/javascript"> function foo() { $("#text1").click(); } setTimeout(foo, 100); </script>

<div style="display:none">
  <a href="index.php" id="test"><span id="text1"></span>index.php</a> 
  <a href="javascript:window.location.replace('.')" id="test"><span id="text"></span>Show message</a>
</div>


 <style>
        html, body{
            height: 100%;
            margin: 0;
            background-color: #f2fbfd;
        }
        .center{
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            z-index: 100;
            width:82px;
            height:82px;
            margin:auto;
        }
        @keyframes rotate {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }
        .center #img1 {
            position: relative;
            animation: rotate 1.5s linear infinite;
        }
        .center #img2{
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            z-index: 10;
        }
    </style>

<div class="center">
    <img id="img1" src="data:image/png;base64,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">
    <img id="img2" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAnCAMAAABHaIrNAAAAjVBMVEUAAAB6uvN6uvN6uvN6uvR6uvN6uvN6uvN6uvN6uvN6uvN6uvR6uvR6uvN6uvR6uvN6uvN6uvN6uvN6uvR6uvN6uvN6uvN6uvN6uvN6uvN6uvR6uvR6uvN6uvN6uvN6uvN6uvN6uvN6uvR6uvR6uvN6uvN6uvN6uvN6uvN6uvN6uvN6uvN6uvN6uvN6uvMQlurlAAAALnRSTlMAA/prBdv0lt+CezUMHQiZ44p2S+jUzrFEQBkWyaOQW0gpJBGnUe3EuJ8vu3BiKT4UFgAAAh9JREFUOMuFk4mWgjAMRdsCRTZBBkQWEcVd5/3/500qKrI45Li0eZfwmpOyYXDG5mloJol/d3S1bWOUzm0Dz4it/CvPOVf0JgCOiaVp1lkCwWGU569kCRha1qwzLQZs4scMb9M0cy+AWdNeBSVdf8gr2lsow8cZpKa2bRULID89uoqAaBkAImR61+MFEZ23Q18FjE3N3EOM2barcdeA2cPPMLzHsl7i1tFUqyA9xjvFRao80NcRcHq8bkBrU8RoWDZ7+j0Ju+eGWdhz/dOL2L9xa9A4d4MlKW/axAeSh1nH+W8cSCEX3rueD6zdrxO0gATFkew/3y60LtGNLPeqMsCzmyke556IevHkEyRM/3eim1H9FTgwtpOqz98HtO22j4IOTk2aDvW8J8WVlY2lfi2NJqfv6QaNXUbH2cFpiJcoyZE1glfCGCYt+MzGegT/wWw+SPrke4XIHcXdwWGX5N01QPdnEqdcCrFlLIR0mM4nzHDGCyT0Py8QpY+Mih7epud7yJ2SshjC2vF/q7s/BURFAn3yBJDxbe8vQkftW5zKenfzsj7PgGClpIe+KdDEkTdQpfCHbDZCZHqf/XY2Wmjb4YpWOTVqBUMnebtjnrVel9qqZi3deQ4zmlDC6R13ceoi7e4VdQG5YpWqvgAOL+HrXcgMSOeKmOje9I3zuwCRjeXrtk3y2wAq2tmbqm9ACOyf9DTvnQC/pSd517RGlT9hIDFE+o03QwAAAABJRU5ErkJggg==">
</div>
</body> 
</html>   