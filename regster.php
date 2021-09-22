<?php
$title = 'التسجيل ';
require_once 'template/header.php';

?>

<h1> التسجيل </h1>
<br> 
<h4> بيانات اللاعب الاول <h4>
<form action="<?php echo $_SERVER['PHP_SELF']?> " method="post" enctype="multipart/form-data">
<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">اسم المشترك </label>
    <input type="text"  name="name" class="form-control"  value="<?php echo $name?> " placeholder="الاسم ثلاثي">
    <span class="text-danger" ><?php echo $nameError?> </span> 
  </div>

  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">الاميل </label>
    <input type="email" name="email" class="form-control" id="formGroupExampleInput2" value="<?php echo $email?>" placeholder="الاميل ">
    <span class="text-danger" ><?php echo $emailError?> </span> 
  </div>
  
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">رقم الجوال  </label>
    <input type="text" class="form-control" id="formGroupExampleInput2"  value="<?php echo $phone?>" placeholder="رقم الجوال يبدا بـ 05">
    <span class="text-danger" ><?php echo $phoneError?> </span> 
  </div>

  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">اسم المشترك </label>
    <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="<?php echo $name?> " placeholder="الاسم ثلاثي ">
    <span class="text-danger" ><?php echo $nameError?> </span> 
  </div>

  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">الاميل </label>
    <input type="email" name="email" class="form-control" id="formGroupExampleInput2" value="<?php echo $email?>" placeholder="الاميل ">
    <span class="text-danger" ><?php echo $emailError?> </span> 
  </div>
  
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">رقم الجوال  </label>
    <input type="text" class="form-control" id="formGroupExampleInput2"  value="<?php echo $phone?>" placeholder="رقم الجوال يبدا بـ 05">
    <span class="text-danger" ><?php echo $phoneError?> </span> 
  </div>
  <button class="btn btn-primary" > التسجيل </button>
</form>
<br>

<?php require_once 'template/footer.php' ?>