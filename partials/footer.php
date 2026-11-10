<?php
/*
 * Copyright (c) 2025-2026 Yunyun (Wang Yaoze)
 * Licensed under the GNU General Public License, version 3 only.
 * Attribution requests are in the NOTICE file.
 * Source: https://github.com/NomenID/skin-nomen-ssr
 * Project: https://nomenid.org/
 */

$brand = $brand ?? \Nomen\Src\Brand::all();
$copyright = trim((string)($brand['copyright'] ?? ''));
$links = $links ?? \Nomen\Src\Brand::footerLinks();
?>
<footer class="footer">
    <div class="footer-inner">
        <?php if ($copyright !== ''): ?>
            <span><?= \Nomen\Src\Brand::copyrightHtml($copyright) ?></span>
        <?php endif; ?>
        <?php if ($links !== []): ?>
            <nav class="footer-links">
                <?php foreach ($links as $link): ?>
                    <a href="<?= htmlspecialchars((string)($link['url'] ?? '#')) ?>"><?= htmlspecialchars(t((string)($link['label'] ?? ''))) ?></a>
                <?php endforeach; ?>
            </nav>
        <?php endif; ?>
        <?php // 署名：可以关，关后首页要自己补署名和版本页入口（见 NOTICE） ?>
        <?php if (!empty($brand['powered_by'])): ?>
            <a class="footer-powered" href="/special/version" data-project-url="<?= htmlspecialchars(\Nomen\Src\Special\Version::PROJECT_URL) ?>">
                <svg class="footer-powered-mark" viewBox="0 0 512 512" aria-hidden="true" focusable="false"><path d="M164 360V158l184 202V158" fill="none" stroke="currentColor" stroke-width="40" stroke-linecap="round" stroke-linejoin="round"/><circle cx="348" cy="158" r="28"/></svg>
                Powered by Nomen
            </a>
        <?php endif; ?>
    </div>
</footer>
