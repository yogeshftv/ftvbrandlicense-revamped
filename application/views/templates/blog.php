<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("components/head"); ?>
  <title></title>
  {blog_meta}
  <meta name="{name}" content="{value}">
  {/blog_meta}
</head>

<body>
  <section>
    <div class="container">
      <h1>
        {blog_title}
      </h1>
      <h3>
        {blog_heading}
      </h3>
      <p>
        {blog_date}
      </p>
    </div>
  </section>
</body>

</html>