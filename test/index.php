<!DOCTYPE html>

<head>
    <style>
        .clipped {
            position: absolute;
            width: 750px;
            height: 300px;
            box-sizing: border-box;
            margin: 0 auto;
            padding: 30px;
            background: url(https://unsplash.it/750/300?image=1056&blur);
            /* -webkit-clip-path: polygon(0 0, 100% 0, 100% 61%, 0% 100%); */
            clip-path: polygon(0 0, 100% 0, 100% 100%, 15% 100%);
        }
        .clipped2 {
            position: absolute;
            width: 750px;
            height: 300px;
            box-sizing: border-box;
            margin: 0 auto;
            padding: 30px;
            background: url(https://unsplash.it/750/300?image=1056&blur);
            /* -webkit-clip-path: polygon(0 0, 100% 0, 100% 61%, 0% 100%); */
            clip-path: polygon(0 0, 85% 0,100% 100%, 0 100%);
        }
        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col-lg-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

    </style>
</head>

<body>
    <div class="row" style="max-height:750px">
        <div style="left:11%"class="clipped2 col-lg-4"></div>
        <div style="right:11%"class="clipped col-lg-4"></div>
    </div>
        
</body>

</html>