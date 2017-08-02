<?php if($paginator->hasPages()): ?>
    <script>
        $(document).ready(function(){
            $('.pagination-Div').materializePagination({
                lastPage: <?php echo e($paginator->lastPage()); ?>,
                firstPage:  1,
                onClickCallback: function(requestedPage){
                    <?php echo e(session()->flash('refresh',true)); ?>

                }
            });
        });
    </script>
    <div class="pagination-Div"></div>
<?php endif; ?>