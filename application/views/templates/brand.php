<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("components/head"); ?>
  <title>{brand_title}</title>
  {brand_meta}
  <meta name="{name}" content="{value}">
  {/brand_meta}
</head>

<body>
  <?php $this->load->view("components/nav"); ?>
  <main style="margin-top: 55px;">
    <section>
      <div class="row m-0 g-0 justify-content-center">
        <div class="col-xl-7 col-lg-9 col-md-11">
          <div class="">
            <div class="py-3">
              <p class="mb-0 muted">{brand_category}</p>
              <h1>
                {brand_title}
              </h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              {brand_description}
              <?php for ($i = 0; $i < 5; $i++) { ?>
                <div class="card mb-3">
                  <div class="card-header">
                    Brand Details
                  </div>
                  <div class="card-body">
                    <h4>Lorem, ipsum.</h4>
                    <p>{short_para}</p>
                    <h4>Lorem, ipsum.</h4>
                    <p>{long_para}</p>
                  </div>
                </div>
              <?php } ?>
              {/brand_description}
              <div class="mb-3">
                <?php $this->load->view("uielements/ui_instant_enquiry_h"); ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="likes-trend">
                    <span class="mx-1">m</span><span class="mx-1">m</span><span class="mx-1">m</span><span class="mx-1">m</span><span class="mx-1">m</span>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="">
                    Like
                  </div>
                </div>
              </div>
              <?php $this->load->view("uielements/ui_instant_enquiry_v"); ?>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>
  <?php $this->load->view("components/footer"); ?>
</body>

</html>