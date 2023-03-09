
<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard Users Page</title>

    <link rel="stylesheet" href="{{asset("build/assets/app-37892e52.css")}}">




    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset("build/assets/dashboard.css")}}" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">Laravel Ecommerce</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Çıkış Yap</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Yönetim Paneli
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Str::of(url()->current())->contains("/users")? "active" : ""}}" href="{{url("/users")}}">
              <span data-feather="file" class="align-text-bottom"></span>
              Kullanıcılar
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2>Kullanıcılar</h2>
      </div>



        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/users/create" class="btn btn-sm btn-outline-danger">Kullanıcı Düzenle</a>
            </div>
        </div>
        <h2>Kullanıcı Düzenle</h2>
      <div class="table-responsive">
        <form action="{{url("/users/$user->user_id")}}" method="POST">
            @csrf
            @method("PUT")
            <div class="row">
                <div class="col-lg-6">
                        <label for="name" class="form-label">Ad Soyad</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ad Soyad Giriniz" value="{{$user->name}}">
                </div>
                    <div class="col-lg-6">
                        <label for="email" class="form-label">Email Giriniz</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E posta Giriniz" value="{{$user->email}}">
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" id="is_admin" name="is_admin" value="1" {{$user->is_admin == 1 ? "checked" : ""}}>
                        <label class="form-check-label" for="is_admin">Yetkili Kullanıcı</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{$user->is_active == 1 ? "checked" : ""}}>
                        <label class="form-check-label" for="is_active">Aktif Kullanıcı</label>
                    </div>
                </div>
            </div>

            <div class="row">
                    <div class="col-12">
                         <button type="submit" class="btn btn-success mt-2">Kaydet</button>
                    </div>
            </div>
        </form>
      </div>
    </main>
  </div>
</div>


    <script type="text/javascript" src="{{asset("build/assets/app-146f6bff.js")}}"></script>
  </body>
</html>
