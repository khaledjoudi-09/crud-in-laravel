 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <title>@yield("title")</title>

</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- الشعار -->
            <a class="navbar-brand" href="#">
                <img src="/assets/img/logo.png" width="30" height="30" alt="">
            </a>
            
            <!-- زر التبديل للأجهزة الصغيرة -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <!-- الأزرار في الوسط -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Title</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Users</a>
                    </li>
                </ul>
                
                <!-- زر تسجيل الخروج في النهاية -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"> log-in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


 
      <br>
      
      <div class="content">
      @yield("content")
      </div>
      <br>
      <footer class="bg-light text-center py-3 mt-auto">
        <div class="container">
            <span>  joudi09😍</span>
            <span>حقوق الطبع والنشر © 2024 شركتي. جميع الحقوق محفوظة.</span>
        </div>
    </footer>
      
</body>

</html>



   <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary ">-->
    <!--    <img src="./assets/img/logo.png"  title="joudi09😍" height="65px">-->
   <!--     <div class="container-fluid">-->
    <!--      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"-->
    <!--       aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--    <span class="navbar-toggler-icon"></span>-->
   <!--       </button>-->
    <!--      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">  -->
    <!--        <div class="navbar-nav" > -->
    <!--          <a class="nav-link active" aria-current="page" href="/">posts</a>-->
    <!--          <a class="nav-link" href="#">users</a>-->
              
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </nav>-->
