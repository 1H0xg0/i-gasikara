
<?php if(!is_null($person)){ ?>
<table class="table table-dark">
    <tbody>
    <?php foreach($person as $key=>$item){ ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $item ?></td>
        </tr>

    <?php } ?>
    </tbody>
</table>
<?php }else{ ?>

    <h4 style="color:#fff;font-size:12px;"><i class="fa fa-times"></i>&nbsp;Vous n'etes pas sur la liste.</h4>

<?php } ?>