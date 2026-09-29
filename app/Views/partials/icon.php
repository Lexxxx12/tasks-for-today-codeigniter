<?php
$icons = [
    'sun' => '<circle cx="12" cy="12" r="3.5"/><path d="M12 2v2M12 20v2M4.93 4.93l1.42 1.42M17.65 17.65l1.42 1.42M2 12h2M20 12h2M4.93 19.07l1.42-1.42M17.65 6.35l1.42-1.42"/>',
    'list' => '<path d="M9 6h11M9 12h11M9 18h11"/><circle cx="4" cy="6" r="1"/><circle cx="4" cy="12" r="1"/><circle cx="4" cy="18" r="1"/>',
    'user' => '<circle cx="12" cy="8" r="4"/><path d="M4.5 21a7.5 7.5 0 0115 0"/>',
    'info' => '<circle cx="12" cy="12" r="9"/><path d="M12 11v6M12 7.5v.01"/>',
    'menu' => '<path d="M4 7h16M4 12h16M4 17h16"/>',
    'arrow' => '<path d="M5 12h14M14 7l5 5-5 5"/>',
    'calendar' => '<rect x="3" y="5" width="18" height="16" rx="3"/><path d="M8 3v4M16 3v4M3 10h18"/>',
    'plus' => '<path d="M12 5v14M5 12h14"/>',
    'mail' => '<rect x="3" y="5" width="18" height="14" rx="3"/><path d="M4 7l8 6 8-6"/>',
    'at' => '<circle cx="12" cy="12" r="9"/><path d="M16 12v2a2 2 0 004 0v-2a8 8 0 10-3 6.24"/><circle cx="12" cy="12" r="4"/>',
];
?>
<svg viewBox="0 0 24 24" aria-hidden="true"><?= $icons[$name] ?? '' ?></svg>
