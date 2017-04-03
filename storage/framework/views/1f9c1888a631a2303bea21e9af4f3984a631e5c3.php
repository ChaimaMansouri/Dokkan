<?php $__env->startSection('produit'); ?>
<li><a>Nav item</a></li>
<li><a>Nav item again</a></li>
<li><a>One more nav</a></li>
<li><a>Another nav item</a></li>
<li><a>More navigation</a></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('zone'); ?>
 <li><a>Nav item</a></li>
            <li><a>Nav item again</a></li>
            <li><a>One more nav</a></li>
            <li><a>Another nav item</a></li>
            <li><a>More navigation</a></li>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>