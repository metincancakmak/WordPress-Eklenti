<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merhaba / Hello</title>
    <script src="app.js"></script>
    <link rel="stylesheet" href="style.css">

    <style>
        .container{
            height: 110px;
            width: 400px;
            position: fixed;
            top: 0;
            right: 0;
            padding: 20px;
            background-color: #f0f0f0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .red{
            background-color: red;
        }
        .green{
            background-color: green;
        }
    </style>

</head>
<body>

    <div class="container " id="container" >
        <h1 id="selamText"> Merhaba Dünya </h1>
            <input type="radio" name="language" value="tr" checked> Türkçe
            <input type="radio" name="language" value="en"> English
            
            <br>
            
            <button onclick="changeColor('red')">Kırmızı</button>
            <button onclick="changeColor('green')">Yeşil</button>
    </div>            

    <script>

        document.addEventListener('DOMContentLoaded', function(){
        var selamText = document.getElementById('selamText');

        var languageRadios = document.getElementsByName('language');

        for(var i = 0; i < languageRadios.length; i++){
            languageRadios[i].addEventListener('change', function(){
                if(this.value === 'tr'){
                    selamText.innerText = 'Merhaba Dünya';
                }
                else if(this.value === 'en'){
                    selamText.innerText = 'Hello World';
                }
                });
            }
        })

        function changeColor(color) {
            var container = document.getElementById('container');
                    container.style.backgroundColor = color;
        }

    </script>
</body>
</html>