<?
 
 include 'cadastro.php';


//conexão com o banco de dados
$conn = mysqli_connect("localhost", "seu_usuario", "sua_senha","seu_banco_de_dados");

// Verifica se a conexão foi bem sucedida
if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}

// Consulta o banco de dados para obter os artigos mais recentes
$sql = "SELECT * FROM  artigos ORDER BY data_publicacao DESC LLIMIT 10";
$resultado = mysqli_query($conn, $sql);


// Fecha a conexão com o banco de dados
mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Site PHP</title>
</head>
<body>

    <h1>Bem-vindo ao site!</h1>

    <h2>Artigos recentes</h2>


    <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
        <h3><?php echo $row['titulo']; ?></h3>
        <p><?php echo $row['conteudo']; ?></p>
        <p>Publicado em: <?php echo $row['data_publicacao'];?></p>
       <?php endwhile; ?>
       
</body>      
</html>
