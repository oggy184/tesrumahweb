    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    </body>
    <script>
        // Get Data User
        $.ajax({
            url: "https://reqres.in/api/users",
            type: "get",
            data: {},
            success: function(r) {
                console.log(r)
                for (let index = 0; index < r.data.length; index++) {
                    $('.userdata').append('<div class="col-xs-12 col-md-6 col-lg-4 mb-5 mx-auto"><div class="card o-hidden border-0 shadow-lg" style="width: 18rem;"> <img src = "' + r.data[index].avatar +
                        '"class = "card-img-top"alt = "..." ><div class = "card-body"><h5 class = "card-title" > ' + r.data[index].first_name + ' ' + r.data[index].last_name + ' </h5> <p class = "card-text" >' + r.data[index].email + '</p><button type="button" class="btn btn-update btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editdata" data-upt="' + r.data[index].id + '" onclick="upt(' + r.data[index].id + ')">Edit</button><button type = "button"class = "btn btn-delete btn-danger btn-sm" data-dlt="' + r.data[index].id + '"  onclick="dlt(' + r.data[index].id + ')"> Delete </button></div ></div></div > ')
                }


            }
        });

        // Save User Data
        $(".btn-create").on("click", function() {
            $.ajax({
                url: "https://reqres.in/api/users",
                type: "post",
                data: {
                    name: $('#name').val(),
                    job: $('#job').val(),
                },
                success: function(r) {
                    alert('Name : ' + r.name + ' Job : ' + r.job + ' Create_at : ' + r.createdAt);
                }

            })
        });

        // Get User Id for Update
        function upt(id) {
            $.ajax({
                url: "https://reqres.in/api/users/" + id,
                type: "get",
                data: {},
                success: function(r) {
                    console.log(r)
                    $('#editname').val(r.data.first_name)
                    $('#editid').val(r.data.id)
                }
            })
        };

        // Save Updated Data
        $(".btn-upt").on("click", function() {
            var id = $('#editid').val()
            $.ajax({
                url: "https://reqres.in/api/users/" + id,
                type: "put",
                data: {
                    name: $('#editname').val(),
                    job: $('#editjob').val(),
                },
                success: function(r) {
                    alert('Name : ' + r.name + ' Job : ' + r.job + ' UpdatedAt : ' + r.updatedAt);
                }

            })
        });

        function delay() {
            $.ajax({
                url: "https://reqres.in/api/users?delay=3",
                type: "get",
                data: {},
            })
        }

        // Delete User Data
        function dlt(id) {
            $.ajax({
                url: "https://reqres.in/api/users/" + id,
                type: "delete",
                data: {
                    delay: 3
                },
                success: function(r) {
                    alert('204');
                    console.log(r)
                },
            })
        };
    </script>

    </html>