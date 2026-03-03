<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>EcoVibe</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navigation -->
    <header>
        <nav class="navbar navbar-expand-md bg-white navbar-light border-bottom p-3">
            <div class="container">
                <a href="index-php" class="navbar-brand">
                    <i class="fa-solid fa-clover text-success"></i> <!-- ändrar färg -->
                    <span>EcoVibe</span>
                </a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#" class="nav-link active">Hem</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Tjänster</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Om oss</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Kontakt</a></li>
                </ul>
                <form class="d-flex">
                    <input type="search" class="form-control me-2" placeholder="Sök...">
                    <button type="submit" class="btn btn-success">Sök</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <!-- Hero Section / JUmbotron: inledning -->
        <section class="hero text-center text-white py-5"> <!-- py = utrymme upp och ner -->
            <div class="container py-5">
                <h1 class="display-4 fw-bold">
                    <i class="fa-solid fa-seedling"></i>
                    Bygg en grönare framtid.
                </h1>
                <p class="lead mt-3">
                    Vi hjälper företag och privatpersoner att minska sin miljöpåverkan genom hållbara lösningar och innovativa tjänster.
                </p>
                <a href="#" class="btn btn-light btn-lg text-success rounded-pill mt-2">
                    Kom igång <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
            </div>
        </section>
        <!-- Features section: varför ska man välja denna tjänst? -->
        <section class="py-5">
            <div class="container text-center">
                <h2 class="mb-5 text-success">Varför välja EcoVibe?</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-card p-4">
                            <i class="fa-solid fa-solar-panel fa-3x text-success"></i>
                            <h5 class="mt-3">Förnybar energi</h5>
                            <p>Vi stöder övervången till sol- och vindkraft.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card p-4">
                            <i class="fa-solid fa-recycle fa-3x text-success"></i>
                            <h5 class="mt-3">Cirkulär ekonomi</h5>
                            <p>Minska avfall och återvinna resurser genom hållbara processer.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card p-4">
                            <i class="fa-solid fa-leaf fa-3x text-success"></i>
                            <h5 class="mt-3">Ekologiskt</h5>
                            <p>Våra tjänster är utformade med miljövänlighet i fokus.</p>
                        </div>
                    </div>
                </div>
        </section>
    </main>
</body>

</html>