<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/css/bootstrap.min.css"
      integrity="sha512-72OVeAaPeV8n3BdZj7hOkaPSEk/uwpDkaGyP4W2jSzAC8tfiO4LMEDWoL3uFp5mcZu+8Eehb4GhZWFwvrss69Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"
      integrity="sha512-Sct/LCTfkoqr7upmX9VZKEzXuRk5YulFoDTunGapYJdlCwA+Rl4RhgcPCLf7awTNLmIVrszTPNUFu4MSesep5Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <style>
      html {
        scroll-behavior: smooth;
      }
      img {
        width: 70px;
      }

      .n_bar {
        position: relative;
        z-index: 999;
        background: rgb(255, 255, 255);
        background: linear-gradient(
          180deg,
          rgba(255, 255, 255, 0.84) 0%,
          rgba(255, 255, 255, 0.849) 92%,
          rgba(255, 255, 255, 0) 100%
        );
      }

      .log__btn {
        width: 100px;
        height: 30px;
        background-color: blueviolet;
        text-align: center;
        color: aliceblue;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
      }

      .log__btn a {
        text-decoration: none;
        color: aliceblue;
      }

      .hero {
        height: 100vh;
        width: 100%;
        background-image: url("./images/136949.jpg");
        background-size: 100%;
        background-position: center center;
        padding: 300px 300px 0 50px;
      }

      .hero::before {
        content: "";
        background-color: rgba(0, 0, 0, 0.484);
        height: 100vh;
        width: 100vw;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
      }

      .text-con {
        position: relative;
        width: 600px;
        color: aliceblue;
        z-index: 3;
      }

      .card_con {
        text-align: center;
        background: rgb(238, 174, 202);
        background: radial-gradient(
          circle,
          rgba(238, 174, 202, 0.373284347918855) 0%,
          rgba(148, 187, 233, 0.4881302862942052) 100%
        );
      }
      .title {
        padding-top: 50px;
      }

      .cards {
        margin-top: -8%;
        width: 100vw;
        height: 100vh;
        justify-content: center;
        display: flex;
        align-items: center;
      }

      .cards .card__container {
        width: 80%;
        height: 60%;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .card {
        width: 350px;
        height: 250px;
        text-align: center;
        font-family: fantasy;
        padding-top: 40px;
        background-color: rgba(255, 255, 255, 0.402);
        backdrop-filter: blur(5px);
        border-radius: 20px;
        box-shadow: 0px 4px 28px 2px rgba(0, 0, 0, 0.75);
        transition: 0.5 ease-in-out;
      }

      .card:hover {
        transform: scale(1.1);
        transition: 0.5s ease;
      }

      .card h1 {
        font-size: 30px;
        margin-bottom: 20px;
      }

      footer {

        text-align: center;
        padding: 5px;
        background-color: #2b2a33;
        color: #fff;
        
      }
    </style>
  </head>
  <body>
    <nav class="n_bar position-fixed w-100 navbar navbar-expand-lg pe-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          ><img src="./upload/Healthora logo png(1).png" alt=""
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./homepage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contactbeforelog.php">Contact</a>
            </li>
          </ul>
          <div class="dropdown">
            <button
              class="btn btn-primery dropdown-toggle"
              type="button"
              id="dropdownMenuButton1"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Login here
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="./login_Form.php">Login as a patient</a></li>
              <li><a class="dropdown-item" href="./login_Form.php">Login as a Doctor</a></li>
            </ul>
          </div>
          
    
          </div>
        </div>
      </div>
    </nav>
    <section class="hero">
      <div class="text-con">
        <h1>Healthora</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque, hic
          nobis. Minima similique omnis iste voluptas? Illum iusto reiciendis,
          numquam ipsum autem vitae voluptatibus, minima atque, cupiditate
          laborum corrupti illo?
        </p>

        <button type="button" class="btn btn-danger">Contact Us</button>
      </div>
    </section>

    <section class="card_con">
      <h1 class="title">Our Services</h1>
      <section class="cards">
        <div class="card__container">
          <div class="card">
            <h1>Channelling</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
              praesentium autem, quis beatae inventore odio mollitia voluptatem
              iusto impedit perferendis.
            </p>
          </div>
          <div class="card">
            <h1>Health care</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
              soluta at distinctio rerum maxime eos enim optio labore corporis
              velit!
            </p>
          </div>
          <div class="card">
            <h1>Trust</h1>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Incidunt, sequi harum. Doloremque enim voluptatibus dolore nihil
              accusamus itaque voluptatem fugiat.
            </p>
          </div>
        </div>
      </section>
    </section>
    <footer>
      <p>Copyright ©2023 Trincomalee Campus All rights reserved</p>
    </footer>
  </body>
</html>
