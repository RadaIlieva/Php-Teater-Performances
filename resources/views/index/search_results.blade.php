<!-- resources/views/index/search_results.blade.php -->


<main class="gallery" id="teaterPerformancesList">
    @foreach($teaterperformances as $performance)
        <div class="performance">
            <img src="{{ $performance->image }}" >
            <h3>{{ $performance->name }}</h3>
            <p><strong>Date:</strong> <br>{{ $performance->date }}</p>
            <p><strong>Venue:</strong> <br>{{ $performance->venue }}</p>
            <p><strong>Ticket:</strong><br> {{ $performance->bilety }}</p>
            <div class="performance-content">
                <p><strong>Additional Info:</strong><br> {{ $performance->additional_info }}</p>
            </div>
        </div>
    @endforeach
</main>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    let searchForm = document.querySelector('.search-form');
    let teaterPerformancesList = document.getElementById('teaterPerformancesList');

    searchForm.addEventListener('input', function () {
        let searchTerm = searchForm.querySelector('input[name="query"]').value;

        fetch(`/search?query=${searchTerm}`)
            .then(response => response.text())
            .then(data => {
                teaterPerformancesList.innerHTML = data;
            });
    });
});
</script>