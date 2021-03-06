
<?php echo form_open('','class="my_form" enctype="multipart/form-data"') ?>

<!-- Titulo -->
<div class="form-group">
    <?php 
    echo form_label('Titulo','title');
    ?>

    <?php  
        $text_input = array(
            'name' => 'title',
            'id' => 'title',
            'value' => '',
            'class' => 'form-control input-lg',
        );

        echo form_input($text_input);
    ?>
</div>

<!-- Url Limpia -->

<div class="form-group">
    <?php 
    echo form_label('Url Limpia','url_clean');
    ?>

    <?php  
        $text_input = array(
            'name' => 'url_clean',
            'id' => 'url_clean',
            'value' => '',
            'class' => 'form-control input-lg',
        );

        echo form_input($text_input);
    ?>
</div>

<!-- Contenido -->

<div class="form-group">
    <?php 
    echo form_label('Contenido','content');
    ?>

    <?php  
        $text_area = array(
            'name' => 'content',
            'id' => 'content',
            'value' => '',
            'class' => 'form-control input-lg',
        );

        echo form_textarea($text_area);
    ?>
</div>

<!-- Descripcion -->

<div class="form-group">
    <?php 
    echo form_label('Descripcion','description');
    ?>

    <?php  
        $text_area = array(
            'name' => 'description',
            'id' => 'description',
            'value' => '',
            'class' => 'form-control input-lg',
        );

        echo form_textarea($text_area);
    ?>
</div>

<!-- Imagen -->

<div class="form-group">
    <?php 
    echo form_label('Imagen','image');
    ?>

    <?php  
        $text_input = array(
            'name' => 'image',
            'id' => 'image',
            'value' => '',
            'type' => 'file',
            'class' => 'form-control input-lg',
        );

        echo form_input($text_input);
    ?>
</div>

<!-- Boton Guardar -->

<?php echo form_submit('mysubmit','Guardar','class="btn btn-primary"') ?>

<?php echo form_close() ?>