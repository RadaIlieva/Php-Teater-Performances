

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <title>SnapX Photography by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-snapx-photography.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 576 SnapX Photography

https://templatemo.com/tm-576-snapx-photography

-->

<style>
    
    main.gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px;
    }

    .performance {
    width: 450px; /* Фиксирана ширина */
    height: 800px; /* Фиксирана височина */
    background-color: #F3F8FF;
    padding: 10px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.performance img {
    width: 100%;
    height: 60%; /* Размер на снимката в отношение към родителя */
    object-fit: cover;
    margin-bottom: 10px;
    margin-top:5px;
    border-top-left-radius: 15px; /* Rounded corners for the top-left */
    border-top-right-radius: 15px;
}


    .performance h3{
      color: # 000000; 
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 15px;
      padding: 10px;
      font-family: Verdana;
    }
    .performance p {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 5px; /* Добавете подходящ вътрешен паддинг */
        font-family: sans-serif; /* Заменете 'Your Chosen Font' със стойността на предпочитания от вас шрифт */
        color: # 000000; 
    }

    .additional-info {
        white-space: pre-line;
    }

    .search-form {
    text-align: center;
    margin: 20px 0;
}

.search-form input[type="text"] {
    padding: 10px;
    border: 2px solid #3498db; /* Цвят на рамката */
    border-radius: 5px; /* Заоблете ъглите */
    outline: none;
}

.search-form button {
    padding: 10px 15px;
    background-color: #3498db; /* Цвят на фона на бутона */
    color: #ffffff; /* Цвят на текста на бутона */
    border: none;
    border-radius: 5px; /* Заоблете ъглите */
    cursor: pointer;
}

/* При фокусиране на полето за търсене */
.search-form input[type="text"]:focus {
    border-color: #2980b9; /* Променете цвета на рамката при фокус */
}


</style>

  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.html" class="logo">
                    <img src="assets/images/image1.png" alt="Teater" style="width: 80px; height: auto;">
                    </a>
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html" class="active">Система за Театрални постановки </a></li>
                    </ul> 
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  

  <!-- ***** Main Banner Area Start ***** -->
  
  <div class="main-banner" style="background-image: url('assets/images/image3.jpg'); opacity: 0.7;">
  <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="header-text">
            <h2>Добре дошли <em> в света</em> </h2>
            <h2> на</h2>
            <h2> <em>Театъра</em></h2>
          </div>
        </div>
    </div>
</div>
  </div> 


  
  <!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.html" class="logo">
                        <img src="assets/images/image1.png" alt="Teater" style="width: 80px; height: auto;">
                    </a>
                    <ul class="nav">
                        <li><a href="index.html" class="active">Система за Театрални постановки </a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<form action="{{ route('search') }}" method="GET" class="search-form">
    @csrf
    <input type="text" name="query" placeholder="Търсене...">
</form>

<main class="gallery" id="teaterPerformancesList">
    @foreach($teaterperformances as $performance)
        <div class="performance">
            <img src="{{ $performance->image }}" >
            <h3>{{ $performance->name }}</h3>
            <p><strong>Date:</strong> <br>{{ $performance->date }}</p>
            <p><strong>Venue:</strong> <br>{{ $performance->venue }}</p>
            <p><strong>Ticket:</strong><br> {{ $performance->bilety }}</p>
            <div class="performance-content">
                <p><strong>Additional Info:</strong><br> {{ $performance->additional_info }}</p>
            </div>
        </div>
    @endforeach
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    let searchForm = document.querySelector('.search-form');
    let teaterPerformancesList = document.getElementById('teaterPerformancesList');

    searchForm.addEventListener('input', function () {
        let searchTerm = searchForm.querySelector('input[name="query"]').value;

        fetch(`/search?query=${searchTerm}`)
            .then(response => response.text())
            .then(data => {
                teaterPerformancesList.innerHTML = data;
            });
    });
});
</script>


    <footer>

    </footer>

  </body>
</html>