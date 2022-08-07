<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <?php if (isset($a['header'])) : ?>
                    <h4 class="modal-title d-inline-block" id="defaultModalLabel"> <?php echo $a['header']; ?></h4>
                <?php
                endif;
                ?>
                <span><i class="material-icons f-right p-cursor" data-dismiss="modal">cancel</i></span>
            </div>
            <div class="modal-body">
                <?php if (isset($a['body'])) : ?>
                    <?php echo $a['body']; ?>
                <?php
                endif;
                ?>
                <!-- <input type="text" class="form-control" name="qr-code" id="scan" placeholder="QR-code" disabled> -->
            </div>
            <?php if (isset($a['footer'])) : ?>
                <?php echo $a['footer']; ?>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>