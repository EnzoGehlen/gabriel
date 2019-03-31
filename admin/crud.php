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
    case 'deleta':
        @$usr = @$_GET['usr'];
        deleta($tabela, $id, $usr);
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

function deleta($tabela = null, $id = null, $usr = null) {
    include('../conexao.php');
    if(empty($usr)){
        $usr = 'Externo';
    }
    $retrieve = "SELECT * FROM $tabela WHERE id = $id";
    $resultado = $mysqli->query($retrieve);
    $resultado = $resultado->fetch_assoc();
    if ($tabela == 'imoveis'){
        $titulo = $resultado['titulo'];
        $categoria = $resultado['categoria_id'];
        $insert = "INSERT INTO exclusoes (usuario, tabela, id_registro, titulo, categoria_id) VALUES ('$usr', '$tabela', '$id', '$titulo', '$categoria')";
    } else {
        $titulo = $resultado['nome'];
        $insert = "INSERT INTO exclusoes (usuario, tabela, id_registro, titulo, categoria_id) VALUES ('$usr', '$tabela', '$id', '$titulo', '')";
    }
    $sql = "DELETE FROM $tabela WHERE id = '$id'";

    if ($mysqli->query($sql) === TRUE) {

        if ($tabela == 'vendas') {
            header('location: contato_vendas.php');
        } else {
            if ($mysqli->query($insert)=== TRUE){

            } else {
                echo "Erro: " . $mysqli->error;
            }
            echo "Record deleted successfully";
            header('location: ' . $tabela . '.php');
        }
    } else {
        echo "Erro: " . $mysqli->error;
    }
}

function adiciona($tabela = null) {
    include('../conexao.php');
    switch ($tabela) {
        case 'categorias':
            $nome = $_POST['nome'];
            
            $img1 = basename($_FILES["img"]['name']);
            @$img2 = basename($_FILES["img_hover"]['name']);
           

            $target_dir = "../images/categorias/";
            $target_file1 = $target_dir . basename($_FILES["img"]['name']);
            @$target_file2 = $target_dir . basename($_FILES["img_hover"]['name']);
            $uploadOk = 1;
            $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
            $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));;
// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["img"]["tmp_name"]);
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
                if ((move_uploaded_file($_FILES["img"]["tmp_name"], $target_file1))) {
                    echo "The file " . basename($_FILES["img"]['name']) . " has been uploaded.<br>";
                } else {
                    echo "Sorry, there was an error uploading your file.<br>";
                }
                if (( move_uploaded_file($_FILES["img_hover"]["tmp_name"], $target_file2))) {
                    echo "The file " . basename($_FILES["img_hover"]['name']) . " has been uploaded.<br>";
                } else {
                    echo "Sorry, there was an error uploading your file.<br>";
                }
                
            }
            
            $sql = ("INSERT INTO categorias (nome, img, img_hover) VALUES ('$nome', '$img1', '$img2')");

            break;



        case 'imoveis':
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $infra = $_POST['infra'];
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];
            $bairro_id = $_POST['bairro_id'];
            $categoria_id = $_POST['categoria_id'];
            @$destaque = $_POST['destaque'];


            $target_dir = "../images/imoveis/";


            $uploadOk = 1;

// Check if image file is a actual image or fake image
            for ($x = 1; $x < 7; $x++) {
                @$imagem{$x} = basename($_FILES["imagem$x"]["name"]);

                $imageFileType1 = strtolower(pathinfo($target_file{$x}, PATHINFO_EXTENSION));
                $name = rand();
                $arquivo = explode(".", $imagem{$x});
                $imagem{$x} = $name . "." . $arquivo[1];
                $_FILES["imagem$x"]["name"] = $imagem{$x};
                @$target_file{$x} = $target_dir . basename($_FILES["imagem$x"]["name"]);
                echo "<br>AAAAAAAAAAAAAAAAAAAAA <br> " . $_FILES["imagem$x"]["name"] . "<br>";
                if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["imagem$x"]["tmp_name"]);
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
                    if (move_uploaded_file($_FILES["imagem$x"]["tmp_name"], $target_file{$x})) {
                        echo "The file " . basename($_FILES["imagem{$x}"]["name"]) . " has been uploaded.<br>";
                    } else {
                        echo "Sorry, there was an error uploading your file.<br>";
                    }
                }
                $imagem{$x} = $_FILES["imagem$x"]["name"];
            }



            $sql = ("INSERT INTO imoveis (titulo, descricao, infraestrutura, latitude, longitude,  imagem1, imagem2, imagem3, imagem4, imagem5, imagem6, destaque, bairro_id, categoria_id) VALUES ('$titulo', '$descricao','$infra', '$latitude','$longitude', '$imagem[1]', '$imagem[2]', '$imagem[3]', '$imagem[4]', '$imagem[5]', '$imagem[6]', '$destaque', '$bairro_id', '$categoria_id')");

            break;

        case 'contato':
            $titulo = $_POST['titulo'];
            $email = $_POST['email'];
            $nome = $_POST['nome'];
            $mensagem = $_POST['mensagem'];
            $op = $_POST['op'];
            $result = $_POST['result'];
            $op = explode('+', $op);


            if (!($result == ($op[1] + $op[0]))) {
                echo "<script> alert('Soma incorreta!')</script> ";
                echo "<script>window.location.replace('../index.php');</script>";
                exit;
            }




            $sql = ("INSERT INTO contato (titulo, email, nome,  mensagem) VALUES ('$titulo', '$email', '$nome', '$mensagem')");
            break;
        case 'diferenciais':
            $titulo = $_POST['titulo'];
            $icone = $_POST['icone'];
            $descricao = $_POST['descricao'];
            $sql = ("INSERT INTO diferenciais (titulo, icone_id,  descricao) VALUES ('$titulo', '$icone', '$descricao')");
            break;

        case 'g_users':
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $imagem = basename($_FILES["imagem"]["name"]);
            $target_dir = "../images/profile/";
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

            $sql = ("INSERT INTO g_users (nome, email, senha, imagem) VALUES ('$nome', '$email', '$senha', '$imagem')");

            $tabela = "index";
            break;

        case 'vendas':
            $nome = $_POST['nome'];
            @$cpf = $_POST['cpf'];
            @$cidade_pessoa = $_POST['cidade_pessoa'];
            $email = $_POST['email'];
            @$estado_pessoa = $_POST['estado_pessoa'];
            @$cep_pessoa = $_POST['cep_pessoa'];
            $telefone = $_POST['telefone'];
            @$telefone2 = $_POST['telefone2'];
            $endereco_imovel = $_POST['endereco_imovel'];
            $numero = $_POST['numero'];
            $bairro_imovel = $_POST['bairro_imovel'];
            $cidade_imovel = $_POST['cidade_imovel'];
            $estado_imovel = $_POST['estado_imovel'];
            $cep_imovel = $_POST['cep_imovel'];
            $descricao = $_POST['descricao'];
            $img1 = basename($_FILES["img1"]['name']);
            @$img2 = basename($_FILES["img2"]['name']);
            @$img3 = basename($_FILES["img3"]['name']);

            $op = $_POST['op'];
            $result = $_POST['result'];
            $op = explode('+', $op);


            if (!($result == ($op[1] + $op[0]))) {
                echo "<script> alert('Soma incorreta!')</script> ";
                echo "<script>window.location.replace('../index.php');</script>";
                exit;
            }




            $target_dir = "../images/contato_venda/$nome";
            $target_file1 = $target_dir . basename($_FILES["img1"]['name']);
            @$target_file2 = $target_dir . basename($_FILES["img2"]['name']);
            @$target_file3 = $target_dir . basename($_FILES["img3"]['name']);
            $uploadOk = 1;
            $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
            $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
            $imageFileType3 = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["img1"]["tmp_name"]);
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
                if ((move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file1))) {
                    echo "The file " . basename($_FILES["img1"]['name']) . " has been uploaded.<br>";
                } else {
                    echo "Sorry, there was an error uploading your file.<br>";
                }
                if (( move_uploaded_file($_FILES["img2"]["tmp_name"], $target_file2))) {
                    echo "The file " . basename($_FILES["img2"]['name']) . " has been uploaded.<br>";
                } else {
                    echo "Sorry, there was an error uploading your file.<br>";
                }
                if (( move_uploaded_file($_FILES["img3"]["tmp_name"], $target_file3))) {
                    echo "The file " . basename($_FILES["img3"]['name']) . " has been uploaded.<br>";
                } else {
                    echo "Sorry, there was an error uploading your file.<br>";
                }
            }

            $sql = ("INSERT INTO vendas (nome_pessoa,  cpf_pessoa, cidade_pessoa, estado_pessoa, cep, email_pessoa, telefone_pessoa, telefone_pessoa2, endereco_imovel, numero_imovel, bairro_imovel, cidade_imovel, estado_imovel, cep_imovel, descricao_imovel, img1, img2, img3) "
                    . "VALUES ('$nome', '$cpf', '$cidade_pessoa','$estado_pessoa', '$cep_pessoa','$email', '$telefone', '$telefone2', '$endereco_imovel', '$numero', '$bairro_imovel', '$cidade_imovel', '$estado_imovel', '$cep_imovel', '$descricao', '$img1', '$img2', '$img3')");

            break;
    }
    if ($mysqli->query($sql) === TRUE) {
        if ($tabela == 'contato' or $tabela == 'vendas') {
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
        case 'categorias':
            $nome = $_POST['nome'];
            $id = $_POST['id'];
            
            $img1 = basename($_FILES["img"]['name']);
            @$img2 = basename($_FILES["img_hover"]['name']);
           
            if(empty($img1)){
                $img1 = $_POST['imgg'];
            } else if (empty($img2)){
                $img2 = $_POST['imgg_hover'];
            }

            $target_dir = "../images/categorias/";
            $target_file1 = $target_dir . basename($_FILES["img"]['name']);
            @$target_file2 = $target_dir . basename($_FILES["img_hover"]['name']);
            $uploadOk = 1;
            $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
            $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));;
// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["img"]["tmp_name"]);
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
                if ((move_uploaded_file($_FILES["img"]["tmp_name"], $target_file1))) {
                    echo "The file " . basename($_FILES["img"]['name']) . " has been uploaded.<br>";
                } else {
                    echo "Sorry, there was an error uploading your file.<br>";
                }
                if (( move_uploaded_file($_FILES["img_hover"]["tmp_name"], $target_file2))) {
                    echo "The file " . basename($_FILES["img_hover"]['name']) . " has been uploaded.<br>";
                } else {
                    echo "Sorry, there was an error uploading your file.<br>";
                }
                
            }
            
            
            $sql = ("UPDATE categorias SET nome = '$nome', img = '$img1', img_hover = '$img2' WHERE id = $id");
            break;




        case 'imoveis':
            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $infra = $_POST['infra'];
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];
            $bairro_id = $_POST['bairro_id'];
            $categoria_id = $_POST['categoria_id'];
            $destaque = $_POST['destaque'];
            $target_dir = "../images/imoveis/";
            for ($x = 1; $x < 7; $x++) {
                @$imagem{$x} = basename($_FILES["imagem$x"]["name"]);
                if (empty($imagem{$x})) {
                    $imagem{$x} = $_POST["imagemm$x"];
                    $name = $imagem{$x};
                    //$name = explode('.',$name, 0);
                } else {
                    $name = rand();


                    $arquivo = explode(".", $imagem{$x});
                    $imagem{$x} = $name . "." . $arquivo[1];
                    $_FILES["imagem$x"]["name"] = $imagem{$x};

                    echo "<br> AAAAAAAAAAA <br> $imagem{$x} <br>";
                    @$target_file{$x} = $target_dir . basename($_FILES["imagem$x"]["name"]);
                    //echo $target_file{$x};exit;
                    $imageFileType1 = strtolower(pathinfo($target_file{$x}, PATHINFO_EXTENSION));
                    echo "<br>AAAAAAAAAAAAAAAAAAAAA <br> " . $_FILES["imagem$x"]["name"] . "<br>";
                    if (isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["imagem$x"]["tmp_name"]);
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
                        if (move_uploaded_file($_FILES["imagem$x"]["tmp_name"], $target_file{$x})) {
                            echo "The file " . basename($_FILES["imagem{$x}"]["name"]) . " has been uploaded.<br>";
                        } else {
                            echo "Sorry, there was an error uploading your file.<br>";
                        }
                    }
                }
                $explode = explode('.',$imagem{$x});
                if($explode[1] == ''){
                    $imagem{$x} = '';
                }
            }

            $sql = ("UPDATE imoveis SET titulo = '$titulo',  descricao = '$descricao', infraestrutura = '$infra', latitude = '$latitude', longitude = '$longitude', bairro_id = '$bairro_id',  categoria_id = '$categoria_id', destaque = '$destaque',  imagem1 = '$imagem[1]', imagem2 = '$imagem[2]', imagem3 = '$imagem[3]', imagem4 = '$imagem[4]', imagem5 = '$imagem[5]', imagem6 = '$imagem[6]' WHERE id = $id");
            break;



        case 'g_users':
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $imagem = basename($_FILES["imagem"]["name"]);
            if (empty($imagem)) {
                $imagem = $_POST['imagemm'];
            }
            $target_dir = "../images/profile/";
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

            $sql = ("UPDATE g_users SET nome = '$nome',  email = '$email', senha = '$senha', imagem ='$imagem' WHERE id = '$id'");

            $tabela = "index";
            break;

        case 'diferenciais':
            $titulo = $_POST['titulo'];
            $icone = $_POST['icone'];
            $descricao = $_POST['descricao'];
            $sql = ("UPDATE diferenciais SET titulo = '$titulo', icone_id = '$icone',  descricao = '$descricao'");
            break;
    }

    if ($mysqli->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location: ' . $tabela . '.php');
    } else {
        echo "Erro ao salvar: " . $mysqli->error;
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

function login($id, $senha) {
    include('../conexao.php');

    $sql = ("SELECT * FROM g_users WHERE email = '$id'");

    $result = $mysqli->query($sql);
    $reg = mysqli_num_rows($result);

    if ($reg == 1) {
        $dados = $result->fetch_assoc();
        if ($senha == $dados['senha']) {
            @session_start();
            $_SESSION["id_usuario"] = $dados["id"];
            $_SESSION["nome_usuario"] = $dados["nome"];
            header('location: index.php');
        } else {
            echo "<script> alert('Email ou senha incorreto')</script> ";
            echo "<script>window.location.replace('index.php');</script>";
        }
    } else {
        echo "<script> alert('Email ou senha incorreto')</script> ";
        echo "<script>window.location.replace('index.php');</script>";
    }
}

function logout() {
    session_start();
    session_destroy();
    header('location: index.php');
}
