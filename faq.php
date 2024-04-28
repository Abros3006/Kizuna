<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
</head>
<body>
    <!-- include navbar -->
    <?php include './navbar.html'; ?>

    <section id="faq" class="faq">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold text-uppercase">FAQ</h1>
      <div class="heading-line"></div>
      <p class="lead">Frequently Asked Questions, Get Knowledge Befere Hand</p>
    </div>
    <!-- ACCORDION CONTENT  -->
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="accordion" id="accordionExample">
          <!-- ACCORDION ITEM 1 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              What are the most in-demand job fields in Japan?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Some of the most in-demand job fields in Japan include information technology, engineering, healthcare, skilled trades (such as construction and manufacturing), and bilingual roles (particularly English-Japanese). Japan also has a growing need for workers in the service and hospitality industries due to the country's aging population and tourism sector
              </div>
            </div>
          </div>
             <!-- ACCORDION ITEM 2 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Do I need to speak Japanese to work in Japan?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              While knowing Japanese can be highly beneficial, it is not always a strict requirement, especially for certain industries or positions that involve working with international clients or companies. Many multinational companies in Japan conduct business in English, and some may provide language training or support. However, having at least basic Japanese language skills can make daily life and cultural integration much easier
            </div>
            </div>
          </div>
             <!-- ACCORDION ITEM 3 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              What are the typical working hours and work culture in Japan?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              Japan is known for its long working hours and dedication to the company. A standard full-time work week in Japan is generally around 40 hours, but it is common for employees to work overtime, sometimes unpaid. The work culture in Japan tends to emphasize loyalty, hard work, and hierarchical structures. Employees are often expected to prioritize their work over personal lives.              </div>
            </div>
          </div>
             <!-- ACCORDION ITEM 4 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              What are the visa requirements for working in Japan?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              Foreign nationals typically need to obtain a work visa or other appropriate visa to legally work in Japan. The most common work visa is the "Specialist in Humanities/International Services" visa, which covers a wide range of professional jobs. Other visa types include the "Engineer/Specialist in Humanities/International Services" visa for specific technical or specialized roles. The visa application process can be lengthy and may require documentation from the sponsoring employer in Japan.              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
</section>


 <!-- INCLUDE FOOTER -->
 <?php include './footer.html'; ?>
</body>
</html>