<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=close" />

    <link rel="stylesheet" href="../../style/showSelectedImage.css">
</head>

<style>
    .paragraph-text {
        font-family: "Afacad Flux", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        font-variation-settings:
            "slnt" 0;
    }

    .material-symbols-outlined {
        font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 24,
    }
</style>

<body>
    <div class="show-profile_image">
        <div class="profile-image_container">

            <div class="heading">
                <p class="paragraph-text">Drag image to adjust</p>
                <span class="image-close_icon" id="close-button"><i class="material-symbols-outlined"><svg
                            xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#fcfefe">
                            <path
                                d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                        </svg></i>
                </span>
            </div>

            <img class="user-image" src="../../pic/images.png" alt="user-image">

            <div class="footer">
                <p>Hello</p>
            </div>

        </div>
    </div>

</body>