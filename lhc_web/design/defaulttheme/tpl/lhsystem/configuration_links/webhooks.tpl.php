<?php if ($currentUser->hasAccessTo('lhwebhooks','configuration')) : ?>
    <h5><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/configuration','Webhooks');?></h5>
    <ul>
        <li><a href="<?php echo erLhcoreClassDesign::baseurl('webhooks/configuration')?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/configuration','Webhooks');?></a></li>
    </ul>
<?php endif; ?>