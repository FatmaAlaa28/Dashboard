
<script src="{{ asset('assets/js/vendor.bundle.base.js') }}"></script>t>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<!-- Additional JS Files -->
 
<script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/js/template.js') }}"></script>
<script src="{{ asset('assets/js/settings.js') }}"></script>
<script src="{{ asset('assets/js/todolist.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
<script src="{{ asset('assets/js/Chart.roundedBarCharts.js') }}"></script>


<script src="{{ asset('assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/js-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Force all dropdowns to be collapsed on page load
        document.querySelectorAll('.collapse').forEach(function (element) {
            element.classList.remove('show'); // Ensure all lists start as closed
        });

        // Reset aria-expanded to false to avoid Bootstrap remembering state
        document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(function (link) {
            link.setAttribute('aria-expanded', 'false');
        });
    });
</script>
