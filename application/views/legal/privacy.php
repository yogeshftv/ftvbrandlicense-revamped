<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("components/head"); ?>
  <?php foreach ($meta[0] as $key => $value) { ?>
    <meta name="<?php echo $key; ?>" value="<?php echo $value; ?>">
  <?php } ?>
  <title><?php echo $title; ?></title>
</head>

<body>
<?php $this->load->view("components/nav"); ?>
  <main style="margin-top: 80px;" class="mb-3">
  </main>
  <?php $this->load->view("components/footer"); ?>
</body>

</html>