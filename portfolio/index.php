

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Mon Portfolio</h1>
    </header>

    <main>
        <div class="acceuil">  
              <h2>
             <span>Développer & Partager</span> 
            </h2>
            <p>Je suis une développeuse web débutante. Je suis actuellement en formation <br>
                 et j'apprends à créer des sites web.</p>
</div>
      
        <h3>Mes projets</h3>

        <section class="projets">

            <?php foreach ($projets as $pro): ?>

            
                    <div class="contenu">

                        <?php if ($pro["featured"] == true): ?>
                            <small class="badge">⭐ À la une</small>
                        <?php endif; ?> <br>
<span class="badge<?php if ($pro["color"] == "bleu"): ?> bleu <?php else: ?> vert <?php endif; ?>">
 <?= htmlspecialchars($pro[ 'categorie_libelle'])?></span>
                        <h3>
                            <?= htmlspecialchars($pro["titre"]) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($pro["description"]) ?>
                        </p>


                    </div>

                </article>

            <?php endforeach; ?>

        </section>
    </main>

</body>
</html>