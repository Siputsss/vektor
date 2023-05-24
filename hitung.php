<html>
  <head>
    <link href="style.css" rel="stylesheet">
    <title>Menghitung Sudut Antara 2 Vektor</title>
    <style type="text/css">
      .labelfrm {
        display: block;
        font-size: small;
        margin-top: 5px;
      }
      .error {
        font-size: small;
        color: red;
      }
      .container-inti {
        background-image: url("img/Calculator-amico.svg");
        background-position: 80% 50%;
        background-repeat: no-repeat;
        height: 70%;
      }
    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link
      href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css
"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">Home</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="hitung.php"
              >Hitung</a
            >
            <a class="nav-link" href="history.php">History</a>
            <a class="nav-link" href="about.php">About</a>
            <a class="nav-link" href="javascript:exit()">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container mt-4 container-inti">
      <h1>Masukkan Nilai</h1>
      <!-- <form action=""> -->
      <div class="row">
        <div class="col-lg-2">
          <h5>Vektor A</h5>
          <div class="row mb-3">
            <label
              for="x1"
              class="col-sm-2 col-form-label col-form-label-sm"
              style="width: 3%"
              >x</label
            >
            <div class="col-sm-10">
              <input
                type="text"
                class="form-control form-control-sm"
                id="x1"
                name="x1"
              />
            </div>
          </div>
          <div class="row mb-3">
            <label
              for="y1"
              class="col-sm-2 col-form-label col-form-label-sm"
              style="width: 3%"
              >y</label
            >
            <div class="col-sm-10">
              <input
                type="text"
                class="form-control form-control-sm"
                id="y1"
                name="y1"
              />
            </div>
          </div>
          <div class="row mb-3">
            <label
              for="z1"
              class="col-sm-2 col-form-label col-form-label-sm"
              style="width: 3%"
              >z</label
            >
            <div class="col-sm-10">
              <input
                type="text"
                class="form-control form-control-sm"
                id="z1"
                name="z1"
              />
            </div>
          </div>
        </div>
        <div class="col-lg-2">
          <h5>Vektor B</h5>
          <div class="row mb-3">
            <label
              for="x2"
              class="col-sm-2 col-form-label col-form-label-sm"
              style="width: 3%"
              >x</label
            >
            <div class="col-sm-10">
              <input
                type="text"
                class="form-control form-control-sm"
                id="x2"
                name="x2"
              />
            </div>
          </div>
          <div class="row mb-3">
            <label
              for="y2"
              class="col-sm-2 col-form-label col-form-label-sm"
              style="width: 3%"
              >y</label
            >
            <div class="col-sm-10">
              <input
                type="text"
                class="form-control form-control-sm"
                id="y2"
                name="y2"
              />
            </div>
          </div>
          <div class="row mb-3">
            <label
              for="z2"
              class="col-sm-2 col-form-label col-form-label-sm"
              style="width: 3%"
              >z</label
            >
            <div class="col-sm-10">
              <input
                type="text"
                class="form-control form-control-sm"
                id="z2"
                name="z2"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button onclick="hitungSudut()" name="hitung" id="hitung" class="btn btn-primary">
            Hitung
          </button>
          <button onclick="reset()" name="reset" id="reset" class="btn btn-secondary">
            Reset
          </button>
          <!-- </form> -->
          <p id="result"></p>
          <p id="hasil"></p>
        </div>
      </div>
    </div>

    <script>
      function dotProduct(v1, v2) {
        return v1[0] * v2[0] + v1[1] * v2[1] + v1[2] * v2[2];
      }

      function magnitude(vector) {
        return Math.sqrt(dotProduct(vector, vector));
      }

      function angleBetween(v1, v2) {
        let dotProd = dotProduct(v1, v2);
        let magV1 = magnitude(v1);
        let magV2 = magnitude(v2);
        let cosAngle = dotProd / (magV1 * magV2);
        let angleRad = Math.acos(cosAngle);
        let angleDeg = angleRad * (180 / Math.PI);
        return angleDeg;
      }

      function hitungSudut() {
        let v1 = [
          parseFloat(document.getElementById("x1").value),
          parseFloat(document.getElementById("y1").value),
          parseFloat(document.getElementById("z1").value),
        ];
        let v2 = [
          parseFloat(document.getElementById("x2").value),
          parseFloat(document.getElementById("y2").value),
          parseFloat(document.getElementById("z2").value),
        ];
        let angle = angleBetween(v1, v2);
        document.getElementById("result").innerHTML =
          "Sudut antara vektor 1 dan vektor 2 adalah " +
          angle.toFixed(2) +
          " derajat";
        simpanKeDatabase(v1, v2, angle);
        tambahBtnDetail();
        tambahBtnKeluar();
      }
      
      function tambahBtnDetail() {
        // membuat elemen tombol
        var btnd = document.createElement("button");
        btnd.innerHTML = "Detail";
        btnd.classList.add("btn", "btn-primary", "me-1"); // menambahkan kelas Bootstrap ke dalam tombol
        btnd.setAttribute("id", "detail");

        // Tentukan tindakan apa yang ingin dilakukan saat tombol diklik
        btnd.addEventListener("click", function () {
          hasilSudut();
        });

        // menambahkan tombol ke dalam container
        var container = document.querySelector(".container-inti"); // memilih elemen container
        container.appendChild(btnd); // menambahkan tombol ke dalam container
        document.getElementById("hitung").setAttribute("disabled", true);

      }

      function tambahBtnKeluar() {
        // membuat elemen tombol
        var btn = document.createElement("button");
        btn.innerHTML = "Keluar";
        btn.classList.add("btn", "btn-danger"); // menambahkan kelas Bootstrap ke dalam tombol
        btn.setAttribute("id", "keluar");

        // Tentukan tindakan apa yang ingin dilakukan saat tombol diklik
        btn.addEventListener("click", function () {
          window.location = "about.php";
        });

        // menambahkan tombol ke dalam container
        var container = document.querySelector(".container-inti"); // memilih elemen container
        container.appendChild(btn); // menambahkan tombol ke dalam container
        document.getElementById("hitung").setAttribute("disabled", true);
      }

      function reset() {
        document.getElementById("x1").value = "";
        document.getElementById("y1").value = "";
        document.getElementById("z1").value = "";
        document.getElementById("x2").value = "";
        document.getElementById("y2").value = "";
        document.getElementById("z2").value = "";
        document.getElementById("result").innerHTML = "";
        document.getElementById("hitung").removeAttribute("disabled");
        document.getElementById("keluar").remove();
        document.getElementById("detail").remove();
        document.getElementById("hasil").innerHTML = "";
      }

      function simpanKeDatabase(v1, v2, angle) {
        // Buat objek XMLHttpRequest
        let xhr = new XMLHttpRequest();

        // Konfigurasi request
        xhr.open("POST", "simpan_ke_database.php");
        xhr.setRequestHeader(
          "Content-type",
          "application/x-www-form-urlencoded"
        );
        // Data yang akan dikirimkan ke server dalam format URL-encoded
        let data =
          "x1=" +
          v1[0] +
          "&y1=" +
          v1[1] +
          "&z1=" +
          v1[2] +
          "&x2=" +
          v2[0] +
          "&y2=" +
          v2[1] +
          "&z2=" +
          v2[2] +
          "&sudut=" +
          angle;

        // Setelah request selesai, tampilkan pesan sukses atau error pada console
        xhr.onreadystatechange = function () {
          if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            console.log("Data berhasil disimpan ke database");
            Swal.fire({
              title: "Sukses!",
              text: "Data berhasil disimpan ke database",
              icon: "success",
              confirmButtonText: "OK",
              showConfirmButton: false,
              timer: 2500,
            });
          } else if (
            this.readyState === XMLHttpRequest.DONE &&
            this.status !== 200
          ) {
            console.error("Terjadi error saat menyimpan data ke database");
          }
        };

        // Kirim request dengan data yang telah dibuat
        xhr.send(data);
      }
    </script>

    <script>
      function hasilSudut() {
			// Mendapatkan nilai dari input vektor A
			let a1 = parseInt(document.getElementById('x1').value);
			let a2 = parseInt(document.getElementById('y1').value);
			let a3 = parseInt(document.getElementById('z1').value);

			// Mendapatkan nilai dari input vektor B
			let b1 = parseInt(document.getElementById('x2').value);
			let b2 = parseInt(document.getElementById('y2').value);
			let b3 = parseInt(document.getElementById('z2').value);

			// Menghitung dot product
			let dotProduct = a1 * b1 + a2 * b2 + a3 * b3;

			// Menghitung magnitude vektor A
			let magA = Math.sqrt(a1 * a1 + a2 * a2 + a3 * a3);

			// Menghitung magnitude vektor B
			let magB = Math.sqrt(b1 * b1 + b2 * b2 + b3 * b3);

			// Menghitung sudut dalam radian
			let radian = Math.acos(dotProduct / (magA * magB));

			// Menghitung sudut dalam derajat
			let degree = radian * 180 / Math.PI;

			// Menampilkan tahap perhitungan
			let hasil = document.getElementById('hasil');
      hasil.innerHTML = "Detail dari hasil tersebut adalah sebagai berikut :<br>";
			hasil.innerHTML += "Vektor A = (" + a1 + ", " + a2 + ", " + a3 + ")<br>";
			hasil.innerHTML += "Vektor B = (" + b1 + ", " + b2 + ", " + b3 + ")<br>";
      hasil.innerHTML += "Rumus = Sudut = arccos (A.B) / (|A|.|B|)<br>";
			hasil.innerHTML += "Dot product = A.B = (" + a1 + "." + b1 + ") + (" + a2 + "." + b2 + ") + (" + a3 + "." + b3 + ") = " + dotProduct + "<br>";
			hasil.innerHTML += "Magnitude vektor A = |A| = sqrt (" + a1 + "." + a1 + ") + (" + a2 + "." + a2 + ") + (" + a3 + "." + a3 + ") = "  + magA + "<br>";
			hasil.innerHTML += "Magnitude vektor B = |B| = sqrt (" + b1 + "." + b1 + ") + (" + b2 + "." + b2 + ") + (" + b3 + "." + b3 + ") = " + magB + "<br>";
			hasil.innerHTML += "Sudut dalam radian = " + radian.toFixed(2) + "<br>";
			hasil.innerHTML += "Sudut dalam derajat = " + degree.toFixed(2);
}
    </script>

    <script>
			function exit() {
            var confirmExit = confirm("Apakah Anda yakin ingin keluar?");
            if (confirmExit) {
                window.location.href = "https://www.google.com";
            }
        }
		</script>	

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js
    "></script>

    <div class="shapes-box">
      <span data-parallax='{"x": 150, "y": -20, "rotateZ":500}'>
          <img src="img\fl-shape-1.png" title="" alt="">
      </span>
      <span data-parallax='{"x": 250, "y": 150, "rotateZ":500}'>
          <img src="img\fl-shape-2.png" title="" alt="">
      </span>
      <span data-parallax='{"x": -180, "y": 80, "rotateY":2000}'>
          <img src="img\fl-shape-3.png" title="" alt="">
      </span>
      <span data-parallax='{"x": -20, "y": 180}'>
          <img src="img\fl-shape-4.png" title="" alt="">
      </span>
      <span data-parallax='{"x": 300, "y": 70}'>
          <img src="img\fl-shape-5.png" title="" alt="">
      </span>
      <span data-parallax='{"x": 250, "y": 180, "rotateZ":1500}'>
          <img src="img\fl-shape-6.png" title="" alt="">
      </span>
      <span data-parallax='{"x": 180, "y": 10, "rotateZ":2000}'>
          <img src="img\fl-shape-7.png" title="" alt="">
      </span>
      <span data-parallax='{"x": 60, "y": -100}'>
          <img src="img\fl-shape-9.png" title="" alt="">
      </span>
      <span data-parallax='{"x": -30, "y": 150, "rotateZ":1500}'>
          <img src="img\fl-shape-10.png" title="" alt="">
      </span>
  </div>

  </body>
</html>
