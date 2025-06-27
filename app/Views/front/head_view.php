<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($titulo); ?></title>

    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">


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
        
        .ratio iframe {
            max-height: 300px;
        }

        .card-img-top {
            width: 100%;
            height: 180px;
            object-fit: contain;
        }

        .card-img-top-pv {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 1rem;
        }  

        @media (max-width: 576px) {
            .card-img-top {
                height: 120px;
            }
            .main-content.p-5 {
                padding: 1rem !important;
            }
            .main-content {
                padding: 1rem !important;
            }
            .ratio iframe {
                max-height: 180px;
            }
        }
    </style>
</head>

<body>