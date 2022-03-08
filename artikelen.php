<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/navbar.css"/>
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="wrapper hover_collapse">

    <div class="top_navbar">
    <!-- logo -->
    <div class="logo">Mbo Utrecht</div>

    <!-- Menu button -->

    <div class="menu"> 
      <div class="hamburger">
        <i class="fas fa-bars"></i>
  </div>
  </div>

  <!-- sidebar -->
      <div class="sidebar">
      <div class="sidebar_inner">
      <ul>
            <li>
            <a href="#">
            <span class="icon"><i class="fa fa-qrcode"></i></span>
            <span class="text">Dashboard</span>
            </a>
            </li>

            <li>
            <a href="#">
            <span class="icon"><i class="fa fa-link"></i></span>
            <span class="text">Bestellingen</span>
            </a>
            </li>
            <li>
            <a href="#">
            <span class="icon"><i class="fa fa-eye"></i></span>
            <span class="text">Batch picklijst</span>
            </a>
            </li>
            <li>
            <a href="#">
            <span class="icon"><i class="fa fa-book"></i></span>
            <span class="text">Producten</span>
            </a>
            </li>
            <li>
            <a href="#">
            <span class="icon"><i class="fa fa-question-circle"></i></span>
            <span class="text">Inkoopbestellingen</span>
            </a>
            </li>
            <li>
            <a href="#">
            <span class="icon"><i class="fa fa-pen"></i></span>
            <span class="text">Adresboek</span>
            </a>
            </li>
            <li>
            <a href="#">
            <span class="icon"><i class="fa fa-id-card"></i></span>
            <span class="text">Leveranciers</span>
            </a>
            </li>
            <li>
            <a href="#">
            <span class="icon"><i class="fa fa-id-card"></i></span>
            <span class="text">Zendingen</span>
            </a>
            </li>
            <li>
            <a href="#">
            <span class="icon"><i class="fa fa-id-card"></i></span>
            <span class="text">Magazijn</span>
            </a>
            </li>
            <li>
            <a href="#">
            <span class="icon"><i class="fa fa-id-card"></i></span>
            <span class="text">Rapporten</span>
            </a>
            </li>
            <li>
            <a href="#">
            <span class="icon"><i class="fa fa-id-card"></i></span>
            <span class="text">Tools</span>
            </a>
            </li>
            <li>
            <a href="#">
            <span class="icon"><i class="fa fa-id-card"></i></span>
            <span class="text">Instelingen</span>
            </a>
            </li>
      </ul>
      </div>
</div>

</div>

<script type="text/javascript">
  var li_items = document.querySelectorAll(".sidebar ul li");
  var hamburger = document.querySelector(".hamburger");
  var wrapper = document.querySelector(".wrapper");
  
  li_items.forEach((li_item)=>{
	li_item.addEventListener("mouseenter", ()=>{

			li_item.closest(".wrapper").classList.remove("hover_collapse");
	})
})

li_items.forEach((li_item)=>{
	li_item.addEventListener("mouseleave", ()=>{

			li_item.closest(".wrapper").classList.add("hover_collapse");

	})
})

hamburger.addEventListener("click", () => {
	hamburger.closest(".wrapper").classList.toggle("hover_collapse");
})
</script>


</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>