<div>
    <?php
        if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') )
        {
            return '';
        }
    ?>
</div>