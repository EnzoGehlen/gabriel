<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    @$action = $_POST['action'];
    @$tabela = $_POST['tabela'];
} else {

    $action = $_GET['action'];
    @$tabela = $_GET['tabela'];
    @$id = $_GET['id'];
}



switch ($action) {
    case 'deleta': deleta($tabela, $id);
        break;
    case 'adiciona': adiciona($tabela);
        break;
    case 'edita': edita($tabela);
        break;
    case 'lixo': moveEmail();
        break;
    case 'excluiEmail': excluiEmail();
        break;
    case 'login':
        $id = $_POST['user'];
        $senha = $_POST['pass'];
        login($id, $senha);
        break;
    case 'logout': logout();

        break;
}

function deleta($tabela = null, $id = null) {
    include('../conexao.php');

    $sql = "DELETE FROM $tabela WHERE id = '$id'";


    if ($mysqli->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location: ' . $tabela . '.php');
    } else {
        echo "Erro: " . $mysqli->error;
    }
}

function adiciona($tabela = null) {
    include('../conexao.php');
    switch ($tabela) {
        case 'bairros':
            $nome = $_POST['nome'];
            $sql = ("INSERT INTO bairros (nome) VALUES ('$nome')");

            break;



        case 'imoveis':
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];
            $bairro_id = $_POST['bairro_id'];
            $destaque = $_POST['destaque'];
            $imagem = basename($_FILES["imagem"]["name"]);


            $target_dir = "../images/imoveis/";
            $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["imagem"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
                    echo "The file " . basename($_FILES["imagem"]["name"]) . " has been uploaded.<br>";
                } else {
                    echo "Sorry, there was an error uploading your file.<br>";
                }
            }


            $sql = ("INSERT INTO imoveis (titulo, descricao, latitude, longitude,  imagem, destaque, bairro_id) VALUES ('$titulo', '$descricao', '$latitude','$longitude', '$imagem', '$destaque', '$bairro_id')");

            break;

        case 'contato':
            $titulo = $_POST['titulo'];
            $email = $_POST['email'];
            $nome = $_POST['nome'];
            $mensagem = $_POST['mensagem'];



            $sql = ("INSERT INTO contato (titulo, email, nome,  mensagem) VALUES ('$titulo', '$email', '$nome', '$mensagem')");
            
    }
    if ($mysqli->query($sql) === TRUE) {
        if ($tabela == 'contato') {
            echo "<script> alert('Sucesso!')</script> ";
            echo "<script>window.location.replace('../index.php');</script>";
        } else {
            header('location: ' . $tabela . '.php');
        }
        echo "Record deleted successfully";
    } else {
        echo "Erro ao salvar: " . $mysqli->error;
    }
}

function edita($tabela = null) {
    include('../conexao.php');

    switch ($tabela) {
        case 'bairros':
            $nome = $_POST['nome'];
            $id = $_POST['id'];
            $sql = ("UPDATE bairros SET nome = '$nome' WHERE id = $id");
            break;




        case 'imoveis':
            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];
            $bairro_id = $_POST['bairro_id'];
            $destaque = $_POST['destaque'];
            $imagem = basename($_FILES["imagem"]["name"]);
            if (empty($imagem)) {
                $imagem = $_POST['imagemm'];
            }

            $target_dir = "../images/imoveis/";
            $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["imagem"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
                    echo "The file " . basename($_FILES["imagem"]["name"]) . " has been uploaded.<br>";
                } else {
                    echo "Sorry, there was an error uploading your file.<br>";
                }
            }

            $sql = ("UPDATE imoveis SET titulo = '$titulo',  descricao = '$descricao', latitude = '$latitude', longitude = '$longitude', bairro_id = '$bairro_id', destaque = '$destaque',  imagem = '$imagem' WHERE id = $id");
            break;



        case 'g_users':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = ("UPDATE g_users SET nome = '$nome',  email = '$email', senha = '$senha'");

            $tabela = "index";
            break;


            if ($mysqli->query($sql) === TRUE) {
                echo "Record deleted successfully";
                header('location: ' . $tabela . '.php');
            } else {
                echo "Erro ao salvar: " . $mysqli->error;
            }
    }
}

function moveEmail() {
    include('../conexao.php');
    $sql = "SELECT * FROM contato WHERE lixo != true";
    $result = $mysqli->query($sql);


    while ($movidos = $result->fetch_assoc()) {
        $x = $movidos['id'];
        @$id = $_POST["$x"];
        $moveu = ("UPDATE contato SET lixo = true WHERE id = $id");
        $mysqli->query($moveu);
    }

    header('location: email.php');
}

function excluiEmail() {
    include('../conexao.php');
    $sql = "SELECT * FROM contato ";
    $result = $mysqli->query($sql);


    while ($movidos = $result->fetch_assoc()) {
        $x = $movidos['id'];
        @$id = $_POST["$x"];
        $moveu = ("DELETE FROM contato WHERE id = $id");
        $mysqli->query($moveu);
    }

    header('location: email.php');
}
