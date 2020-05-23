<form action="<?php echo e(url('/personas')); ?>" method="post" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>


<label for="Profesion_id"><?php echo e("Profesion_id"); ?> </label>
<input type="text" name="Profesion_id" id ="Profesion_id" value="">
<br/>
<label for="Nombre"><?php echo e("Nombre"); ?> </label>
<input type="text" name="Nombre" id ="Nombre" value="">
<br/>
<label for="PrimerApellido"><?php echo e("PrimerApellido"); ?> </label>
<input type="text" name="PrimerApellido" id ="PrimerApellido" value="">
<br/>
<label for="SegundoApellido"><?php echo e("SegundoApellido"); ?> </label>
<input type="text" name="SegundoApellido" id ="SegundoApellido" value="">
<br/>
<label for="FechaNac"><?php echo e("FechaNac"); ?> </label>
<input type="text" name="FechaNac" id ="FechaNac" value="">

<br/>
<label for="Edad"><?php echo e("Edad"); ?> </label>
<input type="text" name="Edad" id ="Edad" value="">
<br/>
<label for="Estado"><?php echo e("Estado"); ?> </label>
<input type="text" name="Estado" id ="Estado" value="">
<br/>
<input type="submit" value="Agregar">
</form>
<?php /**PATH C:\xampp\htdocs\proyecto\resources\views/personas/create.blade.php ENDPATH**/ ?>