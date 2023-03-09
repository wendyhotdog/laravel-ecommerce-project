
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
            <a class="nav-link" href="/users">
              <span data-feather="file" class="align-text-bottom"></span>
              Kullanıcılar
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Yönetim Paneli</h1>
      </div>


      <h2>Kullanıcılar</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/users/create" class="btn btn-sm btn-outline-danger">Yeni Ekle</a>
            </div>
        </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Sıra No</th>
              <th scope="col">Ad Soyad</th>
              <th scope="col">Eposta</th>
              <th scope="col">Durum</th>
              <th scope="col">İşlemler</th>
            </tr>
          </thead>
          <tbody>
          @if(count($users)>0)
              @foreach($users as $user)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->is_active}}
                    @if($user->is_active == 1)
                        <span class="badge bg-success">Aktif</span>
                    @else
                        <span class="badge bg-danger">Pasif</span>
                    @endif
                </td>
                <td>
                    <ul class="nav float-start">
                        <li class="nav-item">
                            <a class="nav-link text-black" href="{{url("/users/$user->user_id/edit")}}">
                                <span data-feather="edit"></span>
                                Güncelle
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link list-item-delete text-black" href="{{url("/users/$user->user_id")}}">
                                <span data-feather="trash-2"></span>
                                Sil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="/users">
                                <span data-feather="lock"></span>
                                Şifre Değiştir
                            </a>
                        </li>
                    </ul>
                </td>

            </tr>
              @endforeach
          @else
              <tr>
                  <td colspan="5">
                      <p class="text-center">Herhangi bir kullanıcı bulunamadı</p>
                  </td>
              </tr>
          @endif
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script type="text/javascript" src="{{asset("build/assets/app-146f6bff.js")}}"></script>
  </body>
</html>
