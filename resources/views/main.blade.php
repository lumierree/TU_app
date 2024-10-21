<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/asset/css/main.css')}}">
    <title>TATA USAHA</title>
    
</head>
<body>

<header>
    <h2>Tata Usaha</h2>
</header>

<nav>
    <ul>
        <li><a href="{{url('/')}}">Dashboard</a></li>
        <li><a href="{{url('klapper')}}">Klapper</a></li>
        <li><a href="{{url('/')}}">Coming Soon</a></li>
        <li><a href="{{url('/')}}">Coming Soon</a></li>
        <li><a href="{{url('/')}}">Coming Soon</a></li>
    </ul>
</nav>
    <div class="content">

    <div class="gambar">
        <img src="public/img/ytta.jpeg" alt="" srcset="">
    </div>
        @yield('content')
    </div>
</body>


</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/asset/css/main.css">
    <title>tu</title>
</head>
<body>
    <nav>
        <ul class="sidebar">
          <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li><a href="{{url('klapper')}}">Klapper</a></li>
          <li><a href="{{url('/')}}">Coming Soon</a></li>
          <li><a href="{{url('/')}}">Coming Soon</a></li>
          <li><a href="{{url('/')}}">Coming Soon</a></li>
        </ul>
        <ul>
          <li><h1>Tata Usaha</h1></li>
          <li onclick=showSidebar()><svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#5f6368"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/></svg></li>
          <li onclick=showSidebar()><svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></li>
        </ul>
      </nav>

      <script>
        function showSidebar(){
          const sidebar = document.querySelector('.sidebar')
          sidebar.style.display = 'flex'
        }
        function hideSidebar(){
           const sidebar = document.querySelector('.sidebar')
          sidebar.style.display = 'none'
        }
      </script>
</body>
@yield('content')
</html>