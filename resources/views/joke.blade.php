<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Joke Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="bg-info" style="height: 40pc;">
        <div class="row justify-content-center" style="padding-top: 100px">
            <div class="col-md-6 ">
                <div class="card bg-secondary ">
                    <div class="card-header bg-success text-white">
                        <h3 class="text-center">Random Joke Generator</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">

                            <label class="card-header  text-white" for="categorySelect"><h4>Select Category:</h4></label>
                            <select id="categorySelect" class="form-select">
                                <option value=${response.category}>Any</option>
                                <option value="Miscellaneous">Miscellaneous</option>
                                <option value="Programming">Programming</option>
                                <option value="Dark">Dark</option>
                                <option value="Spooky">Spooky</option>
                                <option value="Christmas">Christmas</option>
                            </select>
                        </div>
                        <div id="contentContainer"></div>
                        <button id="fetchButton" class="btn btn-primary mt-5 mb-3">Generate New JOKE</button>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                    <script>
                        $(document).ready(function() {
                            $('#fetchButton').on('click', function() {
                                const selectedCategory = $('#categorySelect').val();
                                const apiUrl = `https://sv443.net/jokeapi/v2/joke/${selectedCategory}`;

                                $.ajax({
                                    url: apiUrl,
                                    type: 'GET',
                                    dataType: 'json',
                                    success: function(response) {
                                        const contentDiv = $('#contentContainer');
                                        contentDiv.empty();
                                        contentDiv.append(`
                                            <div class="alert alert-info">
                                                <h4 class="alert-heading">Category: ${response.category}</h4>
                                                <p class="mb-0">${response.joke}</p>
                                            </div>
                                        `);
                                    },
                                    error: function(xhr, status, error) {
                                        console.error('Error fetching data:', error);
                                    }
                                });
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
