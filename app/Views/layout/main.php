
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Início</title>

    <style>

.logotipo{
    width: 125px;
    height: 125px;
    padding: 10px;
    margin: 5px;
    float: left;
}

#login {
    background: black;
    text-align: center;
}

.formatacao-input {
    width: 200px;
    font-family: "Times New Roman", Times, Serif;
}

.formatacao-buttom{
    width: 120px;
    background: black;
    border: 1px solid rgb(47, 153, 252);
    border-radius: 10px;
    font-family: "Times New Roman", Times, Serif;
    
}

label {
    font-size: 18px;
}

.form-control {
    padding-top: 20px;
    padding-bottom: 20px;
    font-family: "Times New Roman", Times, Serif;
    
}

.conteudo {
    background: white;
    height: 100%;
    padding: 20px;
    font-family: "Times New Roman", Times, Serif;
}

a{
    font-size: 25px;
}

.conteudo-contato {
    background: white;
    height: 200px;
    padding: 80px;
    margin:100px;
    display: block;
    font-size:30px;
    font-family: "Times New Roman", Times, Serif;
}

.config-foto{
    width: 30px;
    height: 30px;
    /* border: 1px solid red; */
}

.config-foto2{
    width: 20px;
    height: 22px;
    /* border: 1px solid red; */
}

.form-cadastro {
    height: 100%;
    padding: 150px;
}

.form-label {
    font-size: 20px;
}

.form-cadastro2 {
    font-family: 'Times New Roman', Times, Serif;
}


    </style>
</head>
<body>
    
<?php echo $this->renderSection('conteudo'); ?> <!-- cria uma area de conteudo -->

</body>
</html>