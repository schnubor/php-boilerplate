<?php
require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");

$currentPage = "Usage";
?>

<!DOCTYPE html>
<html>
    <?php renderHead(
        "PHP Boilerplate - Usage",
        "How to use PHP Boilerplate."
    ); ?>
    <body>
        <?php require_once(TEMPLATES_PATH . '/header.php'); ?>
        <?php require_once(TEMPLATES_PATH . '/navigation.php'); ?>

        <div class="container">
            <h1>PHP Boilerplate</h1>

            <p>Boilerplate to quickly knock out small PHP based projects.
            Supports Bootstrap V4, LESS support and Font Awesome icons.</p>

            <h2>Usage</h2>

            <h3>Running locally</h3>

            <p>To see the above site locally clone and cd to the repo and run:</p>

            <pre><code>php -S localhost:8000
            </code></pre>

            <p>The site should now be available in your browser when visiting this URL:
            http://localhost:8000/</p>

            <h3>Create new pages</h3>

            <p>To create a new page create a new folder in the root directory and name it like
            the URL is supposed to be (e.g. for example.com/about name it <code>account</code>).</p>

            <p>Create a new <code>index.php</code> within that directory:</p>

            <div class="highlight highlight-text-html-basic">
                <pre>
        &lt;?php
        require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));
        require_once(LIBRARY_PATH . "/templateFunctions.php");

        $currentPage = {pagename};
        ?&gt;

        &lt;!DOCTYPE html&gt;
        &lt;<span class="pl-ent">html</span>&gt;
            &lt;?php renderHead(
                {title},
                {description}
            ); ?&gt;
            &lt;<span class="pl-ent">body</span>&gt;
                &lt;?php require_once(TEMPLATES_PATH . '/header.php'); ?&gt;
                &lt;?php require_once(TEMPLATES_PATH . '/navigation.php'); ?&gt;

                &lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>container<span class="pl-pds">"</span></span>&gt;
                    ...
                &lt;/<span class="pl-ent">div</span>&gt;

                &lt;?php require_once(TEMPLATES_PATH . '/footer.php'); ?&gt;
            &lt;/<span class="pl-ent">body</span>&gt;
        &lt;/<span class="pl-ent">html</span>&gt;
                </pre>
            </div>

            <ul>
            <li>Replace <code>{pagename}</code>, <code>{title}</code> and <code>{description}</code> with actual content.</li>
            <li>Open <code>resources/config.php</code> and add the new page to the <code>$page</code> array.</li>
            </ul>
            </article>
              </div>
        </div>

        <?php require_once(TEMPLATES_PATH . '/footer.php'); ?>
    </body>
</html>
