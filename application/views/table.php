<style>
    #table {

        margin-bottom: 50px;
    }
</style>
<div class="ui relaxed divided list" id="table">
    <?php if ($nameTable) {
        foreach ($nameTable as $item):
            $hidden = array('tableName' => $item['id']);
            echo form_open('Chat/newChat', "", $hidden) ?>

            <div class="ui horizontal list">
                <div class="item">
                    <img class="ui mini circular image" src="/areg/images/1.jpg">
                    <div class="content">
                        <div class="ui sub header"><?php echo $item['nameUser']; ?></div>
                        <button class="header" name="add"> <?php echo $item['nameTable']; ?></button>
                    </div>
                </div>
            </div>
            <?php echo form_close();
        endforeach;
    }; ?>
</div>