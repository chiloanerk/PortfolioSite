<?php $parser = new Parsedown(); ?>
<article class="p-2 mt-3 prose-sm prose-slate">
    <p>
        <?= $parser->text($aboutData['content']); ?>
    </p>
</article>
