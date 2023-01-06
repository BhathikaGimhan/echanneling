<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>

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
</style>
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
              <a class="nav-link" href="./contact.php">Contact</a>
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
    
</body>
</html>