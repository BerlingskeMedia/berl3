<?php if($event == 'breaking'): ?>
<div class="event-header-yellow">
Breaking news
</div>

<?php elseif($event == 'live'): ?>
<div class="event-header-red">
Live
</div>

<?php elseif($event == 'now'): ?>
<div class="event-header-red">
Lige nu
</div>

<?php elseif($event == 'update'): ?>
<div class="event-header-red">
Opdateres
</div>

<?php elseif($event == 'topstory'): ?>
<div class="event-header-blue">
Tophistorie
</div>

<?php elseif($event == 'comingup'): ?>
<div class="event-header-red">
Nyhed på vej
</div>

<?php endif; ?>