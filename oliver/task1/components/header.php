<?php
$image_file1='pictures/simpsons.png';
$image_file2='../pictures/avatar_2.jpeg';
$image_file=file_exists($image_file1)?$image_file1:$image_file2;


?>
<header>




  <!-- background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url(<?php echo $image_file ?>);
      height: 250px;
    "
  >
    <div class="mask " style=" background-color: rgba(0, 0, 0, 0.01);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3"></h1>
          <h4 class="mb-3"></h4>
        </div>
      </div>
    </div>
  </div>
  <!-- background image -->
  

</header>