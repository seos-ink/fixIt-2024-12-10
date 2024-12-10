<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FixIt - Site de Programação</title>
    <link rel="stylesheet" href="CSS/mainstyle.css">
</head>
<body>
    <header>
    <!-- Incluir o header do site de programação -->
    <?php
    include("_inc/header.php");
    ?>
    </header>
    
    <main>
        <section class="home-section">
            <h1>Bem-vindo ao FixIt!</h1>
            <p>FixIt é um site de programação que ajuda pessoas a encontrar soluções para problemas de programação com mais facilidade.</p>
            <a href="sobre.php" style="color: antiquewhite; text-decoration: none;">Saiba mais</a>
        </section>
        
    
        <div class="container">
            <div class="card">
                <img src="https://picsum.photos/300/200
" alt="Imagem 1">
                <h2>Título da Imagem 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel vestibulum purus, vel consectetur neque. Nulla facilisi.</p>
    
            </div>

            <div class="card">
                <img src="https://picsum.photos/300/200
" alt="Imagem 1">
                <h2>Título da Imagem 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel vestibulum purus, vel consectetur neque. Nulla facilisi.</p>
    
            </div>

            <div class="card">
                <img src="https://picsum.photos/200/200
" alt="Imagem 1">
                <h2>Título da Imagem 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel vestibulum purus, vel consectetur neque. Nulla facilisi.</p>
    
            </div>
        </div>

        <div class="box-1"></div>
            
        
    </main>
    





    <?php
    // Incluir o footer do site de programação
    include("_inc/footer.php");
    ?>


</body>
</html>