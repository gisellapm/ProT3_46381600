<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProT2_46381600</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        html, body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: 'Quicksand', Arial, Helvetica, sans-serif;
            background-color: var(--bs-secondary-bg-subtle);
            height: 100%;
            color: #222222;
        }
        .main-content {
            flex: 1 0 auto;
        }
        footer {
            flex-shrink: 0;
        }
        .card-img-top {
            width: 100%;
            height: 200px;         /* Altura para pantallas grandes */
            object-fit: cover;
        }

        @media (max-width: 576px) {
            .card-img-top {
                height: 120px;     /* Altura menor para móviles */
            }
            .main-content.p-5 {
                padding: 1rem !important;
            }
            @media (max-width: 576px) {
                .main-content {
                    padding: 1rem !important;
                }
            }
        }
    </style>
</head>

<body>