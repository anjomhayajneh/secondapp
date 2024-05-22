<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'default') }}</title>
    <!-- أي أكواد أخرى تحتاجها في الرأس -->
<style>
    body{
        height: 150rem;
    }
.container{
    margin-top:35px;
    background-color: gray;
    position: relative;
    width: 100%;
    height: 850px;
}
.child{
    position: sticky;
    width: 150px;
    height: 150px;
}
.ch1{
    top:50px;
    left:50px;
    background-color: red;
}
.ch2{
    top:100px;
    left:100px;
    background-color: rgb(0, 119, 255);
}

.ch3{
    top:150px;
    left:150px;
    background-color: rgb(255, 0, 191);
}
    </style>
</head>

<body>
 <div class="container">
    <div class="child ch1"></div>
    <div class="child ch2"></div>
    <div class="child ch3"></div>

</body>
</html>
