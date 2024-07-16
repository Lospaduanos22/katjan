<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers for You</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Flowers for you</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="flower.gif" alt="Flowers" class="img-fluid">
                    <div class="tenor-gif-embed mt-3" data-postid="10492517158609762937" data-share-method="host" data-aspect-ratio="1.18519" data-width="100%">
                        <a href="https://tenor.com/view/flowers-gif-10492517158609762937">Flowers Sticker</a> from <a href="https://tenor.com/search/flowers-stickers">Flowers Stickers</a>
                    </div> 
                    <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Another Button trigger modal (example) -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#anotherModal">
        Launch another modal
    </button>
    
    <!-- Another Modal (example) -->
    <div class="modal fade" id="anotherModal" tabindex="-1" aria-labelledby="anotherModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="anotherModalLabel">Another Modal Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Content for another modal...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (including Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlIY1kXb1EUl7GmUka58r98QE5cQJrHJfj2KOMfKxdj8tfNkwNfZp00JGLT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cVKIPhG8Pgs0IB8IRWS07gH9tgWY1zLOTrsE5rsnF1Edz7ZpfUwhj7en66e5v2lF" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>
</html>
