<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Henrique Ventura</title>
    <link rel="stylesheet" href="bootstrap5/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap5/assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>

    <!--login admin-->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!--end login-->

    <nav class="site-nav grid">
        <h1 class="navbar-brand" style="border-bottom: none;margin-bottom:0;"><span class="display-6" style="font-weight: 900;">Henrique Ventura</span></h1>
        <ul class="">
            <li class="nav-item"><a href="#welcome" class="nav-link text-dark">Portfolio</a></li>
            <li class="nav-item"><a href="#servicos" class="nav-link text-dark">Serviços</a></li>
            <li class="nav-item"><a href="#contacto" class="nav-link text-dark">Contactos</a></li>
            <li class="nav-item"><a href="#login" style="width: 8rem;" class="btn btn-sm btn-primary nav-link text-white">Admin</a></li>
        </ul>
    </nav>

    <section id="welcome" class="grid">
        <div class="welcome-text">
            <h2 class="lead" style="font-weight: 900;">Software Developer <br />& Programador Competitivo</h2>
            <p class="lead">Olá seja muito bem vindo ao meu portfolio, sou estudante de Engenharia de Informatica
                no instituto de tecnologias de informação e comunicação, em Luanda.
                Sou desenvolvedor de software a mais de 2 anos, minhas stacks: PHP/ <kbd>Laravel</kbd>, <kbd>C#</kbd> .NET
                , Dart/ <kbd>Flutter</kbd> e <kbd>MySQL</kbd> com gerenciador de banco de dados.
            </p>
            <a href="#portfolio" class="btn btn-primary text-nowrap" style="width: 10rem;margin-left:0%;">Ver meus trabalhos</a>
        </div>

        <div class="welcome-img">
            <img src="assets/img/home-right.png" alt="banner">
        </div>
    </section>

    <div class="jumbotron servicos mb-3" id="servicos">
        <h2><a name="servicos" class="link"></a></h2>
        <div class="container text-center">
            <h2 class="display-6">Serviços</h2>
            <p class="lead pb-4"> Corrupti, dolorum, ratione minus ipsam accusamus fugiat blanditiis
                doloremque provident deserunt molestias.
            </p>
            <div class="row">
                <div class="col-lg-4  col-sm-4">
                    <div class="card shadow-lg circulo centralizar" style="width: 18rem;">
                        <img src="assets/img/nos.jpg" class="card-img-top " alt="...">
                        <div class="card-body ">
                            <h5 class="card-title lead">2M App</h5>
                            <p class="card-text text-muted" style="font-size: 1rem;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-sm btn-dark" style="width:10rem;">Ler mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4">
                    <div class="card shadow-lg circulo centralizar mt-4 mb-4" style="width: 18rem;">
                        <img src="assets/img/project_2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title lead">CS App</h5>
                            <p class="card-text text-muted" style="font-size: 1rem;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-sm btn-dark" style="width:10rem;">Ler mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  col-sm-4">
                    <div class="card shadow-lg circulo centralizar" style="width: 18rem;">
                        <img src="assets/img/equipe.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title lead">Socia App</h5>
                            <p class="card-text text-muted" style="font-size: 1rem;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-sm btn-dark" style="width:10rem;">Ler mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="jumbotron contacto bg-primary text-white mb-3" id="contacto">
        <div class="container">
            <h2 class="display-6 mb-4 text-center text-white">Contacto</h2>
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mt-4 mb-4 text-white lead">Voce tem alguma pergunta ?</h2>
                    <h4 class="text-white lead">Endereco : Av. Sao Paulo (LUANDA)</h4>
                    <h4 class="text-white lead">Ligue para nos: (+244)-927476913</h4>
                    <h4 class="text-white lead">Escreva para nos : trycode2018@gmail.com</h4>
                </div>
                <div class="col-lg-6">
                    <form>
                        <div class="form-group ">
                            <label for="nome" class="lead">Nome</label>
                            <input type="text" class="form-control form-control-sm" id="nome" placeholder="Nome Completo">
                        </div>

                        <div class="form-group">
                            <label for="emial" class="lead">Email</label>
                            <input type="email" class="form-control form-control-sm" id="email" placeholder="trycode2018@gmail.com">
                        </div>

                        <div class="form-group">
                            <label for="assunto" class="lead">Assunto</label>
                            <input type="text" class="form-control form-control-sm" id="assunto" placeholder="Assunto da mensagem">
                        </div>

                        <div class="form-group mb-2">
                            <label for="conteudo" class="lead">Conteudo</label>
                            <textarea type="text" class="form-control form-control-sm" id="conteudo" placeholder="Conteudo"></textarea>
                        </div>

                        <button type="submit" style="width: 10rem;" class="btn btn-sm btn-dark mb-3">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="grid">
        <p class="copyright">Copyright 2021 &copy; Trycode</p>
        <ul class="social">
            <li><img src="assets/img/svgs/brands/facebook-messenger.svg" alt=""></li>
            <li><img src="assets/img/svgs/brands/twitter.svg" alt=""></li>
        </ul>
    </footer>

    <script src="bootstrap5/assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>