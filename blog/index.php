<?php
require("../scripts/addHead.php");
require('../scripts/addHeader.php');
require('../scripts/links.php');
$linksArr["Blog"] = "./";
$stylesheets["mainStyle"] = "../css/blog.css";
$keywords = [];

addHead("Blog", $faviconLink, $description, $keywords, $stylesheets);
addHeader($linksArr, $contactLink, $assets);

echo <<<HTML
<main class="blog-container">
    <section class="glossary">
        <h2>Glossaire</h2>
        <div class="glossary-grid">
            <article class="glossary-item">
                <h3>BAT</h3>
                <p>Bon à tirer, ordre donné par l’auteur de procéder au tirage après correction et contrôle des dernières épreuves.</p>
            </article>
            <article class="glossary-item">
                <h3>Manuscrit</h3>
                <p>Texte original ou copie d’un ouvrage écrit à la main. On parle également de tapuscrit quand il s’agit d'un texte tapé sur ordinateur via un logiciel de traitement de texte.</p>
            </article>
			<article class="glossary-item">
                <h3>PAO</h3>
                <p>Publication assistée par ordinateur, processus de création et de mise en page de documents à publier par impression ou en ligne, par le biais d’outils et applications informatiques spécialisés.</p>
            </article>
			<article class="glossary-item">
                <h3>Épreuve</h3>
                <p>Texte imprimé ou composition qui présente un état provisoire du travail et qui sera soumis à correction avant le tirage définitif.</p>
            </article>
			<article class="glossary-item">
                <h3>Correction</h3>
                <p>Action de corriger les épreuves, d’indiquer les fautes de composition, d’effectuer les modifications nécessaires sur un document destiné à l’impression.</p>
            </article>
			<article class="glossary-item">
                <h3>Folio</h3>
                <p>Chiffre numérotant chaque feuillet d’un manuscrit, chaque page d’un livre.</p>
            </article>
			<article class="glossary-item">
                <h3>Éditeur</h3>
                <p>Personne ou société qui édite des livres et œuvres sous forme d’objets imprimés et les publie.</p>
            </article>
			<article class="glossary-item">
                <h3>Copyright</h3>
                <p>Droit exclusif que se réserve un auteur ou son représentant d’exploiter au niveau commercial pendant un nombre déterminé d'années son œuvre littéraire, artistique ou scientifique.</p>
            </article>
			<article class="glossary-item">
                <h3>Haute définition</h3>
                <p>Une image à haute définition correspond à un nombre élevé de points ou de pixels la composant. À ne pas confondre avec la haute résolution qui désigne un nombre élevé de points ou de pixels par unité de longueur.</p>
            </article>
			<article class="glossary-item">
                <h3>Basse définition</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Titraille</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Colorimétrie</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Visuel</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Liminaires</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Couverture</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Impression</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Intérieur</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Quatrième de couverture</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Graphiste</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Maquettiste</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Broché</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Relié</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Relecture</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Collectif</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Collection</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Affiche</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Brochure</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Typographie</h3>
                <p></p>
            </article>
			<article class="glossary-item">
                <h3>Police</h3>
                <p></p>
            </article>
            <!-- Add more terms as needed -->
        </div>
    </section>
</main>

<footer>
    <span>Tous droits réservés - 2025 eFBi Graphics<sup>&copy;</sup></span>
</footer>

<script src="../scripts/common.js"></script>
<script src="../scripts/responsive-menu.js"></script>
</body>
</html>
HTML; 