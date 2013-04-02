<?php defined('SYSPATH') or die('No direct script access.');?>


<div class="page-header">
	<h1><?=__('Cache')?></h1>
    <p><?=__('Cache configuration information')?></p>
    <a class="btn btn-primary pull-right" href="<?=Route::url('oc-panel',array('controller'=>'tools','action'=>'cache'))?>?force=1">
  <?=__('Clean')?></a>
</div>


<table class="table table-striped">
    <tr>
        <td><?=__('Config file')?></td>
        <td><?=APPPATH?>config/cache.php</td>
    </tr>
<?foreach ($cache_config as $key => $value):?>
    <tr>
        <td><?=$key?></td>
        <td><?=$value?></td>
    </tr>
<?endforeach?>
</table>