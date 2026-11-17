<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        Mon <span>Blog</span>
    </header>

    <article>
        <h2>Mon Blog Personnel : <br>
            <span>Développer &Partager</span> </h2>
            <p>Découvrez mes derniers articles sur le développement web,<br>
                 l'architecture logicielle et les bonnes pratiques d'intégration UI/UX.</p>
    </article>

          <div class="article-introduction">    
        <h4>Dernières publications</h4>
    </div>
  
    <div class="grille-articles">

    <?php foreach ($projets  as $article): ?>
        <div class="carte-article">
    <span class="etiquette-categorie <?php if ($article['color'] == 'bleu'): ?> bleu <?php elseif ($article['color'] == 'rose'): ?>rose
     <?php else: ?>vert <?php endif; ?>"> <?= htmlspecialchars($article['categorie_libelle']) ?> </span>
            <div class="carte-contenu">
                <h3><a href="article.php?id=<?= $article['id'] ?>"><?= htmlspecialchars($article['titre']) ?></a></h3>
                <p><?= htmlspecialchars(mb_substr($article['contenu'], 0, 100)) ?>...</p>
                <div class="carte-meta">
                    <span><?= date('d M Y', strtotime($article['date_creation'])) ?></span>
                    <span>5 min</span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>


