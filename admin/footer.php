<!-- Footer Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
                &copy; <a href="#">Your Site Name</a>, All Right Reserved.
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
</div>
<!-- Content End -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="./lib/chart/chart.min.js"></script>
<script src="./lib/easing/easing.min.js"></script>
<script src="./lib/waypoints/waypoints.min.js"></script>
<script src="./lib/owlcarousel/owl.carousel.min.js"></script>
<script src="./lib/tempusdominus/js/moment.min.js"></script>
<script src="./lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="./lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<!--alert-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Template Javascript -->
<script src="./js/main.js"></script>
<script>

    let ochirishBTN = document.querySelectorAll(".ochirishBTN");
    let newsochirishBTN = document.querySelectorAll(".newsochirishBTN");

    newsochirishBTN.forEach((button) => {
        button.addEventListener("click", () => {
            let newsID = button.getAttribute("href").substring(1);

            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this category!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        // Send an AJAX request to deleteCategory.php
                        fetch('admin_function.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                newsID: newsID
                            }),
                        })
                            .then(response => response.text())
                            .then(data => {
                                // console.log(data); // Log the response from the server
                                swal("Poof! The category has been deleted!", {
                                    icon: "success",
                                }).then(() => {
                                    window.location.reload();
                                });
                            })
                            .catch(error => {
                                console.error('Error:', error);
                            });
                    } else {
                        swal("The category is safe!");
                    }
                });
        });
    });

    ochirishBTN.forEach((button) => {
        button.addEventListener("click", () => {
            let categoryID = button.getAttribute("href").substring(1);

            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this category!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        // Send an AJAX request to deleteCategory.php
                        fetch('admin_function.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                categoryID: categoryID
                            }),
                        })
                            .then(response => response.text())
                            .then(data => {
                                // console.log(data); // Log the response from the server
                                swal("Poof! The category has been deleted!", {
                                    icon: "success",
                                }).then(() => {
                                    window.location.reload();
                                });
                            })
                            .catch(error => {
                                console.error('Error:', error);
                            });
                    } else {
                        swal("The category is safe!");
                    }
                });
        });
    });



</script>

</body>

</html>